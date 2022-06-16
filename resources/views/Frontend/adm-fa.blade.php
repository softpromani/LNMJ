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
            <a href="#" data-target="#sidebar" data-toggle="collapse"><i class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
            <div class="page-header">
                <h2 class="display-4 font-weight-light text-center">F.A.</h2>
            </div>
            <div class="col-md-12" id="content_main">





                                <div class="row">


                                        <div class="col-sm-3" >
                                        <img src="{{asset('Frontend/images/lnmuF.A.jpg')}}" alt="">
                                        </div>
                                        <div class="col-sm-6"><h3 style="color:#7C0000;">Sri Kailash Ram</h3>
                                            <p>F.A. , LNMU, Darbhanga, Bihar</br>
                                                8544513256</br>
                                                fa@lnmu.ac.in</p>
                                        </div>


                                </div>
            </div>






       </main>


    </div>





    <div class="vc_column-inner mb-5 "><div class="wpb_wrapper"><div class="vc_tta-container" data-vc-action="collapse"><div class="vc_general vc_tta vc_tta-tabs vc_tta-color-blue vc_tta-style-outline vc_tta-shape-rounded vc_tta-spacing-1 vc_tta-tabs-position-left vc_tta-controls-align-left "><div class="vc_tta-tabs-container"><ul class="vc_tta-tabs-list"><li class="vc_tta-tab vc_active" data-vc-tab=""><a href="#1493966056575-3c12478e-26bd" data-vc-tabs="" data-vc-container=".vc_tta"><span class="vc_tta-title-text">1. FA Office Staff Details</span></a></li>
    </ul></div><div class="vc_tta-panels-container"><div class="vc_tta-panels"><div class="vc_tta-panel vc_active" id="1493966056575-3c12478e-26bd" data-vc-content=".vc_tta-panel-body"><div class="vc_tta-panel-heading"><h4 class="vc_tta-panel-title"><a href="#1493966056575-3c12478e-26bd" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">1. FA Office Staff Details</span></a></h4></div><div class="vc_tta-panel-body">
        <div class="wpb_text_column wpb_content_element ">
            <div class="wpb_wrapper">
                <table width="100%" border='1' class="table table-responsive border">
    <thead>
        <tr style="background-color: #00aeef;color:white;">
            <td width="187">Sr. No.</td>
            <td width="181">Name</td>
            <td width="187">Designation</td>
            <td width="181">Mobile Number</td>
            <td width="187">E-mail ID</td>
            <td width="181">Photo</td>
            </tr>
    </thead>

                    <tbody>

    <tr>
    <td width="187">1.</td>
    <td width="181">Sri Sikandra yadav</td>
    <td width="187">IIIrd </td>
    <td width="181"><!--9525111280--></td>
    <td width="187"></td>
    <td width="187"><img src="{{asset('Frontend/images/lnmufa1.jpg')}}"></td>
    </tr>
    <tr>
    <td width="187">2.</td>
    <td width="181">Sri Mahesh Roy</td>
    <td width="187">Peon</td>
    <td width="181"></td>
    <td width="187"></td>
    <td width="187"><img src="{{asset('Frontend/images/lnmufa2.jpg')}}"></td>

    </tr>
    <tr>
    <td width="187">3.</td>
    <td width="181">Sri Kusho Mandal</td>
    <td width="187">Peon</td>
    <td width="181">9122964675</td>
    <td width="187"></td>
    <td width="187"><img src="{{asset('Frontend/images/lnmufa3.jpg')}}"></td>

    </tr>

    </tbody>
    </table>

            </div>
        </div>
    </div></div>


    </div></div></div></div></div></div>
    <p>
    </p>
    <p></p>
</div>






@endsection
