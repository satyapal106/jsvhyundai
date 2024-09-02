<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Intervention\Image\Laravel\Facades\Image;

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
            if(Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)){
                if($data['new_pwd'] ==$data['confirm_pwd']){
                    Admin::where('id', Auth::guard('admin')->user()->id)->update(['password' => bcrypt($data['new_pwd'])]); 
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
    public function UpdateDetail(Request $request){
        $data = $request->all();
        //echo '<pre/>'; print_r($data);exit;

        $rules = [
            'admin_name' => 'required|max:255',
            'admin_mobile' => 'required|numeric:digits:10',
            'admin_image' => 'image',
        ];

        $customMessages = [
            'admin_name.required' => "Name is required",
            'admin_name.regex' => "Valid Name is required",
            'admin_name'  => 'Valid Name is required',
            'admin_mobile.required' => 'Mobile Number is required',
            'admin_mobile.numeric' => 'Valid Mobile Number is required',
            'admin_mobile.digits'  => 'valid Mobile Number is required',
            'admin_mobile.image'  => 'valid Image is required',
        ];
        $validator = Validator::make($data, $rules, $customMessages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('admin_image')) {
            $image_temp = $request->file('admin_image');
            
            if ($image_temp->isValid()) {
                // Reading the image from the request
                $image = Image::make($request->file('admin_image'));
        
                // Main Image Upload on Folder
                $imageName = time() . '-' . $request->file('admin_image')->getClientOriginalName();
                $destinationPath = public_path('images/');
                $image->save($destinationPath . $imageName);
        
                // Generate and Save Thumbnail Image
                $destinationPathThumbnail = public_path('images/thumbnail/');
                $image->resize(100, 100);
                $image->save($destinationPathThumbnail . $imageName);
            }
        }
        

        Admin::where('id', Auth::guard('admin')->user()->id)->update(['email' => $data['email'], 'name' => $data['admin_name'], 'mobile' => $data['admin_mobile'], 'image' => $imageName]);
        return redirect()->back()->with('success_msg', 'Admin Details has been Updated Successfully');
        
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
