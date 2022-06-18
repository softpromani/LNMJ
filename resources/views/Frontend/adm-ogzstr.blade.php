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
     @include('Frontend.includes.sidebar.administration_menu')
        <main class="col-md-9 float-left">
            <a href="#" data-target="#sidebar" data-toggle="collapse"><i class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
            <div class="page-header">
                <h2 class="display-4 font-weight-light text-center">Organizational Structure</h2>
            </div>
            <div class="col-md-12" id="content_main">
               
                  
            
                      
                         
               <div class="row">
    
    
                       <div class="col-12">
                        <img src="{{asset('Frontend/images/lnmuorganizationalstr.jpg')}}" alt="">
                        <img src="{{asset('Frontend/images/lnmuogzstr2.jpg')}}" alt="">
                        <img src="{{asset('Frontend/images/lnmuogzstr3.jpg')}}" alt="">
                        <img src="{{asset('Frontend/images/lnmuogzstr4.jpg')}}" alt="">
                        <img src="{{asset('Frontend/images/lnmuogzstr5.jpg')}}" alt="">
                       </div> 
                          
                           
            </div>
</div>       
                                  







                     
                        
                        
            
            

       </main>
    </div>
</div>






@endsection