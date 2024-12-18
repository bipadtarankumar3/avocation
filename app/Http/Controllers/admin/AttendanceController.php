<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Employee;
use App\Models\CheckInCheckout;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;


class AttendanceController extends Controller
{
    
    public function OfficeEmployee()
    {
        $data['title'] = 'Office Employee';
    
        // Fetch data for office employees with required fields
        $data['employees'] = User::join('check_in_checkouts', 'users.id', '=', 'check_in_checkouts.ckn_user_id')
            ->where('users.user_type', 'office_employee')
            ->select(
                'users.name',
                'users.phone',
                'check_in_checkouts.ckn_selfie',
                'check_in_checkouts.ckn_date',
                'check_in_checkouts.ckn_place',
                'check_in_checkouts.ckn_in_out_status',
                'check_in_checkouts.ckn_status',
                'check_in_checkouts.id as checkin_id'
            )
            ->orderBy('check_in_checkouts.id', 'desc')
            ->get();
    
        return view('admin.pages.attendance.officeEmployee', $data);
    }
    
    public function FieldDriver()
    {
        $data['title'] = 'Field Employee';
    
        // Fetch data for field employees with required fields
        $data['employees'] = User::join('check_in_checkouts', 'users.id', '=', 'check_in_checkouts.ckn_user_id')
            ->where('users.user_type', 'field_employee')
            ->select(
                'users.name',
                'users.phone',
                'check_in_checkouts.ckn_selfie',
                'check_in_checkouts.ckn_date',
                'check_in_checkouts.ckn_place',
                'check_in_checkouts.ckn_in_out_status',
                'check_in_checkouts.ckn_status',
                'check_in_checkouts.id as checkin_id'
            )
            ->orderBy('check_in_checkouts.id', 'desc')
            ->get();
    
        return view('admin.pages.attendance.fieldDriver', $data);
    }
    
    public function SalesEmployee()
    {
        $data['title'] = 'Sales Employee';
    
        // Fetch data for sales employees with required fields
        $data['employees'] = User::join('check_in_checkouts', 'users.id', '=', 'check_in_checkouts.ckn_user_id')
            ->where('users.user_type', 'sales_employee')
            ->select(
                'users.name',
                'users.phone',
                'check_in_checkouts.ckn_selfie',
                'check_in_checkouts.ckn_date',
                'check_in_checkouts.ckn_place',
                'check_in_checkouts.ckn_in_out_status',
                'check_in_checkouts.ckn_status',
                'check_in_checkouts.id as checkin_id'
            )
            ->orderBy('check_in_checkouts.id', 'desc')
            ->get();
    
        return view('admin.pages.attendance.salesEmployee', $data);
    }
    

    public function mapView(){
        $data['title']='Map';
        
        return view('admin.pages.map.mapView',$data);
    }
    public function liveTracking(){
        $data['title']='Map';
        
        return view('admin.pages.map.liveTracking',$data);
    }
}
