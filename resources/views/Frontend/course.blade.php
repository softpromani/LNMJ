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
                            <span>Programme/Course</span>
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

    <section class="container " style="margin-top: 50px;">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Doctoral Programmes
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <ul>
                            <li> <a href="#" target="_blank">PhD (Botany)</a></li>
                            <li> <a href="#" target="_blank">PhD (Botany)</a></li>
                            <li> <a href="#" target="_blank">PhD (Botany)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            PG Programmes
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <ul>
                            <li> <a href="#" target="_blank">PhD (Botany)</a></li>
                            <li> <a href="#" target="_blank">PhD (Botany)</a></li>
                            <li> <a href="#" target="_blank">PhD (Botany)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            PG Diploma Programmes
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                        <ul>
                            <li> <a href="#" target="_blank">PhD (Botany)</a></li>
                            <li> <a href="#" target="_blank">PhD (Botany)</a></li>
                            <li> <a href="#" target="_blank">PhD (Botany)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            UG Programmes
                        </a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body">
                        <ul>
                            <li> <a href="#" target="_blank">PhD (Botany)</a></li>
                            <li> <a href="#" target="_blank">PhD (Botany)</a></li>
                            <li> <a href="#" target="_blank">PhD (Botany)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container" style="margin-bottom: 50px;">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Certificate Courses
                        </a>
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="panel-body">
                        <ul>
                            <li> <a href="#" target="_blank">PhD (Botany)</a></li>
                            <li> <a href="#" target="_blank">PhD (Botany)</a></li>
                            <li> <a href="#" target="_blank">PhD (Botany)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
