@extends('Frontend.includes.layout')
@section('content')
    <section id="yt_spotlight1" class="block mb30">
        <div class="container">
            <div class="row">
                <div id="slideshow" class="col-sm-12">
                    <div id="sj_k2slickslider346" class="sj-k2slickslider slide slickslider-right" data-interval="5000"
                        data-pause="hover">
                        <div class="text-effect" style=" z-index:99;position:absolute;margin-left:35%;margin-top:4%;">
                            <span>Admission</span>
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
</section>

<section class="container">
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
</section>

@endsection
