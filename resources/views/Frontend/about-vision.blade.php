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
     @include('Frontend.includes.sidebar.about_menu')
        <main class="col-md-9 float-left">
            <a href="#" data-target="#sidebar" data-toggle="collapse"><i class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
            <div class="page-header">
                <h2 class="display-4 font-weight-light text-center">Vision, Mission & Objective</h2>
            </div>
            <div class="col-md-12" id="content_main">
               
                  
                <div class="row">
                    <section class="alterna-col col-lg-12 col-md-12 col-sm-12 ">
                   <p><strong>VISION</strong></p>
               <hr>
               <p style="text-align: justify;">Lalit Narayan Mithila University aspires to be an energetic and responsive University offering educational opportunities for learner community especially to the lower socio-economic strata of the society seeking quality undergraduate, post graduate, research and continuing personal or professional enrichment in higher education and selected professions that will lead to formation of scholarly community serving the nation by advancing, sharing and applying knowledge and by facilitating the development of thoughtful, creative, adaptable, contributing human citizens.</p>
                       
               
               <strong>MISSION</strong><p></p>
               <hr>
               <ul>
               <li>To carry out the academic process for achieving excellence through active student – teacher participation.</li>
               <li>To promote research and development activities among students as well as teachers.</li>
               <li>To inculcate high moral, ethical and professional standards among students.</li>
               <li>To contribute effectively towards societal and community development.</li>
               <li>To facilitate intellectual stimulation to generate, maintain and disseminate knowledge.</li>
               <li>To empower participants to meet the challenges of collaborative and competitive globalized environment.</li>
               <li>To develop and institute a culture of inclusiveness and provide wide access to higher education opportunities.</li>
               <li>To foster sustainable environmental attitude.</li>
               <li>To develop unique University where the branches significantly provide sustenance to the tree and bear fruits for all.</li>
               <li>To initiate trends which impact global higher education policies and practices.</li>
               </ul>
               
                       </section>
               
                       <p><strong>Objectives</strong></p>
                       <section class="alterna-col col-lg-12 col-md-12 col-sm-12">
                           <ul>
               <li>Achieving excellence in post-graduate and undergraduate teaching and learning</li>
               <li>Offering innovative programmes and in diverse disciplines addressing the emerging needs of the society.</li>
               <li>Providing high quality research leading to creation and dissemination of knowledge.</li>
               <li>Promotional of international understanding through global initiatives.</li>
               <li>Engaging with the local community and industry for sustainable and inclusive development.</li>
               <li>Maintaining high quality of education as prescribed by the UGC Act.</li>
               <li>Expansion of current academic and research areas into diversified focus and implementation in phases.</li>
               <li>Encouraging creativity and innovation in every discipline.</li>
               <li>Providing value based holistic education leading to the growth and development of the community better equipped to serve the mankind.</li>
               <li>Linkage with the industries for the promotion of science and technology.</li>
               <li>Designing and launching academic programmes which may transform the social, economic condition of the people leading to their intellectual, academic and cultural development.</li>
               </ul>
                       </section>
                        
               
                        
                       </div>
                      
                         
                           

            
     
                                {{-- <img class="alignright" src="https://lnmuacin.in/studentnotice/Administration%20notice%20image/University1.jpg" alt=""> --}}
                             
                          
                           
            </div>
                            
                                  







                     
                        
                        
            
            

       </main>
    </div>
</div>






@endsection