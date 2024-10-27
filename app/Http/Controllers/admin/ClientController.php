<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clientList(){
        $data['title']='client List';
        return view('admin.pages.client.list',$data);
    }

    public function adClient(){
        $data['title']='Add client';
        return view('admin.pages.client.add',$data);
    }
}
