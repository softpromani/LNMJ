@extends('Frontend.includes.layout')
@section('content')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>
    <section id="yt_spotlight1" class="block mb30">
        <div class="container">
            <div class="row">

                <div id="slideshow" class="col-sm-12">
                    <div id="sj_k2slickslider346" class="sj-k2slickslider slide slickslider-right" data-interval="5000"
                        data-pause="hover">
                        <!-- Carousel items -->
                        {{-- <h1 class="sliderText" style=" z-index:99;position:absolute;margin-left:40%;margin-top:6%;">
                            Contact Us</h1> --}}
                        <div class="text-effect" style=" z-index:99;position:absolute;margin-left:40%;margin-top:5%;">
                            <span>AQAR 2020-21</span>
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
                <div class="list-group border-0 text-left text-md-left">
                    <a href="#" class="list-group-item d-inline-block collapsed sidenav "> <span
                            class="d-none d-md-inline">Introduction</span> </a>
                    <a href="#" class="list-group-item d-inline-block collapsed"> <span class="d-none d-md-inline">IQAC
                            Committee</span> </a>
                    <a href="#" class="list-group-item d-inline-block collapsed"> <span class="d-none d-md-inline">Vision,
                            Mission & Strategies
                        </span> </a>
                    <a href="#menu3" class="list-group-item d-inline-block collapsed" data-toggle="collapse"
                        aria-expanded="false"> <span class="d-none d-md-inline">NAAC Accreditation</span> </a>
                    <div class="collapse" id="menu3" data-parent="#sidebar">
                        <a href="#menu1sub1" class="list-group-item">SSR 2020 </a>
                        <a href="{{route('aqar')}}" class="list-group-item">AQAR </a>
                        <a href="#menu1sub1" class="list-group-item">Academic & Administrative Audit </a>
                        <a href="#menu1sub1" class="list-group-item">NAAC Certificate Cycle-I </a>
                        <a href="#menu1sub1" class="list-group-item">NAAC PPT </a>
                    </div>
                    <a href="#" class="list-group-item d-inline-block collapsed sidenav "> <span
                            class="d-none d-md-inline">Feedback</span> </a>
                    <a href="#" class="list-group-item d-inline-block collapsed"> <span class="d-none d-md-inline">IQAC
                            Events</span> </a>
                    <a href="#" class="list-group-item d-inline-block collapsed"> <span
                            class="d-none d-md-inline">Reports</span> </a>

                    <a href="#" class="list-group-item d-inline-block collapsed sidenav "> <span
                            class="d-none d-md-inline">Contact Us</span> </a>
                </div>
            </div>
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">AQAR 2020-21</h2>
                </div>



                <div class="row">
                    <div class="col-md-12">
                        <div class="tab" role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#Section1" aria-controls="home"
                                        role="tab" data-toggle="tab">Criteria 1</a></li>
                                <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab"
                                        data-toggle="tab">Criteria 2</a></li>
                                <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab"
                                        data-toggle="tab">Criteria 3</a></li>
                                <li role="presentation"><a href="#Section4" aria-controls="home" role="tab"
                                        data-toggle="tab">Criteria 4</a></li>
                                <li role="presentation"><a href="#Section5" aria-controls="profile" role="tab"
                                        data-toggle="tab">Criteria 5</a></li>
                                <li role="presentation"><a href="#Section6" aria-controls="messages" role="tab"
                                        data-toggle="tab">Criteria 6</a></li>
                                <li role="presentation"><a href="#Section7" aria-controls="messages" role="tab"
                                        data-toggle="tab">Criteria 7</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                                <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingFour">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseFour"
                                                                aria-expanded="false" aria-controls="collapseFour">
                                                                Curricular Aspects
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingFour">
                                                        <div class="panel-body text-justify">
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse1" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.1. Number of new courses introduced of the total number of courses across all programs offered. </a>
                                                            <div class="collapse" id="Collapse1">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse2" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.2. Number of Programmes where syllabus revision was carried out. </a>
                                                            <div class="collapse" id="Collapse2">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse3" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.4.2. Feedback processes of the institution </a>
                                                            <div class="collapse" id="Collapse3">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse4" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.3.1: Number of courses having focus on employability skill development. </a>
                                                            <div class="collapse" id="Collapse4">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse5" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.3. Total number of courses having focus on employability skill development offered by the University. </a>
                                                            <div class="collapse" id="Collapse5">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse6" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.1. Number of new courses introduced of the total number of courses across all programs offered. </a>
                                                            <div class="collapse" id="Collapse6">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse7" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.2. Number of Programmes in which (CBCS)/elective course system has been implemented. </a>
                                                            <div class="collapse" id="Collapse7">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Number of students undertaking field projects / research projects / internships </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="Section2">
                                    <h3>SecKtion 2</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a
                                        ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor.
                                        Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="Section3">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a
                                        ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor.
                                        Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="Section4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a
                                        ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor.
                                        Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="Section5">
                                    <h3>SecKtion 2</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a
                                        ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor.
                                        Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="Section6">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a
                                        ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor.
                                        Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="Section7">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a
                                        ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor.
                                        Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>











            </main>
        </div>
    </div>
@endsection
