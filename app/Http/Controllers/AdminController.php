<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminAuth;
use App\Models\AQAR;
use App\Models\Notice;
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
            return redirect('admin/admin/dashboard');
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


    // Notice methods
    function notice()
    {
        $notice = Notice::where('deleted_at',NULL)->get();
        return view('Backend.notice', compact('notice'));
    }

    function saveNotice(Request $req)
    {
        if($req->hasFile('file'))
        {
            $fext=$req->file('file')->extension();
            $fname=date('d-M-Y').$req->cat.rand(0,9).rand(0,9).rand(0,9).rand(0,9).".".$fext;
            $req->file->move(public_path('upload/Notice'),$fname);
            $data = [
                'title' => $req->title,
                'category' => $req->category,
                'type' => $req->filetype,
                'filename' => $fname
            ];
                if(Notice::create($data)) {
                    return back()->with('success', 'Notice saved successfully');
                }
                else {
                    return back()->with('failed', 'Oh! Notice did not saved successfully');
                }
            }
            else {
                $data = [
                    'title' => $req->title,
                    'category' => $req->category,
                    'type' => $req->filetype,
                    'filename' => $req->link
                ];
                    if(Notice::create($data)) {
                        return back()->with('success', 'Notice saved successfully');
                    }
                    else {
                        return back()->with('failed', 'Oh! Notice did not saved successfully');
                    }
            }
    }

    function delNotice($id)
    {
        if(Notice::find($id)->delete()) {
            return back()->with('success', 'Notice deleted successfully');
        }
        else {
            return back()->with('failed', 'Oh! Notice did not deleted successfully');
        }
    }

    // Notice methods
    function aqar()
    {
        $data = AQAR::where('deleted_at',NULL)->get();
        return view('Backend.aqar', compact('data'));
    }

    function saveAqar(Request $req)
    {
        if($req->hasFile('file'))
        {
            $fext=$req->file('file')->extension();
            $fname=date('d-M-Y').$req->cat.rand(0,9).rand(0,9).rand(0,9).rand(0,9).".".$fext;
            $req->file->move(public_path('upload/AQAR'),$fname);
            $data = [
                'title' => $req->title,
                'category' => $req->category,
                'filename' => $fname,
                'session' => $req->session
            ];
                if(AQAR::create($data)) {
                    return back()->with('success', 'AQAR saved successfully');
                }
                else {
                    return back()->with('failed', 'Oh! AQAR did not saved successfully');
                }
            }
            else {
                return back()->with('failed', 'Oh! File missing..');
            }
    }

    function delAqar($id)
    {
        if(AQAR::find($id)->delete()) {
            return back()->with('success', 'AQAR deleted successfully');
        }
        else {
            return back()->with('failed', 'Oh! AQAR did not deleted successfully');
        }
    }

}
