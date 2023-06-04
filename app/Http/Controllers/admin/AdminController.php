<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Auth;
use Hash;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            // echo '<pre>'; print_r($data); '</pre>';
            // die();

            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required'
            ];

            $customMessages = [
                'email.required' => 'Email Address is required',
                'email.email' => 'Valid Email Address is required',
                'password.required' => 'Password is required'
            ];

            $this->validate($request, $rules, $customMessages);

            if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password'], 'status' =>1])){
                return redirect('admin/dashboard');
            }else{
                return redirect()->back()->with('error_message', 'Invalid Email or Password');
            }
        }
        return view('admin.login');
    }

    public function logout(){
        Auth::guard('admin')->logout();

        return view('admin.login');
    }

    public function updateAdminPassword(Request $request){
        //dd(Admin::where('email', Auth::guard('admin')->user()->email)->first()->toArray());
        if($request->isMethod('post')){
            $data = $request->all();
            if (Hash::check($data['current_password'], Auth::guard('admin')->user()->password)) {
                //check new password is matching with confirm password
                if($data['new_password'] == $data['confirm_password']){
                    Admin::where('id', Auth::guard('admin')->user()->id)->update([
                        'password' => bcrypt($data['new_password'])
                    ]);

                    return redirect()->back()->with('success_message', 'Password has been updated successfully!');
                }else{
                    return redirect()->back()->with('error_message', 'Your new password and confirm password do not match!');
                }
            }else{
                return redirect()->back()->with('error_message', 'Your current password is Incorrect!');
            }
        }
        $admin = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        return view('admin.settings.update_admin_password', compact('admin'));
    }

    public function checkCurrentPassword(Request $request){
        $current_password = $request->all()['current_password'];

        if(Hash::check($current_password, Auth::guard('admin')->user()->password)){
            return true;
        }

        return false;
    }
}
