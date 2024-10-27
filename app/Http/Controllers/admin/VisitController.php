<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function visitReports(){
        $data['title']='vistit List';
        return view('admin.pages.visit.list',$data);
    }
}
