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
                                                href="#" style="color:#7C0000" title="">University at a
                                                Glance</a>
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
            @include('Frontend.includes.sidebar.administration_menu')
            <main class="col-md-9 float-left">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Pro Vice-Chancellor</h2>
                </div>
                <div class="col-md-12" id="content_main">
                    <div class="row">


                        <div class="col-md-4 col-sm-6" style="float:none;margin:0px auto;">
                            <div class="box">
                                <img src="{{ asset('Frontend/images/lnmupvc.jpg') }}" style="height:250px;">
                                <div class="box-content">
                                    <h3 class="title">Prof. Dolly Sinha</h3>
                                    <span class="">Pro Vice-Chancellor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="vc_tta-panel-body">
            <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                    <table class="table" width="100%" border='1'>
                        <tbody>
                            <thead>
                                <td>Sr. No.</td>
                                <td>Name</td>
                                <td>Designation</td>
                                <td>Mobile Number</td>
                                <td>E-mail ID</td>
                                <td>Photo</td>
                            </thead>
                            <tr>
                                <td width="187">1.</td>
                                <td width="181">Sri Pranav Kumar</td>
                                <td width="187">P.A.</td>
                                <td width="181">9431402591</td>
                                <td width="187">jhakumarpranav@gmail.com</td>
                                {{-- <td width="187"><img src="{{ asset('Frontend/images/vcps.jpeg') }}"></td> --}}
                                <td>N/A</td>
                            </tr>
                            <tr>
                                <td width="187">2.</td>
                                <td width="181">Sri Md. Haleem</td>
                                <td width="187">4th Grade</td>
                                <td width="181">6201393428</td>
                                <td width="187">N/A</td>
                                {{-- <td width="187"><img
                                    src="{{ asset('Frontend/images/vcps.jpeg') }}"></td> --}}
                                <td>N/A</td>
                            </tr>
                            <tr>
                                <td width="187">3.</td>
                                <td width="181">Nilesh Kumar</td>
                                <td width="187">4th Grade</td>
                                <td width="181">9304463036</td>
                                <td width="187">N/A</td>
                                {{-- <td width="187"><img
                                    src="{{ asset('Frontend/images/vcps.jpeg') }}"></td> --}}
                                <td>N/A</td>
                            </tr>
                            <tr>
                                <td width="187">4.</td>
                                <td width="181">Phool Jha</td>
                                <td width="187">Driver</td>
                                <td width="181">8210656246</td>
                                <td width="187">N/A</td>
                                {{-- <td width="187"><img
                                    src="{{ asset('Frontend/images/vcps.jpeg') }}"></td> --}}
                                <td>N/A</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
