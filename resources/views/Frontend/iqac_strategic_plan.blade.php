@extends('Frontend.includes.layout')
@section('content')
<section id="yt_spotlight1" class="block mb30">
    <div class="container">
        <div class="row">
            <div id="slideshow" class="col-sm-12">
                <div id="sj_k2slickslider346" class="sj-k2slickslider slide slickslider-right" data-interval="5000"
                    data-pause="hover">
                    <div class="text-effect" style=" z-index:99;position:absolute;margin-left:40%;margin-top:5%;">
                        <span>Strategic Plan</span>
                    </div>
                    <div class="slickslider-items bg-style1">
                        <div class="slickslider-item item clearfix active">
                            <div class="images-slideshow"><img alt="" src="{{ asset('Frontend/images/header.jpg') }}">
                            </div>
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
                @include('Frontend.includes.sidebar.iqac_menu')
            </div>
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Strategic plan</h2>
                </div>

         <a href="#" style="font-size: 15px;">Click here to download Strategic Plan</a>
            </main>
        </div>
    </div>

@endsection
