<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function companyList(){
        $data['title']='Company List';
        return view('admin.pages.company.list',$data);
    }

    public function adCompany(){
        $data['title']='Add Company';
        return view('admin.pages.company.add',$data);
    }
}
