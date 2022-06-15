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
                            <div class="text-effect"  style=" z-index:99;position:absolute;margin-left:40%;margin-top:5%;">
                                <span>Officers</span>
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
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Vice-Chancellor
                    </div>
                    <img src="{{asset('Frontend/images/officers/vc.jpg')}}" style="height: 350px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Prof. Surendra Pratap Singh</h3>
                        <span class="post">06272-222463, vc@lnmu.ac.in <br/> vc-lnmu-bih@nic.in</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Pro-Vice-Chancellor
                    </div>
                    <img src="{{asset('Frontend/images/officers/pvc.jpg')}}"  style="height: 350px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Prof. Dolly Sinha</h3>
                        <span class="post">8544513299 & pvc@lnmu.ac.in</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Financial Advisor
                    </div>
                    <img src="{{asset('Frontend/images/officers/financial_advisor.jpg')}}"  style="height: 350px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Shri Kailash Ram</h3>
                        <span class="post">8544513256 & fa@lnmu.ac.in</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                       Dean Student's Welfare
                    </div>
                    <img src="{{asset('Frontend/images/officers/dean.png')}}"  style="height: 350px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Vijay Kumar Yadav</h3>
                        <span class="post">9430996391 & dsw@lnmu.ac.in</span>
                    </div>

                </div>
            </div>

        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Proctor/Sports Officer
                    </div>
                    <img src="{{asset('Frontend/images/officers/proctor.jpg')}}" style="height: 350px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Ajay Nath Jha</h3>
                        <span class="post">8544513260 & 8544513271 <br/> proctor@lnmu.ac.in & sports@lnmu.ac.in</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        C.C.D.C.
                    </div>
                    <img src="{{asset('Frontend/images/officers/pvc.jpg')}}"  style="height: 350px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Mahesh Prasad Sinha</h3>
                        <span class="post">7903043012 & ccdc@lnmu.ac.in</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Registrar
                    </div>
                    <img src="{{asset('Frontend/images/officers/financial_advisor.jpg')}}"  style="height: 350px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Mushtaque Ahmad</h3>
                        <span class="post">8544513253 & registrar@lnmu.ac.in</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                       IQAC Director
                    </div>
                    <img src="{{asset('Frontend/images/officers/dean.png')}}"  style="height: 350px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Md. Zeya Haider</h3>
                        <span class="post">9955038455 & iqac@lnmu.ac.in <br/> iqaclnmu@gmail.com</span>
                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
