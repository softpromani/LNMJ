<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminAuth;
use Log;

class AdminController extends Controller
{
    function login(){
        return view('login');
    }

    function adminLogin(Request $req)
    {
        $validate= $req-> validate([
            'email'=> 'required |email',
            'password'=> 'required'
        ]);
        $email = $req->email;
        $result = AdminAuth::where('email', $email)->first();
        if(Hash::check($req->password, $result->password)){
            $email= $result->email;
            Session::put(['admin'=>$email]);
            Session::flash('success', 'Welcome Admin');
            return redirect('backend/admin/dashboard');
        }
        else
        {
            Session::flash('error', 'Invalid Login details');
            return redirect('/admin');
        }
    }

    function logout(){
        Session::flush();
        return redirect('/');
    }
    function dashboard(){
        return view('Backend.dashboard');
    }
}
