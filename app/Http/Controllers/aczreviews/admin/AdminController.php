<?php

namespace App\Http\Controllers\aczreviews\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Session;
class AdminController extends Controller
{
    public function login(Request $request){
        // echo $password = Hash::make('123457'); die;

        if($request->isMethod('post')){
            $data = $request->all();
            /*echo "<pre>"; print_r($data); die;*/
            $validator = Validator::make($data, $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required',
            ], $customMessages = [
                // Add Custom Messages here
                'email.required' => 'Email is required!',
                'email.email' => 'Valid Email is required',
                'password.required' => 'Password is required',
            ])->validate();
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>1])){
                return redirect('/admin/dashboard');
            }else{
                return redirect()->back()->with('error_message','Invalid Email or Password');
            }
        }
        return view('aczreviews.admin.login');
    }
    public function dashboard(){
        return view('aczreviews.admin.layout.dashboard');
    }
    public function logout(){
        // Session::forget('session_id');
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
