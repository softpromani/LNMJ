@extends('Frontend.includes.layout')
@section('content')
     <!-- slider starts here -->
     <section id="yt_spotlight1" class="block0 mb30">
        <div class="container">
            <div class="row">
            <div id="slideshow" class="col-sm-12">
                <div id="sj_k2slickslider346" class="sj-k2slickslider slide slickslider-right" data-interval="5000" data-pause="hover">
                    <!-- Carousel items -->
                    <div class="slickslider-items bg-style1">
                        <div class="slickslider-item item clearfix active">
                            <div class="images-slideshow"><img alt="" src="{{asset('Frontend/images/internal%20banners/banner119.jpg')}}"/></div>
                            <div class="item-content">
                                <div class="item-content-inner">
                                    <h5 class="item-title" >
                                        <a href="#" style="color:#7C0000" title="" >Home</a> | <a href="#" style="color:#7C0000" title="" >Feedback</a>
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

    <div class="container">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-3 float-left col-1 pl-0 pr-0  width" id="sidebar">
                @include('Frontend.includes.sidebar.iqac_menu')
            </div>
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Feedback From Different Stakeholder</h2>
                </div>

                <h2 class="display-4 font-weight-light">Feedback Form</h2>
                <hr/>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseOne" aria-expanded="false"
                                aria-controls="collapseOne">
                                    Students
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                <a href="#">Data will be uploaded soon.....</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                    Teacher
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <a href="#">Data will be uploaded soon.....</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                    Alumini
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                                <a href="#">Data will be uploaded soon.....</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                    Employer
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFour">
                            <div class="panel-body">
                                <a href="#">Data will be uploaded soon.....</a>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="display-4 font-weight-light">Feedback Analysis Report</h2>
                <hr/>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseFive" aria-expanded="false"
                                aria-controls="collapseFive">
                                    2020-21
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFive">
                            <div class="panel-body">
                                <a href="#">Data will be uploaded soon.....</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingSix">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseSix" aria-expanded="false"
                                aria-controls="collapseSix">
                                    2019-20
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingSix">
                            <div class="panel-body">
                                <a href="#">Data will be uploaded soon.....</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingSeven">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseSeven" aria-expanded="false"
                                aria-controls="collapseSeven">
                                    2018-19
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingSeven">
                            <div class="panel-body">
                                <a href="#">Data will be uploaded soon.....</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingEight">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseEight" aria-expanded="false"
                                aria-controls="collapseEight">
                                    2017-18
                                </a>
                            </h4>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingEight">
                            <div class="panel-body">
                                <a href="#">Data will be uploaded soon.....</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection
