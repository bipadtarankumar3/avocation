<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsignmentController extends Controller
{
    public function consignmentList(){
        $data['title']='consignment List';
        return view('admin.pages.consignment.list',$data);
    }

    public function consignmentAdd(){
        $data['title']='Add consignment';
        return view('admin.pages.consignment.add',$data);
    }

    public function consignmentAssign(){
        $data['title']='Assign consignment';
        return view('admin.pages.consignment.assignConsigment',$data);
    }

    public function consignmentStatus(){
        $data['title']='Consignment status';
        return view('admin.pages.consignment.status',$data);
    }

    public function mapView($id){
        $data['title']='View Map';
        return view('admin.pages.consignment.mapView',$data);
    }

}
