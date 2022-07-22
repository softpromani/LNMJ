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
                                                href="#" style="color:#7C0000" title="">Faculties of Humanities</a>
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
        <p class="text-center">Faculty of Humanities</p>
    </div>

    <div class="container" style="margin-top: 40px;">
        <div class="row d-flex d-md-block flex-nowrap wrapper " >
            <div class="col-md-3 col-sm-3" id="sidebar">
                <div class="box2">
                    <div class="box-top">
                        Dean of Humanities
                    </div>
                    <img src="{{ asset('Frontend/images/officers/dean_humanity.jpeg') }}" style="height: 300px;width:400px;">
                    <div class="box-content">
                        <h3 class="title">Prof.(Dr) Raman Jha</h3>

                        <span class="post">deanhumanties@lnmu.ac.in</span>
                    </div>

                </div>
            </div>
            <main class="col-md-9 float-left">

                <div class="col-md-12"><br>
                    <div class="col-md-8 col-sm-8">
                        {{-- <div
                            style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;">
                            <a style="color: #000;" href="{{route('englishDepartment')}}" target="_blank">Department of English</a></div> --}}
                            <a href="{{route('englishDepartment')}}" class="btn1 btn-lg">
                                <span> Department of English </span>
                            </a>
                        <p>&nbsp;</p>
                        {{-- <div
                            style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;">
                            <a style="color: #000;" href="{{route('hindiDepartment')}}" target="_blank">Department of Hindi</a>
                        </div> --}}
                        <a href="{{route('hindiDepartment')}}" class="btn1 btn-lg">
                            <span>Department of Hindi </span>
                        </a>
                        <p>&nbsp;</p>
                        {{-- <div
                            style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;">
                            <a style="color: #000;" href="{{route('MaithiliDepartment')}}" target="_blank">Department of Maithili</a>
                        </div> --}}
                        <a href="{{route('MaithiliDepartment')}}" class="btn1 btn-lg">
                            <span> Department of Maithili </span>
                        </a>
                        <p>&nbsp;</p>
                        {{-- <div
                            style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;">
                            <a style="color: #000;" href="{{route('sanskritDepartment')}}" target="_blank">Department of Sanskrit</a>
                        </div> --}}
                        <a href="{{route('sanskritDepartment')}}" class="btn1 btn-lg">
                            <span> Department of Sanskrit </span>
                        </a>
                        <p>&nbsp;</p>
                        {{-- <div
                            style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;">
                            <a style="color: #000;" href="{{route('philosophyDepartment')}}" target="_blank">Department of Philosophy</a>
                        </div> --}}
                        <a href="{{route('philosophyDepartment')}}" class="btn1 btn-lg">
                            <span> Department of Philosophy </span>
                        </a>
                        <p>&nbsp;</p>
                        {{-- <div
                            style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;">
                            <a style="color: #000;" href="{{route('urduDepartment')}}" target="_blank">Department of Urdu</a>
                        </div> --}}
                        <a href="{{route('urduDepartment')}}" class="btn1 btn-lg">
                            <span>Department of Urdu </span>
                        </a>
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
