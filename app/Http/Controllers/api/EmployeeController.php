<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Consignment;
use App\Models\CheckInCheckout;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class EmployeeController extends Controller
{
    public function consignment_create(Request $request)
    {

        try {
            // Validate the request data
            $validatedData = $request->validate([
                'user_id' => 'required',
                // Add any other validation rules as needed
            ]);

            $randomNumber = rand(1, 100);


            if ($request->form_type == 'undeliverd') {
                
                $dispatch_id = $request->dispatch_id;

                foreach ($dispatch_id as $key => $value) {

                    // Insert the data into the database
                    $consignment = new Consignment();
                    $consignment->unique_id = $randomNumber ?? null;
                    $consignment->consignment_type = $request->consignment_type ?? null;
                    $consignment->form_type = $request->form_type ?? null;
                    $consignment->dispatch_id = $request->dispatch_id[$key] ?? null;
                    $consignment->appointment = $request->appointment[$key] ?? null;
                    $consignment->logistic_name = $request->logistic_name[$key] ?? null;
                    $consignment->client_name = $request->client_name[$key]??null;
                    $consignment->no_of_cn = $request->no_of_cn[$key] ?? null;
                    $consignment->total_package = $request->total_package[$key] ?? null;
                    $consignment->total_weight = $request->total_weight[$key] ?? null;
                    $consignment->vehicle_number = $request->vehicle_number[$key] ?? null;
                    $consignment->status = $request->status ?? 'pending';  // Default to 'pending' if not provided
                    $consignment->lat = $request->lat;
                    $consignment->long = $request->long;
                    $consignment->fetch_address = $request->fetch_address;
                    $consignment->created_by = $request->user_id;
                    $consignment->save();
                }
        
                

            } else {
                // Handle any file uploads if necessary
                $picture_url = null;
                if ($request->hasFile('picture')) {
                    $visitCard = $request->file('picture');
                    $milisecond = round(microtime(true) * 1000);
                    $name = $visitCard->getClientOriginalName();
                    $actual_name = str_replace(" ", "_", $name);
                    $uploadName = $milisecond . "_" . $actual_name;
                    $visitCard->move(public_path('upload/consignments'), $uploadName);
                    $picture_url = url('public/upload/consignments/' . $uploadName);
                }
        
                // Insert the data into the database
                $consignment = new Consignment();
                $consignment->unique_id = $randomNumber ?? null;
                $consignment->consignment_type = $request->consignment_type ?? null;
                $consignment->form_type = $request->form_type ?? null;
                $consignment->dispatch_id = $request->dispatch_id ?? null;
                $consignment->appointment = $request->appointment ?? null;
                $consignment->logistic_name = $request->logistic_name ?? null;
                $consignment->client_name = $request->client_name;
                $consignment->no_of_cn = $request->no_of_cn ?? null;
                $consignment->total_package = $request->total_package ?? null;
                $consignment->package_type = $request->package_type ?? null;
                $consignment->total_weight = $request->total_weight ?? null;
                $consignment->vehicle_number = $request->vehicle_number ?? null;
                $consignment->condition = $request->condition ?? null;
                $consignment->handling_cost_amount = $request->handling_cost_amount ?? null;
                $consignment->other_employee = $request->other_employee ?? null;
                $consignment->review_condition = $request->review_condition ?? null;
                $consignment->status = $request->status ?? 'pending';  // Default to 'pending' if not provided
                $consignment->created_by = $request->user_id;
                $consignment->picture = $picture_url;  // Save the visit card URL if uploaded
                $consignment->lat = $request->lat;
                $consignment->long = $request->long;
                $consignment->fetch_address = $request->fetch_address;
                $consignment->save();
            }
            
    
            
    
            // Return a success response
            return response()->json([
                'message' => 'Consignment created successfully.',
                'data' => $consignment,
            ], 201);
    
        } catch (ValidationException $e) {
            // Return a custom JSON response for validation errors
            return response()->json([
                'message' => 'Validation failed.',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            // Catch any general exception
            return response()->json([
                'message' => 'An error occurred.',
                'error' => $e->getMessage(),
            ], 500);
        }

    }
}
