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
                                    <a href="#" style="color:#7C0000" title="" >Home</a> | <a href="#" style="color:#7C0000" title="" >Institute of Gerontology and Geriatrics</a>
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
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Institute of Gerontology and Geriatrics</h2>
                </div>
                <div class="wpb_wrapper"><div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>

                <div class="wpb_text_column wpb_content_element ">
                    <div class="wpb_wrapper">
            <p style="text-align: justify;">It gives me immense pleasure to share about LNMU endeavours over the years keeping in mind  the societal obligation to ensure life of dignity to ‘Masters of the Past’. I personally feel that Universities have a big role in safeguarding the interests of senior citizens. Elders in the family need to be respected and taken a very good care of. I am happy to inform that Lalit Narayan Mithila University has prioritized Elderly Care and is committed to raise their quality of life. Youth sensitization towards Care of the Aged is the primary task.</p>
            <p style="text-align: justify;">It is enthralling to bring to your notice the aims and objectives behind setting up of the Institute of Gerontology and Geriatrics in this University. Besides Promotion of ageing studies and research, IGG carries the onus of running programmes of elderly welfare.</p>
            <p style="text-align: justify;">I wish IGG a very bright future.</p>
            <p style="text-align: left;"><b>Prof. Surendra Pratap Singh</b><br>
            Vice Chancellor</p>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <a style="font-weight:bold;" href="http://lnmuacin.in/studentnotice/general%20notification%20pdf/Call%20for%20Abstract%20and%20Registration-min.pdf" target="_blank">Call for Abstract and Registration</a>&nbsp; &nbsp;  &nbsp;  &nbsp;
                    </div>
                  </div>

                <div class="wpb_text_column wpb_content_element ">
                    <div class="wpb_wrapper">
                        <a class="btn   btn-theme " href="http://lnmuacin.in/studentnotice/Administration%20related%20pdf/IGG%20CONTENT-min.pdf" target="_blank">Institute of Gerontology and Geriatrics</a>

                    </div>
                </div>
            <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
            </div>
 </main>
        </div>
    </div>

@endsection
