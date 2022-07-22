@extends('Frontend.includes.layout')
@section('content')
<!-- slider starts here -->
<section id="yt_spotlight1" class="block">
    <div class="container">
        <div class="row">
            <div id="slideshow" class="col-sm-12">
                <div id="sj_k2slickslider346" class="sj-k2slickslider slide slickslider-right" data-interval="5000" data-pause="hover">
                    <!-- Carousel items -->
                    <div class="slickslider-items bg-style1">
                        <div class="slickslider-item item clearfix active">
                            <div class="images-slideshow"><img alt="" src="{{ asset('Frontend/images/internal%20banners/banner119.jpg') }}" /></div>
                            <div class="item-content">
                                <div class="item-content-inner">
                                    <h5 class="item-title">
                                        <a href="#" style="color:#7C0000" title="">Home</a> | <a href="#" style="color:#7C0000" title="">Faculties of science</a>
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
<div class="container-fluid" style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;">
    <p class="text-center">Faculty of Science</p>
</div>
<div class="container" style="margin-top: 40px;">
    <div class="row d-flex d-md-block flex-nowrap wrapper ">
        <div class="col-md-3 col-sm-3" id="sidebar">
            <div class="box2">
                <div class="box-top">
                    Dean, Faculty of Science
                </div>
                <img src="{{ asset('Frontend/images/officers/zoology_head.jpeg') }}" style="height: 300px;width:400px;">
                <div class="box-content">
                    <h3 class="title">Dr. K.K. Jha</h3>
                    <span class="post">9470644735, deanscience@lnmu.ac.in</span>
</div>
            </div>
        </div>
        <main class="col-md-9 float-left">

            <div class="col-md-12" style="font-size: 16px;"><br>
                <div class="col-md-8 col-sm-8">

                        <a href="{{route('botanyDepartment')}}" class="btn1 btn-lg">
                            <span> Department of Botany </span>
                        </a>

                    <p>&nbsp;</p>
                    <a href="{{route('physicsDepartment')}}" class="btn1 btn-lg">
                        <span> Department of Physics </span>
                    </a>
                    {{-- <div style="background-color: #d3d3d3; padding: 10px; color: white; text-align: center;">
                        <a style="color: #000;" href="{{route('physicsDepartment')}}">Department of Physics</a>
                    </div> --}}
                    <p>&nbsp;</p>
                    <a href="{{route('chemistryDepartment')}}" class="btn1 btn-lg">
                        <span> Department of Chemistry </span>
                    </a>
                    {{-- <div  style="background-color: #d3d3d3; padding: 10px; color: white; text-align: center;">
                        <a style="color: #000;" href="{{route('chemistryDepartment')}}">Department of Chemistry</a>
                    </div> --}}
                    <p>&nbsp;</p>
                    <a href="{{route('mathematicsDepartment')}}" class="btn1 btn-lg">
                        <span> Department of Mathematics </span>
                    </a>
                    {{-- <div  style="background-color: #d3d3d3; padding: 10px; color: white; text-align: center;">
                        <a style="color: #000;" href="{{route('mathematicsDepartment')}}">Department of Mathematics</a>
                    </div> --}}
                    <p>&nbsp;</p>
                    <a href="{{route('zoologyDepartment')}}" class="btn1 btn-lg">
                        <span> Department of Zoology </span>
                    </a>
                    {{-- <div  style="background-color: #d3d3d3; padding: 10px; color: white; text-align: center;">
                        <a style="color: #000;" href="{{route('zoologyDepartment')}}">Department of Zoology</a>
                    </div> --}}
                    <p></p>
                </div><br>
            </div>
        </main>
    </div>
    <p>
    </p>
    <p></p>
</div>
@endsection
