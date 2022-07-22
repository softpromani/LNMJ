@extends('Frontend.includes.layout')

@section('content')
    <!-- slider starts here -->
    <section id="yt_spotlight1" class="block">
        <div class="container">
            <div class="row">
                <div id="slideshow" class="col-sm-12">
                    <div id="sj_k2slickslider346" class="sj-k2slickslider slide slickslider-right" data-interval="5000"
                        data-pause="hover">
                        <!-- Carousel items -->
                        <div class="slickslider-items bg-style1">
                            <div class="slickslider-item item clearfix active">
                                <div class="images-slideshow"><img alt=""
                                        src="{{ asset('Frontend/images/internal%20banners/banner119.jpg') }}" /></div>
                                <div class="item-content">
                                    <div class="item-content-inner">
                                        <h5 class="item-title">
                                            <a href="#" style="color:#7C0000" title="">Home</a> | <a
                                                href="#" style="color:#7C0000" title="">Faculties</a>
                                            </h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid"
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;margin-bottom:40px;">
        <p class="text-center">Faculties</p>
    </div>
    <!-- slider ends here -->


    <div class="container">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            @include('Frontend.includes.sidebar.academics_menu')
            <main class="col-md-9 float-left">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="col-md-12" style="font-size: 16px;"><br>
                    <div class="col-md-6 col-sm-6" >

                        <a href="{{ Route('scienceDepartment') }}" class="btn1 btn-lg">
                            <span> Faculty of Science </span>
                        </a>

                        {{-- <div style="background-color: #d3d3d3; padding: 10px; color: white; text-align: center;">
                            <a style="color: #000;" href="{{ Route('scienceDepartment') }}" target="_blank">Faculty of
                                Science</a>
                        </div> --}}
                        <p>&nbsp;</p>
                        <a href="{{ Route('humanities') }}" class="btn1 btn-lg">
                            <span> Faculty of Humanities </span>
                        </a>
                        <p>&nbsp;</p>
                        <a href="{{ Route('law') }}" class="btn1 btn-lg">
                            <span> Faculty of Law </span>
                        </a>
                        <p>&nbsp;</p>
                        <a href="{{ Route('education') }}" class="btn1 btn-lg">
                            <span> Faculty of Education </span>
                        </a>
                        <p>&nbsp;</p>

                    </div>
                    <div class="col-md-6 col-sm-6">
                        <a href="{{ Route('social_scienceDepartment') }}" class="btn1 btn-lg">
                            <span> Faculty of Social Sciences </span>
                        </a>
                        <p>&nbsp;</p>
                        <a href="{{ Route('commerce') }}" class="btn1 btn-lg">
                            <span>Faculty of Commerce </span>
                        </a>
                        <p>&nbsp;</p>
                        <a href="{{ Route('dentistry') }}" class="btn1 btn-lg">
                            <span> Faculty of Dentistry </span>
                        </a>

                        <p>&nbsp;</p>
                        <a href="{{ Route('fineArts') }}" class="btn1 btn-lg">
                            <span> Faculty of Fine arts </span>
                        </a>
                        <p></p>
                    </div>
                    <br>
                </div>
            </main>
        </div>
    </div>
@endsection
