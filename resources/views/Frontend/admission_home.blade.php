@extends('Frontend.includes.layout')
@section('content')
    <!-- slider starts here -->
    {{-- <section id="yt_spotlight1" class="block mb30">
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
                                                href="#" style="color:#7C0000" title="">Admission</a>
                                            </h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- slider ends here -->

    <div class="container">
        <div class="row d-flex d-md-block flex-nowrap wrapper">

            @include('Frontend.includes.sidebar.admission_menu')

            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Admission Home</h2>
                </div>

                <div class="row" style="margin-bottom: 40px;">


                    <div class="col-sm-3">
                        <div class="box">
                            <img src="{{ asset('Frontend/images/lnmudsw.png') }}">
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <h3 style="color:#7C0000;">Dr. Vijay Kumar Yadav</h3>
                        <p>D.S.W.</p>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        One Year P.G. Diploma Course (Add on) Care in Geriatric Semester I Session 2021-22
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Admission Notice</a></li>
                                        <li><a href="#">Prospectus</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Admission in 6-Months Certificate Course (Add On) in Gerontechnology (July-2020 session)
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Admission Notice</a></li>
                                        <li><a href="#">Prospectus</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <p class="text-justify pt-2">Contents will be uploaded soon....</p> --}}
            </main>
        </div>
    </div>
@endsection
