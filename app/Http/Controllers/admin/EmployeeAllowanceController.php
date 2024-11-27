<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\EmployeeAllowance;

class EmployeeAllowanceController extends Controller
{
    public function employeeAllowance(){
        $data['title']='employee Allowance ';
        $data['allowances']= $allowances = EmployeeAllowance::all();
        return view('admin.pages.employee_allowance.list',$data);
    }

    public function employeeAllowanceAdd(){
        $data['title']='employee Allowance Add';
     
        return view('admin.pages.employee_allowance.add',$data);
    }

    
    public function edit($id)
    {
        $data['employee_allowance'] = EmployeeAllowance::findOrFail($id);
        
        return view('admin.pages.employee_allowance.add',  $data);
    }

    public function save_employee_allowance(Request $request, $id = null)
    {
        // Validate the request data
        $request->validate([
            'salary' => 'required',
        ]);

        // Check if the user exists, update if so, otherwise create a new user
        if ($id) {
            $EmployeeAllowance = EmployeeAllowance::findOrFail($id);
            $message = 'Employee Allowance updated successfully.';
        } else {
            $EmployeeAllowance = new EmployeeAllowance();
            $message = 'Employee Allowance created successfully.';
        }

        // Assign the request data to the EmployeeAllowance model
        $EmployeeAllowance->salary = $request->salary;
        $EmployeeAllowance->esi = $request->esi;
        $EmployeeAllowance->pf_deduction = $request->pf_deduction;
        $EmployeeAllowance->ptax_deduction = $request->ptax_deduction;

        // Save the EmployeeAllowance
        $EmployeeAllowance->save();

        // Redirect back to the EmployeeAllowance list with a success message
        return back()->with('success', $message);
    }

    public function destroyEmployeeAllowance($id)
    {
        $Product = EmployeeAllowance::findOrFail($id);
        $Product->delete();
        return redirect('admin/employee-allowance')->with('success', 'Employee Allowance deleted successfully.');
    }

}
