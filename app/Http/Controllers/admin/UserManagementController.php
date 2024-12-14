<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    public function userList(){
        $data['title']='User Lists';
        $data['users']=User::where('user_type','user')->get();
        return view('admin.pages.user.list',$data);
    }

    
    public function userAdd(){
        $data['title']='User Add';
        $data['users']=User::where('user_type','user')->get();
        
        return view('admin.pages.user.add',$data);
    }

    public function edit($id)
    {
        $data['user'] = User::findOrFail($id);
        
        return view('admin.pages.user.add',  $data);
    }

    public function save_user(Request $request, $id = null)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        // Check if the user exists, update if so, otherwise create a new user
        if ($id) {
            $user = User::findOrFail($id);
            $message = 'User updated successfully.';
        } else {
            $user = new User();
            $user->password = Hash::make('12345678');
            $user->user_type = 'customer';
            $message = 'User created successfully.';
        }

        // Assign the request data to the user model
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->status = $request->status;
        $user->user_type = 'client';

        // Save the user
        $user->save();

        // Redirect back to the user list with a success message
        return back()->with('success', $message);
    }

    public function destroyUser($id)
    {
        $Product = User::findOrFail($id);
        $Product->delete();
        return redirect('admin/user/list')->with('success', 'User deleted successfully.');
    }


    public function statusChange(Request $request){
        $user = User::findOrFail($request->id);
        $user->status = $request->status;
        $user->save();
        return redirect()->back()->with('success','Status updated successfully');
    }

    public function approved_user($id){
        $data['title']='Approve User';
        $data['user']=User::where('id',$id)->first();
        return view('admin.pages.user_management.approved_user',$data);
    }

    public function newOfficeEmployee(){
        $data['title']='New Office Employee';
        $data['users']=User::where('user_type','office_employee')->get();
        return view('admin.pages.user_management.newOfficeEmployee',$data);
    }

    public function newFieldDriver(){
        $data['title']='New Field Emplyee';
        $data['users']=User::with('employee')->where('user_type','field_employee')->get();
        return view('admin.pages.user_management.newFieldDriver',$data);
    }

    public function newSalesEmployee(){
        $data['title']='new Sales Employee';
        $data['users']=User::with('employee')->where('user_type','sales_employee')->get();
        return view('admin.pages.user_management.newSalesEmployee',$data);
    }

    public function approvedOfficeEmployee(){
        $data['title']='approved Office Employee';
        $data['users']=User::with('employee')->where('user_type','user')->get();
        return view('admin.pages.user_management.approvedOfficeEmployee',$data);
    }

    public function approvedFieldDriver(){
        $data['title']='approved Field Emplyeer';
        $data['users']=User::where('user_type','user')->get();
        return view('admin.pages.user_management.approvedFieldDriver',$data);
    }

    public function approvedSalesEmployee(){
        $data['title']='approved Sales Employee';
        $data['users']=User::where('user_type','user')->get();
        return view('admin.pages.user_management.approvedSalesEmployee',$data);
    }



    
}
