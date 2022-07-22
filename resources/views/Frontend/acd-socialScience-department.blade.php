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
                                                href="#" style="color:#7C0000" title="">Faculties of social science</a>
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
        <p class="text-center">Faculty of Social Science</p>
    </div>

    <div class="container" style="margin-top: 40px;">
        <div class="row d-flex d-md-block flex-nowrap wrapper " >
            <div class="col-md-3 col-sm-3" id="sidebar">
                <div class="box2">
                    <div class="box-top">
                        Dean of Social Science
                    </div>
                    <img src="{{ asset('Frontend/images/officers/dean_social science.jpeg') }}" style="height: 300px;width:400px;">
                    <div class="box-content">
                        <h2 class="title">Dr. Jitendra Narayan</h2>
                        <span class="post">9934495019, deansocialsc@lnmu.ac.in</span>
                    </div>

                </div>
            </div>
            <main class="col-md-9 float-left">

                <div class="col-md-12"><br>
                    <div class="col-md-12 col-sm-12">
                        {{-- <div
                            style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;">
                            <a style="color: #000;" href="{{route('indianHistoryDepartment')}}" target="_blank">Department of Ancient History and Culture</a></div> --}}
                            <a href="{{route('indianHistoryDepartment')}}" class="btn1 btn-lg" >
                                <span> Department of Ancient History and Culture </span>
                            </a>
                        <p>&nbsp;</p>
                        {{-- <div
                            style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;">
                            <a style="color: #000;" href="{{route('economicsDepartment')}}" target="_blank">Department of Economics</a>
                        </div> --}}
                        <a href="{{route('economicsDepartment')}}" class="btn1 btn-lg" >
                            <span> Department of Economics</span>
                        </a>
                        <p>&nbsp;</p>
                        {{-- <div
                            style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;">
                            <a style="color: #000;" href="{{route('geographyDepartment')}}" target="_blank">Department of Geography</a>
                        </div> --}}
                        <a href="{{route('geographyDepartment')}}" class="btn1 btn-lg" >
                            <span> Department of Geography </span>
                        </a>

                        <p>&nbsp;</p>

                        {{-- <div
                            style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;">
                            <a style="color: #000;" href="{{route('historyDepartment')}}" target="_blank">Department of History</a>
                        </div> --}}
                        <a href="{{route('historyDepartment')}}" class="btn1 btn-lg" >
                            <span>Department of History </span>
                        </a>

                        <p>&nbsp;</p>

                        {{-- <div
                            style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;">
                            <a style="color: #000;" href="{{route('homescienceDepartment')}}" target="_blank">Department of Home Science</a>
                        </div> --}}
                        <a href="{{route('homescienceDepartment')}}" class="btn1 btn-lg" >
                            <span> Department of Home Science </span>
                        </a>
                        <p>&nbsp;</p>

                        {{-- <div
                            style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;">
                            <a style="color: #000;" href="{{route('psychologyDepartment')}}" target="_blank">Department of Psychology</a>
                        </div> --}}
                        <a href="{{route('psychologyDepartment')}}" class="btn1 btn-lg" >
                            <span> Department of Psychology </span>
                        </a>
                        <p>&nbsp;</p>

                        {{-- <div
                            style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;">
                            <a style="color: #000;" href="{{route('politicalcienceDepartment')}}" target="_blank">Department of Political Science</a>
                        </div> --}}
                        <a href="{{route('politicalcienceDepartment')}}" class="btn1 btn-lg" >
                            <span> Department of Political Science </span>
                        </a>
                        <p>&nbsp;</p>

                        {{-- <div
                            style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;">
                            <a style="color: #000;" href="{{route('sociologyDepartment')}}" target="_blank">Department of Sociology</a>
                        </div> --}}
                        <a href="{{route('sociologyDepartment')}}" class="btn1 btn-lg" >
                            <span> Department of Sociology </span>
                        </a>

                    </div><br>
                </div>



            </main>


        </div>





        <p>
        </p>
        <p></p>
    </div>
@endsection
