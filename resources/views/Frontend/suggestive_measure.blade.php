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
                                    <a href="#" style="color:#7C0000" title="" >Home</a> | <a href="#" style="color:#7C0000" title="" >Suggestive Measure</a>
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
<p class="text-center">Suggestive Measure</p>
</div>
<!-- slider ends here -->


    <section class="container" style="margin-top: 50px;margin-bottom:50px;">
        <ul>
            <li> <a href="#" style="font-size: 20px;color:black;">Policy document proposal for HE ( click to download )</a></li>
            <li> <a href="#" style="font-size: 20px;color:black;">Educational Reforms ( click to download )</a></li>
            <li> <a href="#" style="font-size: 20px;color:black;">Alumni Association ( click to download )</a></li>
        </ul>
        <p class="text-center"  style="font-size: 20px;color:black;font-weight:bold;">Your suggestion is important to us. Please mail us your valuable feedback at feedback@lnmu.ac.in </p>
    </section>

@endsection
