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
                                                href="#" style="color:#7C0000" title="">Faculties of Fine Arts</a>
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
    <!-- slider ends here -->
    <div class="container-fluid"
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;">
        <p class="text-center">Faculty of Fine Arts</p>
    </div>

    <div class="container" style="margin-top: 40px;">
        <div class="row d-flex d-md-block flex-nowrap wrapper " >
            <div class="col-md-3 col-sm-3" id="sidebar">
                <div class="box2">
                    <div class="box-top">
                        Dean of Fine Arts
                    </div>
                    <img src="{{ asset('Frontend/images/user.png') }}" style="height: 300px;width:400px;">
                    <div class="box-content">
                        <h3 class="title">Dr.Lawanya Kirti Singh 'Kavya'</h3>
                        <span class="post">8544513292/ 9470849666 <br /> deanfinearts@lnmu.ac.in</span>
                    </div>

                </div>
            </div>
            <main class="col-md-9 float-left">

                <div class="col-md-12"><br>
                    <div class="col-md-12 col-sm-12">
                        {{-- <div
                            style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;">
                            <a style="color: #000;" href="{{route('musicDepartment')}}" target="_blank">Department of Music & Dramatics</a></div> --}}
                            <a href="{{route('musicDepartment')}}" class="btn1 btn-lg" >
                                <span>Department of Music & Dramatics </span>
                            </a>
            </main>


        </div>





        <p>
        </p>
        <p></p>
    </div>
@endsection
