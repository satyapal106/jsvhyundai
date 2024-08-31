<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
class AdminController extends Controller
{
    public function Login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required|max:30'
            ];

            $customMessages = [
                'email.required' => "Email is Required",
                'email.email' => 'Valid Email is required',
                'password.required' => 'Password is required'
            ];

            //$this->validate($request, $rules, $customMessages);
            $validator = Validator::make($data, $rules, $customMessages);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            //echo '<pre/>'; print_r($data);exit;
           if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])){
             return redirect('admin/dashboard');
           }else{
            return redirect()->back()->with('error_msg', 'Invalid Email or Password');
           }
        }
        return view('admin.login');
    }

    public function Dashboard(){
        
        return view('admin.dashboard');
    }

    public function UpdatePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            if(Auth::check($data['current_pwd'], Auth::guard('admin')->user()->password)){
                if($data['new_pwd'] ==$data['confirm_pwd']){
                    Admin::where('id', Auth::guard('admin')->user()->id)->update(['password' => bcypt($data['new_password'])]); 
                    return redirect()->back()->with('success_msg', 'Password has been updated successfully');
                }else{
                    return redirect()->back()->with('error_msg', 'New Password and confirm password not match');
                }
            }else {
                return redirect()->back()->with('error_msg', 'Your current password is Incorrect');
            }
        }
        return view('admin.update-password');
    }

    public function Logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    public function CheckCurrentPassword(Request $request){
        $data = $request->all();
        if (Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)) {
            return "true";
        } else {
            return "false";
        }
    }
}
