<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Employee;
use App\Models\CheckInCheckout;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Login Method


    public function employee_register(Request $request)
    {
        // Validate required fields for both User and Employee
        $validatedData = $request->validate([
            'company_id' => 'required',
            'user_type' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
    
        // Begin database transaction
        DB::beginTransaction();
    
        try {
            // Upload files if provided

            // dd($request->all());die;

            $uploadedFiles = $this->uploadFiles($request, [
                'selfie' => 'upload/selfie',
                'aadhar' => 'upload/aadhar',
                'pan' => 'upload/pan',
                'photo' => 'upload/photo',
            ]);
    
            // Create the user
            $user = User::create([
                'code' => $request->emp_code,
                'company_id' => $request->company_id,
                'user_type' => $request->user_type,
                'email' => $request->email,
                'name' => $request->name ?? null, 
                'password' => bcrypt($request->password),
                'phone' => $request->phone ?? null,
                'selfie' => $uploadedFiles['selfie'] ?? null,
                'status' => 'pending',
            ]);
    
            // Create the employee
            Employee::create([
                'user_id' => $user->id,
                'emp_company_id' => $request->company_id?? null,
                'emp_type' => $request->user_type?? null,
                'emp_code' => $request->emp_code ?? null,
                'emp_name' => $request->name?? null,
                'emp_location' => $request->emp_location ?? null,
                'emp_branch' => $request->emp_branch ?? null,
                'emp_function' => $request->emp_function ?? null,
                'emp_phone' => $request->phone?? null,
                'emp_email' => $request->email?? null,
                'emp_fm_vehicle_no' => $request->emp_fm_vehicle_no ?? null,
                'emp_dl_date' => $request->emp_dl_date ?? null,
                'emp_selfie' => $uploadedFiles['selfie'] ?? null,
                'emp_aadhar' => $uploadedFiles['aadhar'] ?? null,
                'emp_pan' => $uploadedFiles['pan'] ?? null,
                'emp_photo' => $uploadedFiles['photo'] ?? null,
                'emp_status' => 'pending',
            ]);
    
            // Commit the transaction
            DB::commit();
    
            return response()->json([
                'user' => $user,
                'status' => 1,
                'message' => 'Employee registered successfully!',
            ], 201);
        } catch (\Exception $e) {
            // Rollback the transaction on failure
            DB::rollBack();
    
            return response()->json([
                'error' => 'Failed to register employee.',
                'status' => 0,
                'details' => $e->getMessage(),
            ], 500);
        }
    }
    
/**
 * Handle file uploads for multiple input fields (optional).
 *
 * @param Request $request
 * @param array $fields
 * @return array
 */
private function uploadFiles(Request $request, array $fields)
{
    $uploadedFiles = [];
    foreach ($fields as $field => $path) {
        if ($request->hasFile($field)) {
            $file = $request->file($field);
            $filename = uniqid() . '_' . $file->getClientOriginalName(); // Use PHP's uniqid
            $file->move(public_path($path), $filename);
            $uploadedFiles[$field] = url("public/"."$path/$filename");
        }
    }
    return $uploadedFiles;
}



public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (!Auth::attempt($credentials)) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    $user = Auth::user()->toArray();

    // Replace all null values with empty strings
    $user = array_map(function ($value) {
        return $value === null ? '' : $value;
    }, $user);

    // Generate Token
    $token = Auth::user()->createToken('API Token')->accessToken;

    return response()->json([
        'user' => $user,
        'token' => $token,
    ]);
}


    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out',
            'status' => 1
        ]);
    }   


  
    public function check_in_checkouts(Request $request)
    {
        try {
            // Validate the request data
            $validatedData = $request->validate([
                'user_id' => 'required|integer|exists:users,id',
                'phone_no' => 'required|string|regex:/^[0-9]{10}$/',
                'selfie' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                'lat' => 'nullable|regex:/^-?\d{1,2}\.\d{1,6}$/',
                'long' => 'nullable|regex:/^-?\d{1,3}\.\d{1,6}$/',
                'place' => 'nullable|string|max:255',
                'in_out_status' => 'nullable|string|in:in,out',
            ]);
    
            $url = null;
    
            // Handle selfie upload if provided
            if ($request->hasFile('selfie')) {
                $screenshot = $request->file('selfie');
                $milisecond = round(microtime(true) * 1000);
                $name = $screenshot->getClientOriginalName();
                $actual_name = str_replace(" ", "_", $name);
                $uploadName = $milisecond . "_" . $actual_name;
                $screenshot->move(public_path('upload/check_in_checkout'), $uploadName);
                $url = url('public/upload/check_in_checkout/' . $uploadName);
            }
    
            // Generate a 6-digit OTP if not provided in the request
            $otp = $validatedData['otp'] ?? random_int(100000, 999999);
    
            // Insert the data into the database
            $checkInCheckout = new CheckInCheckout();
            $checkInCheckout->ckn_user_id = $validatedData['user_id'];
            $checkInCheckout->ckn_phone_no = $validatedData['phone_no'];
            $checkInCheckout->ckn_selfie = $url;
            $checkInCheckout->ckn_otp = $otp;
            $checkInCheckout->ckn_lat = $validatedData['lat'] ?? null;
            $checkInCheckout->ckn_long = $validatedData['long'] ?? null;
            $checkInCheckout->ckn_place = $validatedData['place'] ?? null;
            $checkInCheckout->ckn_in_out_status = $validatedData['in_out_status'] ?? null;
            $checkInCheckout->save();
    
            // Return a success response
            return response()->json([
                'message' => 'Check-in data saved successfully.',
                'data' => $checkInCheckout,
                'status' =>1,
            ], 201);
    
        } catch (ValidationException $e) {
            // Return a custom JSON response for validation errors
            return response()->json([
                'message' => 'Validation failed.',
                'errors' => $e->errors(),
                'status' => 0,
            ], 422);
        }
    }
    

public function verify_otp(Request $request)
{
    try {
        // Validate the request data
        $validatedData = $request->validate([
            'user_id' => 'required|integer|exists:check_in_checkouts,ckn_user_id',
            'otp' => 'required|integer|digits:6',
        ]);

        // Check if the OTP exists and matches the user
        $checkInCheckout = CheckInCheckout::where('ckn_user_id', $validatedData['user_id'])
            ->where('ckn_otp', $validatedData['otp'])
            ->first();

        if (!$checkInCheckout) {
            // OTP does not match
            return response()->json([
                'message' => 'Invalid OTP.',
            ], 400);
        }

        // Mark the OTP as verified (optional, depending on your use case)
        $checkInCheckout->ckn_status = 'verified';
        $checkInCheckout->save();

        // Return a success response
        return response()->json([
            'message' => 'OTP verified successfully.',
            'data' => $checkInCheckout,
        ], 200);

    } catch (ValidationException $e) {
        // Return a custom JSON response for validation errors
        return response()->json([
            'message' => 'Validation failed.',
            'errors' => $e->errors(),
        ], 422);
    }
}




}
