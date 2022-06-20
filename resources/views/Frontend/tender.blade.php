@extends('Frontend.includes.layout')
@section('content')
    <!-- slider starts here -->
    <section id="yt_spotlight1" class="block mb30">
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
                                                href="#" style="color:#7C0000" title="">Document Tenders</a>
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

            @include('Frontend.includes.sidebar.documents_menu')

            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Tenders</h2>
                </div>

                <section class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Regarding Tender Document of CET B.Ed - 2021
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Advertisment Tender CET 2021</a></li>
                                        <li><a href="#">Tender CET 2021</a></li>
                                        <li><a href="#">शुद्धिपत्र</a></li>
                                        <li><a href="#">Notice regarding opening of Tender of CET-B.Ed.-2021</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">Corrigendum for Biometric Tender</a></li>
                                <li><a href="#">Tender Notice for Biometric in CET-B.Ed.-2022 Examiantion</a></li>
                                <li><a href="#">Tender Document for Biometric in CET-B.Ed.-2022 Examiantion</a></li>
                                <li><a href="#">publication Short Tender Notice for supply of Various Items for Senate-2021</a></li>
                                <li><a href="#">Short Tender Notice for supply of Various Items for Senate-2021</a></li>
                                <li><a href="#">Univ- memo no- UB 639 dated 18-12-2021</a></li>
                                <li><a href="#">Univ- memo no- UB 638 dated 18-12-2021</a></li>
                                <li><a href="#">Univ- memo no- UB 637 dated 18-12-2021</a></li>
                            </ul>
                        </div>
                    </div>
                </section>

            </main>
        </div>
    </div>
@endsection
