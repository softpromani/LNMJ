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
                            <span>AQAR</span>
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
                @include('Frontend.includes.sidebar.iqac_menu')
            </div>
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">AQAR</h2>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-parent="#accordion" href="{{ route('criteria') }}">
                                            AQAR 2020-21
                                        </a>
                                    </h4>
                                </div>
                                {{-- <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                                        </div>
                                    </div> --}}
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                            AQAR 2019-20
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">AQAR 2019-20.pdf</a></li>
                                            <li><a href="#">7.2_Best Practices</a></li>
                                            <li><a href="#">7.3_Institutional Distinctiveness</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            AQAR 2018-19
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">AQAR 2018-19.pdf</a></li>
                                            <li><a href="#">7.2_Best Practices</a></li>
                                            <li><a href="#">7.3_Institutional Distinctiveness</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                            aria-controls="collapse">
                                            AQAR 2017-18
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">AQAR 2017-18</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>




            </main>
        </div>
    </div>
@endsection
