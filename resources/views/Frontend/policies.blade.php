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
                                    <a href="#" style="color:#7C0000" title="" >Home</a> | <a href="#" style="color:#7C0000" title="" >Policies</a>
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
<p class="text-center">Policies</p>
</div>
<!-- slider ends here -->


    <section class="container" style="margin-top: 50px;margin-bottom:50px;">
        <ul>
            <li> <a href="#" style="font-size: 20px;color:black;">Consultancy Policy<img src="{{asset('Frontend/images/newanim.gif')}}"/></a></li>
            <li> <a href="#" style="font-size: 20px;color:black;">Information Technology Policy<img src="{{asset('Frontend/images/newanim.gif')}}"/></a></li>
            <li> <a href="#" style="font-size: 20px;color:black;">Research Ethics Policy<img src="{{asset('Frontend/images/newanim.gif')}}"/></a></li>
            <li> <a href="#" style="font-size: 20px;color:black;">Research Policy<img src="{{asset('Frontend/images/newanim.gif')}}"/></a></li>
            <li> <a href="#" style="font-size: 20px;color:black;">Plagiarism Policy<img src="{{asset('Frontend/images/newanim.gif')}}"/></a></li>
        </ul>
    </section>

@endsection
