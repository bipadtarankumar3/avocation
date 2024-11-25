<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

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
            'name' => 'required',
            'password' => 'required|min:8',
            'phone' => 'required|numeric',
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
                'name' => $request->name,
                'password' => bcrypt($request->password),
                'phone' => $request->phone,
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
                'message' => 'Employee registered successfully!',
            ], 201);
        } catch (\Exception $e) {
            // Rollback the transaction on failure
            DB::rollBack();
    
            return response()->json([
                'error' => 'Failed to register employee.',
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

        $user = Auth::user();

        // Generate Token
        $token = $user->createToken('API Token')->accessToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
        ]);
    }
}
