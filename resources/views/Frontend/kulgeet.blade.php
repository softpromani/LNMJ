@extends('Frontend.includes.layout')
@section('content')
    <section id="yt_spotlight1" class="block mb30">
        <div class="container">
            <div class="row">

                <div id="slideshow" class="col-sm-12">
                    <div id="sj_k2slickslider346" class="sj-k2slickslider slide slickslider-right" data-interval="5000"
                        data-pause="hover">
                        <!-- Carousel items -->
                        {{-- <h1 class="sliderText" style=" z-index:99;position:absolute;margin-left:40%;margin-top:6%;">
                            Contact Us</h1> --}}
                            <div class="text-effect"  style=" z-index:99;position:absolute;margin-left:40%;margin-top:5%;">
                                <span>Kulgeet</span>
                            </div>

                        <div class="slickslider-items bg-style1">
                            <div class="slickslider-item item clearfix active">
                                <div class="images-slideshow"><img alt=""
                                        src="{{ asset('Frontend/images/header.jpg') }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
















<div class="container">
    <div class="row d-flex d-md-block flex-nowrap wrapper">
     @include('Frontend.includes.sidebar.about_menu')
        <main class="col-md-9 float-left">
            <a href="#" data-target="#sidebar" data-toggle="collapse"><i class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
            <div class="page-header">
                <h2 class="display-4 font-weight-light text-center">Kulgeet</h2>
            </div>
            <div class="col-md-12" id="content_main">
               
                  
              
                   
               <img class="size-medium wp-image-4769 aligncenter" src="{{ asset('Frontend/images/kulgeet.jpg') }}">
               
      
                        
              
                      
                         
                           

            
     
                                {{-- <img class="alignright" src="https://lnmuacin.in/studentnotice/Administration%20notice%20image/University1.jpg" alt=""> --}}
                             
                          
                           
            </div>
                            
                                  







                     
                        
                        
            
            

       </main>
    </div>
</div>


@endsection
