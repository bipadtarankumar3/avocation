<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MasterController extends Controller
{
    public function areaList(){
        $data['title']='area List';
        $data['area']=Area::get();
        return view('admin.pages.area.list',$data);
    }

    public function adarea(){
        $data['title']='Add area';
        $data['companies']=Company::get();
        return view('admin.pages.area.add',$data);
    }

    
    
    public function edit($id)
    {
        $data['area'] = Area::findOrFail($id);
        $data['companies']=Company::get();
        return view('admin.pages.area.add',  $data);
    }

    public function save_area(Request $request, $id = null)
    {
        // Validate the request data
        $request->validate([
            'area_name' => 'required',
        ]);

        // Check if the user exists, update if so, otherwise create a new user
        if ($id) {
            $area = Area::findOrFail($id);
            $message = 'area updated successfully.';
        } else {
            $area = new Area();
            $message = 'area created successfully.';
        }

        // Assign the request data to the area model
        $area->area_name = $request->area_name;
        $area->area_company_id = $request->area_company_id;
        $area->area_status = $request->area_status;

        // Save the area
        $area->save();

        // Redirect back to the area list with a success message
        return back()->with('success', $message);
    }

    public function destroyarea($id)
    {
        $Product = Area::findOrFail($id);
        $Product->delete();
        return redirect('admin/area')->with('success', 'area deleted successfully.');
    }
}
