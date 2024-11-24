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
                'company_id' => $validatedData['company_id'],
                'user_type' => $validatedData['user_type'],
                'email' => $validatedData['email'],
                'name' => $validatedData['name'],
                'password' => bcrypt($validatedData['password']),
                'phone' => $validatedData['phone'],
                'selfie' => $uploadedFiles['selfie'] ?? null,
                'status' => 'pending',
            ]);
    
            // Create the employee
            Employee::create([
                'user_id' => $user->id,
                'emp_company_id' => $validatedData['company_id'],
                'emp_type' => $validatedData['user_type'],
                'emp_code' => $validatedData['emp_code'] ?? null,
                'emp_name' => $validatedData['name'],
                'emp_location' => $validatedData['emp_location'] ?? null,
                'emp_branch' => $validatedData['emp_branch'] ?? null,
                'emp_function' => $validatedData['emp_function'] ?? null,
                'emp_phone' => $validatedData['phone'],
                'emp_email' => $validatedData['email'],
                'emp_fm_vehicle_no' => $validatedData['emp_fm_vehicle_no'] ?? null,
                'emp_dl_date' => $validatedData['emp_dl_date'] ?? null,
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
            $uploadedFiles[$field] = "/$path/$filename";
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
