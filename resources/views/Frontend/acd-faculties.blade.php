@extends('Frontend.includes.layout')

@section('content')
<!-- slider starts here -->
<section id="yt_spotlight1" class="block mb30">
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
                                    <a href="#" style="color:#7C0000" title="" >Home</a> | <a href="#" style="color:#7C0000" title="" >University at a Glance</a>
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
     @include('Frontend.includes.sidebar.academics_menu')
        <main class="col-md-9 float-left">

            <div class="col-md-12"><br>
                <div class="col-md-6 col-sm-6"><p></p>
                <div style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;"><a style="color: #000;" href="{{ Route('scienceDepartment') }}" target="_blank">Faculty of Sciences</a></div>
                <p>&nbsp;</p>
                <div style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;"><a style="color: #000;" href="{{ Route('humanities') }}" target="_blank">Faculty of Humanities</a></div>
                <p>&nbsp;</p>
                <div style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;"><a style="color: #000;" href="{{ Route('law') }}" target="_blank">Faculty of Law</a></div>
                <p>&nbsp;</p>
                <div style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;"><a style="color: #000;" href="{{ Route('education') }}" target="_blank">Faculty of Education</a></div>
                <p>&nbsp;</p>

                </div>
                <div class="col-md-6 col-sm-6"><p></p>
                <div style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;"><a style="color: #000;" href="{{ Route('social_scienceDepartment') }}" target="_blank">Faculty of Social Science</a></div>
                <p>&nbsp;</p>
                <div style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;"><a style="color: #000;" href="{{ Route('commerce') }}" target="_blank">Faculty of Commerce</a></div>
                <p>&nbsp;</p>
                <div style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;"><a style="color: #000;" href="{{ Route('dentistry') }}" target="_blank">Faculty of Dentistry</a></div>


                <p>&nbsp;</p>
                <!-- <div style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;"><a style="color: #000;" href="fineArts" target="_blank">Faculty of Medicine</a></div> -->

                <div style="background-color: #d3d3d3; padding: 5px 10px 5px 10px; color: white; text-align: center;"><a style="color: #000;" href="{{ Route('fineArts') }}" target="_blank">Faculty of Fine arts</a></div>
                <p></p></div><br>
                </div>



       </main>


    </div>





    <p>
    </p>
    <p></p>
</div>






@endsection
