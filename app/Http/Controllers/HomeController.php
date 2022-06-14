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

    function iqacCommittee()
    {
        return view('Frontend/iqac_committee');
    }

    function iqacStrategicPlan()
    {
        return view('Frontend/iqac_strategic_plan');
    }

    function iqacVision()
    {
        return view('Frontend/iqac_vision');
    }

    function iqacSsr()
    {
        return view('Frontend/iqac_intro');
    }

    function kulgeet()
    {
        return view('Frontend/kulgeet');
    }

    function aqar()
    {
        return view('Frontend/aqar');
    }

    function criteria()
    {
        return view('Frontend/criteria');
    }

    function allOfficer()
    {
        return view('Frontend/all_officer');
    }

    public function about_university()
    {
        return view('Frontend.about-university');
    }


    public function vc()
    {
        return view('Frontend.vc');
    }

    public function about_focus()
    {
        return view('Frontend.about-focus');
    }


    public function about_campus()
    {
        return view('Frontend.about-campus');
    }

    public function about_bestpractice()
    {
        return view('Frontend.about-bestpractice');
    }

    public function about_vision()
    {
        return view('Frontend.about-vision');
    }
}
