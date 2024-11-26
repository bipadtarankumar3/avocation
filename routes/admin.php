<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\UserManagementController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\AttendanceController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\ConsignmentController;
use App\Http\Controllers\admin\DriverController;
use App\Http\Controllers\admin\SalesController;
use App\Http\Controllers\admin\VisitController;
use App\Http\Controllers\admin\DeliveryManagementController;
use App\Http\Controllers\admin\LogisticController;

Route::get('login', [AdminAuthController::class, 'login'])->name('login');
Route::get('back-to-admin', [AdminAuthController::class, 'backToAdmin']);
Route::post('admin-login-action', [AdminAuthController::class, 'adminLoginAction']);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['App\Http\Middleware\AdminAuth']], function () {
    Route::get('dashboard', [AdminAuthController::class, 'dashboard']);
    Route::get('profile', [AdminAuthController::class, 'profile']);
    Route::put('/admin/profile/update', [AdminAuthController::class, 'updateProfile'])->name('profile.update');
    Route::put('/admin/password/update', [AdminAuthController::class, 'updatePassword'])->name('password.update');
    Route::get('logout', [AdminAuthController::class, 'logout']);
    
    Route::get('mapView/1', [AttendanceController::class, 'mapView']);
    Route::get('live-tracking', [AttendanceController::class, 'liveTracking']);
    
    Route::group(['prefix' => 'company', 'as' => 'company.'], function () {
        Route::get('/', [CompanyController::class, 'companyList']);
        Route::get('add', [CompanyController::class, 'adCompany']);
        Route::get('edit/{id}', [CompanyController::class, 'edit']);
        Route::post('save_company/{id?}', [CompanyController::class, 'save_company']);
        Route::get('delete/{id}', [CompanyController::class, 'destroyCompany']);
    });
    
    Route::group(['prefix' => 'logistic', 'as' => 'logistic.'], function () {
        Route::get('/', [LogisticController::class, 'logisticList']);
        Route::get('add', [LogisticController::class, 'adlogistic']);
        Route::get('edit/{id}', [LogisticController::class, 'edit']);
        Route::post('save_logistic/{id?}', [LogisticController::class, 'save_logistic']);
        Route::get('delete/{id}', [LogisticController::class, 'destroylogistic']);
    });

    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('list', [UserManagementController::class, 'userList']);

        Route::get('add', [UserManagementController::class, 'userAdd']);
        Route::get('edit/{id}', [UserManagementController::class, 'edit'])->name('admin.user.edit');
        Route::post('save_user/{id?}', [UserManagementController::class, 'save_user'])->name('admin.user.save');
        Route::get('delete/{id}', [UserManagementController::class, 'destroyUser']);

        Route::get('approved_user/{id}', [UserManagementController::class, 'approved_user']);
        Route::get('new-office-employee', [UserManagementController::class, 'newOfficeEmployee']);
        Route::get('new-field-driver', [UserManagementController::class, 'newFieldDriver']);
        Route::get('new-sales-employee', [UserManagementController::class, 'newSalesEmployee']);

        Route::get('approved-office-employee', [UserManagementController::class, 'approvedOfficeEmployee']);
        Route::get('approved-field-driver', [UserManagementController::class, 'approvedFieldDriver']);
        Route::get('approved-sales-employee', [UserManagementController::class, 'approvedSalesEmployee']);
    });

    Route::group(['prefix' => 'client', 'as' => 'client.'], function () {
        Route::get('/', [ClientController::class, 'clientList']);
        Route::get('add', [ClientController::class, 'adClient']);
        Route::get('edit/{id}', [ClientController::class, 'edit']);
        Route::post('save_client/{id?}', [ClientController::class, 'save_client']);
        Route::get('delete/{id}', [ClientController::class, 'destroyClient']);
    });

    Route::group(['prefix' => 'attendance', 'as' => 'attendance.'], function () {
        Route::get('office-employee', [AttendanceController::class, 'officeEmployee']);
        Route::get('field-driver', [AttendanceController::class, 'FieldDriver']);
        Route::get('sales-employee', [AttendanceController::class, 'SalesEmployee']);
    });

    Route::group(['prefix' => 'consignment', 'as' => 'consignment.'], function () {
        Route::get('consignment', [ConsignmentController::class, 'consignmentList']);
        Route::get('consignment-add', [ConsignmentController::class, 'consignmentAdd']);
        Route::get('consignment-assign', [ConsignmentController::class, 'consignmentAssign']);
        Route::get('consignment-status', [ConsignmentController::class, 'consignmentStatus']);
        Route::get('mapView/{id}', [ConsignmentController::class, 'mapView']);
    });

    Route::group(['prefix' => 'visit', 'as' => 'visit.'], function () {
        Route::get('visit-reports', [VisitController::class, 'visitReports']);
    });


    Route::group(['prefix' => 'delivery', 'as' => 'delivery.'], function () {
        Route::get('delivery', [DeliveryManagementController::class, 'deliveryList']);
        Route::get('lm', [DeliveryManagementController::class, 'lmList']);
        Route::get('fm', [DeliveryManagementController::class, 'fmList']);
        Route::get('deliveryDetails/{id}', [DeliveryManagementController::class, 'deliveryDetails']);
        Route::get('returnDetails/{id}', [DeliveryManagementController::class, 'returnDetails']);
    });


});
