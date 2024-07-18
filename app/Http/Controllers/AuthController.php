<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(){
        // $getPage = FePage::getSlug('Login');
        // $data['meta_tit'] = !empty($getPage) ? $getPage->meta_title : '';
        // $data['meta_desc'] = !empty($getPage) ? $getPage->meta_description : '';
        // $data['meta_keys'] = !empty($getPage) ? $getPage->meta_keywords : '';
        return view('auth/login');
    }
    public function loginAction(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $remember = !empty($request->remember) ? true : false;
        
        if ($deletedcheck = User::where('username', $credentials['username'])->first()) {
            if ($deletedcheck ->is_deleted == 1) {
                return redirect()->back()->with('error', 'Your account is deactivated. Please contact support.');
            }
        }
        
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success', 'Login Success');
        } else {
            return redirect()->back()->with('error', 'Please enter correct username and password');
        }
        
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
  
        $request->session()->invalidate();
  
        return redirect('/');
    }
}
