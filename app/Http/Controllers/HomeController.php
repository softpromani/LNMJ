<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('Frontend.index');
    }

    function contactus()
    {
        return view('Frontend/contactus');
    }

    function iqacIntro()
    {
        return view('Frontend/iqac_intro');
    }

    public function about_university()
    {
        return view('Frontend.about-university');
    }

}
