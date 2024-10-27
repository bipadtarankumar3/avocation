<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function userList(){
        $data['title']='User Lists';
        $data['users']=User::where('user_type','user')->get();
        return view('admin.pages.user.list',$data);
    }

    public function approved_user(){
        $data['title']='Approve User';
        $data['users']=User::where('user_type','user')->get();
        return view('admin.pages.user_management.approved_user',$data);
    }

    public function newOfficeEmployee(){
        $data['title']='new Office Employee';
        $data['users']=User::where('user_type','user')->get();
        return view('admin.pages.user_management.newOfficeEmployee',$data);
    }

    public function newFieldDriver(){
        $data['title']='new Field Driver';
        $data['users']=User::where('user_type','user')->get();
        return view('admin.pages.user_management.newFieldDriver',$data);
    }

    public function newSalesEmployee(){
        $data['title']='new Sales Employee';
        $data['users']=User::where('user_type','user')->get();
        return view('admin.pages.user_management.newSalesEmployee',$data);
    }

    public function approvedOfficeEmployee(){
        $data['title']='approved Office Employee';
        $data['users']=User::where('user_type','user')->get();
        return view('admin.pages.user_management.approvedOfficeEmployee',$data);
    }

    public function approvedFieldDriver(){
        $data['title']='approved Field Driver';
        $data['users']=User::where('user_type','user')->get();
        return view('admin.pages.user_management.approvedFieldDriver',$data);
    }

    public function approvedSalesEmployee(){
        $data['title']='approved Sales Employee';
        $data['users']=User::where('user_type','user')->get();
        return view('admin.pages.user_management.approvedSalesEmployee',$data);
    }

    
}
