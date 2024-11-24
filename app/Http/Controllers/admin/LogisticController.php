<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Logistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LogisticController extends Controller
{
    public function logisticList(){
        $data['title']='logistic List';
        $data['logistic']=Logistic::get();
        return view('admin.pages.logistic.list',$data);
    }

    public function adlogistic(){
        $data['title']='Add logistic';
        return view('admin.pages.logistic.add',$data);
    }

    
    
    public function edit($id)
    {
        $data['logistic'] = Logistic::findOrFail($id);
        
        return view('admin.pages.logistic.add',  $data);
    }

    public function save_logistic(Request $request, $id = null)
    {
        // Validate the request data
        $request->validate([
            'logistic_name' => 'required',
        ]);

        // Check if the user exists, update if so, otherwise create a new user
        if ($id) {
            $logistic = Logistic::findOrFail($id);
            $message = 'logistic updated successfully.';
        } else {
            $logistic = new Logistic();
            $message = 'logistic created successfully.';
        }

        // Assign the request data to the logistic model
        $logistic->logistic_name = $request->logistic_name;
        $logistic->logistic_status = $request->logistic_status;

        // Save the logistic
        $logistic->save();

        // Redirect back to the logistic list with a success message
        return back()->with('success', $message);
    }

    public function destroylogistic($id)
    {
        $Product = Logistic::findOrFail($id);
        $Product->delete();
        return redirect('admin/logistic')->with('success', 'logistic deleted successfully.');
    }
}
