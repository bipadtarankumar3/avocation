<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function clientList(){
        $data['title']='client List';
        $data['users']=User::where('user_type','client')->get();
        return view('admin.pages.client.list',$data);
    }

    public function adClient(){
        $data['title']='Add client';
        return view('admin.pages.client.add',$data);
    }

    
    public function edit($id)
    {
        $data['user'] = User::findOrFail($id);
        
        return view('admin.pages.client.add',  $data);
    }

    public function save_client(Request $request, $id = null)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        // Check if the user exists, update if so, otherwise create a new user
        if ($id) {
            $user = User::findOrFail($id);
            $message = 'Client updated successfully.';
        } else {
            $user = new User();
            $user->password = Hash::make('12345678');
            $message = 'Client created successfully.';
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

    public function destroyClient($id)
    {
        $Product = User::findOrFail($id);
        $Product->delete();
        return redirect('admin/client/list')->with('success', 'client deleted successfully.');
    }


}
