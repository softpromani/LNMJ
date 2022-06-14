@extends('Frontend.includes.layout')
@section('content')
<section id="yt_spotlight1" class="block mb30">
    <div class="container">
        <div class="row">

            <div id="slideshow" class="col-sm-12">
                <div id="sj_k2slickslider346" class="sj-k2slickslider slide slickslider-right" data-interval="5000"
                    data-pause="hover">
                    <!-- Carousel items -->
                    {{-- <h1 class="sliderText" style=" z-index:99;position:absolute;margin-left:40%;margin-top:6%;">
                        Contact Us</h1> --}}
                        <div class="text-effect"  style=" z-index:99;position:absolute;margin-left:20%;margin-top:5%;">
                            <span>Vision, Mission & Strategic</span>
                        </div>

                    <div class="slickslider-items bg-style1">
                        <div class="slickslider-item item clearfix active">
                            <div class="images-slideshow"><img alt=""
                                    src="{{ asset('Frontend/images/header.jpg') }}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="container">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-3 float-left col-1 pl-0 pr-0  width" id="sidebar">
                <div class="list-group border-0 text-left text-md-left">
                    <a href="#" class="list-group-item d-inline-block collapsed sidenav "> <span class="d-none d-md-inline">Introduction</span> </a>
                    <a href="#" class="list-group-item d-inline-block collapsed" > <span class="d-none d-md-inline">IQAC Committee</span> </a>
                    <a href="#" class="list-group-item d-inline-block collapsed"> <span class="d-none d-md-inline">Vision, Mission & Strategies
                    </span> </a>

                    <a href="#" class="list-group-item d-inline-block collapsed" > <span class="d-none d-md-inline">IQAC Committee</span> </a>


                    <a href="#menu3" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false" > <span class="d-none d-md-inline">NAAC Accreditation</span> </a>
                    <div class="collapse" id="menu3" data-parent="#sidebar"  >
                        <a href="#menu1sub1" class="list-group-item">SSR 2020 </a>
                        <a href="#menu1sub1" class="list-group-item">AQAR </a>
                        <a href="#menu1sub1" class="list-group-item">Academic & Administrative Audit </a>
                        <a href="#menu1sub1" class="list-group-item">NAAC Certificate Cycle-I </a>
                        <a href="#menu1sub1" class="list-group-item">NAAC PPT </a>
                    </div>
                    <a href="#" class="list-group-item d-inline-block collapsed sidenav "> <span class="d-none d-md-inline">Feedback</span> </a>
                    <a href="#" class="list-group-item d-inline-block collapsed" > <span class="d-none d-md-inline">IQAC Events</span> </a>
                    <a href="#" class="list-group-item d-inline-block collapsed" > <span class="d-none d-md-inline">Reports</span> </a>

                    <a href="#" class="list-group-item d-inline-block collapsed sidenav "> <span class="d-none d-md-inline">Contact Us</span> </a>
                </div>
            </div>
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Vision, Mission and Strategy</h2>
                </div>
        <p style="font-size: 15px;font-weight:bold;">Vision</p>
          <p class="text-justify">To foster quality culture for achieving and sustaining institutional excellence globally</p>
          <p style="font-size: 15px;font-weight:bold;">Mission</p>
          <p class="text-justify">To foster quality culture for achieving and sustaining institutional excellence globally</p>
            </main>
        </div>
    </div>

@endsection
