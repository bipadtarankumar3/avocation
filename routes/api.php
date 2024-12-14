<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\CompanyController;
use App\Http\Controllers\api\SalesController;
use App\Http\Controllers\api\EmployeeController;
use App\Http\Controllers\api\MasterController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/master/company', [CompanyController::class, 'companyList']);
Route::post('/employee_register', [AuthController::class, 'employee_register']);
// Route::post('/field_employee_register', [AuthController::class, 'employee_register']);
// Route::post('/sales_register', [AuthController::class, 'employee_register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/reg_verify_otp', [AuthController::class, 'reg_verify_otp']); // Adjusted method name to `checkin`


Route::middleware('auth:api')->group(function () {
    // Logout route
    Route::post('/user', [AuthController::class, 'userDetails']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // Check-in checkouts route
    Route::post('/check_in_checkouts', [AuthController::class, 'check_in_checkouts']); // Adjusted method name to `checkin`
    Route::post('/verify_otp', [AuthController::class, 'verify_otp']); // Adjusted method name to `checkin`

    Route::post('/sales_create', [SalesController::class, 'sales_create']);
    Route::post('/consignment_create', [EmployeeController::class, 'consignment_create']);
    Route::post('/area', [MasterController::class, 'area']);

});