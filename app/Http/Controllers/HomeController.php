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

    public function about_university()
    {
        return view('Frontend.about-university');
    }
}
