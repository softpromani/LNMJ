@extends('Frontend.includes.layout')
@section('content')
          <!-- slider starts here -->
<section id="yt_spotlight1" class="block">
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
                                    <a href="#" style="color:#7C0000" title="" >Home</a> | <a href="#" style="color:#7C0000" title="" >Contact us</a>
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
<div class="container-fluid" style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;">
<p class="text-center">Contact Us</p>
</div>
<!-- slider ends here -->

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
                                <div class="images-slideshow">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.096378337277!2d85.89363581502911!3d26.160990483457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39edb82e2f4af6e3%3A0x3b6113d300867bf0!2sLalit%20Narayan%20Mithila%20University!5e0!3m2!1sen!2sin!4v1655222919933!5m2!1sen!2sin"
                                        width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

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
            @include('Frontend.includes.sidebar.about_menu')
            <main class="col-md-9 float-left">
                <a href="#sidebar" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>

                    <div class="col-md-12" id="content_main">
                        <div id="system-message-container"></div>
                        <div id="yt_component">
                            <div class="itemListView gridview" id="k2Container">
                                <div class="itemListCategoriesBlock">
                                    <div class="itemListCategory">
                                        <h2 class="text-center ">Contact Us</h2>

                                    </div>
                                </div>

                                <div class="catItemIntroText col-md-4">
                                    <h3>Dean Student's Welfare</h3>
                                    <div class="info-fax ">
                                        <i class="icon-fax"></i><span class="info-label">Dr. Vijay Kumar Yada</span>
                                    </div>
                                    <div class="info-mail">
                                        <i class="icon-envelope-alt"></i><span class="info-label">Email: dsw@lnmu.ac.in</span>
                                    </div>
                                </div>
                                <div class="catItemIntroText col-md-4">
                                    <h3>Proctor</h3>
                                    <div class="info-fax">
                                        <i class="icon-fax"></i><span class="info-label">Dr. Ajay Nath Jha</span>
                                    </div>
                                    <div class="info-mail">
                                        <i class="icon-envelope-alt"></i><span class="info-label">Email: proctor@lnmu.ac.in</span>
                                    </div>


                                </div>
                                <div class="catItemIntroText col-md-4">
                                    <h3>Registrar</h3>
                                    <div class="info-fax">
                                        <i class="icon-fax"></i><span class="info-label">Dr. Mushtaque Ahmad​</span>
                                    </div>
                                    <div class="info-mail">
                                        <i class="icon-envelope-alt"></i><span class="info-label">Email: registrar@lnmu.ac.in</span>
                                    </div>


                                </div>
                                <div class="catItemIntroText col-md-4">
                                    <h3>Controller of Examinations </h3>
                                    <div class="info-fax">
                                        <i class="icon-fax"></i><span class="info-label">Dr. Anand Mohan Mishra</span>
                                    </div>
                                    <div class="info-mail">
                                        <i class="icon-envelope-alt"></i><span class="info-label">Email: coe@lnmu.ac.in</span>
                                    </div>
                                    <div class="info-mail">
                                        <i class="icon-envelope-alt"></i><span class="info-label">controllerofexam.lnmu@gmail.com</span>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
            </main>
        </div>
    </div>
@endsection
