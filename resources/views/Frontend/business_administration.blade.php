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
                                    <a href="#" style="color:#7C0000" title="" >Home</a> | <a href="#" style="color:#7C0000" title="" >Departments of Commerce and Business Administration</a>
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
            @include('Frontend.includes.sidebar.self_financed_menu')
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Departments of Commerce and Business Administration</h2>
                </div>
                <p style="text-align: justify;font-size:13px;">MBA Programme was started in the Department in 1991. Over the years, the MBA Programme of the Department has made a mark for itself in the galaxy of B-Schools owing largely to the quality of its class room teaching, training and research. The department looks forward to developing itself as a Centre of Excellence in the field of management education. The programme has been approved by the All India Council for Technical Education (AICTE), Ministry of HRD, Government of India and also by the Government of Bihar. It has wide support of corporate world in terms training and final placement of the students apart from the Department-industry interface.</p>
                <br/><br/><br/><br/>
                <p  style="font-size:13px;">
                    Prospectus
                </p>
                <p  style="font-size:13px;">
                   Admission: 2021-23
                </p>
 </main>
        </div>
    </div>

@endsection
