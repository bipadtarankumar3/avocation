<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryManagementController extends Controller
{
    public function deliveryList(){
        $data['title']='Delivery List';
        
        return view('admin.pages.delivery.deliveryList',$data);
    }
    public function deliveryDetails(){
        $data['title']='Delivery Details';
        
        return view('admin.pages.delivery.deliveryDetails',$data);
    }
    public function returnDetails(){
        $data['title']='Return Details';
        
        return view('admin.pages.delivery.returnDetails',$data);
    }
}
