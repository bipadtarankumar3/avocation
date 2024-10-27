<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    
    public function OfficeEmployee(){
        $data['title']=' Office Employee';
        
        return view('admin.pages.attendance.officeEmployee',$data);
    }

    public function FieldDriver(){
        $data['title']=' Field Driver';
        
        return view('admin.pages.attendance.fieldDriver',$data);
    }

    public function SalesEmployee(){
        $data['title']=' Sales Employee';
        
        return view('admin.pages.attendance.salesEmployee',$data);
    }
}
