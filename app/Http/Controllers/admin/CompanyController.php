<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    public function companyList(){
        $data['title']='Company List';
        $data['company']=Company::get();
        return view('admin.pages.company.list',$data);
    }

    public function adCompany(){
        $data['title']='Add Company';
        return view('admin.pages.company.add',$data);
    }

    
    
    public function edit($id)
    {
        $data['company'] = Company::findOrFail($id);
        
        return view('admin.pages.company.add',  $data);
    }

    public function save_company(Request $request, $id = null)
    {
        // Validate the request data
        $request->validate([
            'company_name' => 'required',
        ]);

        // Check if the user exists, update if so, otherwise create a new user
        if ($id) {
            $Company = Company::findOrFail($id);
            $message = 'Company updated successfully.';
        } else {
            $Company = new Company();
            $message = 'Company created successfully.';
        }

        // Assign the request data to the Company model
        $Company->company_name = $request->company_name;
        $Company->company_address = $request->company_address;
        $Company->company_status = $request->company_status;

        // Save the Company
        $Company->save();

        // Redirect back to the Company list with a success message
        return back()->with('success', $message);
    }

    public function destroyCompany($id)
    {
        $Product = Company::findOrFail($id);
        $Product->delete();
        return redirect('admin/company')->with('success', 'company deleted successfully.');
    }

}
