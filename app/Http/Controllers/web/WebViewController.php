<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class WebViewController extends Controller
{
    public function index(){
        $data['locations']=Location::orderBy('id','desc')->get();
        return view('web.pages.index',$data);
    }
    public function search(){
        $data['locations']=Location::orderBy('id','desc')->get();
        return view('web.pages.search_list',$data);
    }
    public function property_details(){
        $data['locations']=Location::orderBy('id','desc')->get();
        return view('web.pages.property_details',$data);
    }
}
