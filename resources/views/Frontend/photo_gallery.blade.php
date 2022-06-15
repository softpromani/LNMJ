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
                                <span>Photo Gallery</span>
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
                <div class="box3">
                    <img src="{{asset('Frontend/images/banners/0001.jpg')}}">
                    <div class="box-content">
                        <h3 class="title">Williamson</h3>
                        <span class="post">Web designer</span>
                    </div>

                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="box3">
                    <img src="{{asset('Frontend/images/banners/0001.jpg')}}">
                    <div class="box-content">
                        <h3 class="title">Miranda Roy</h3>
                        <span class="post">Web designer</span>
                    </div>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection
