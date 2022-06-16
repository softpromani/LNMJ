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
                        <div class="text-effect" style=" z-index:99;position:absolute;margin-left:35%;margin-top:4%;">
                            <span>Archieve</span>
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

<section class="container">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse"
                        data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        Archive
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                aria-labelledby="headingTwo">
                <div class="panel-body">
                    <ul>
                        <li><a href="#">Regarding Reschedule of East Zone Inter University, Table- Tennis (W) Tournament 2021-22</a></li>
                        <li><a href="#">Fixture For East Zone Inter University Table Tennis (W) tournament 2021-22</a></li>
                        <li><a href="#">Admission 2021-23 Two year Full Time Master of Business Administration Programmemeu</a></li>
                        <li><a href="#">LIST OF CANDIDATES FOUND ELIGIBLE FOR INTERVIEW IN PHYSICS (CLICK HERE)</a></li>
                        <li><a href="#">Notice About Interview Letter of Physics (CLICK HERE)</a></li>
                        <li><a href="#">Notice Interview Letter of Botany (CLICK HERE)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel-body">
            <ul>
                <li><a href="#">Regarding Reschedule of East Zone Inter University, Table- Tennis (W) Tournament 2021-22</a></li>
                <li><a href="#">Fixture For East Zone Inter University Table Tennis (W) tournament 2021-22</a></li>
                <li><a href="#">Admission 2021-23 Two year Full Time Master of Business Administration Programmemeu</a></li>
                <li><a href="#">LIST OF CANDIDATES FOUND ELIGIBLE FOR INTERVIEW IN PHYSICS (CLICK HERE)</a></li>
                <li><a href="#">Notice About Interview Letter of Physics (CLICK HERE)</a></li>
                <li><a href="#">Notice Interview Letter of Botany (CLICK HERE)</a></li>
            </ul>
        </div>
    </div>
</section>

@endsection
