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
                <h2 class="display-4 font-weight-light text-center">Campus</h2>
            </div>
            <div class="col-md-12" id="content_main">
               
                  
                        
                      
                         
                           

            
     
                                {{-- <img class="alignright" src="https://lnmuacin.in/studentnotice/Administration%20notice%20image/University1.jpg" alt=""> --}}
                             
                               <p style="text-align: justfy;">The University started functioning in the year 1972 from Mohanpur House of Darbhanga (Sakri Road). In the year 1975 it was shifted to the palatial unique Raj campus, named as Kameshwaranagar, after the name of Late Maharajadhiraj Kameshwara Singh, to whom the campus previously belonged.</p>
                           <p style="text-align: justfy;">Details of accommodations and setting of various units of the University in different buildings made available earlier to the University are as below mentioned</p>
                           <ul style="text-align: justfy;">
                           <li>Raj Head Office	-	University Administration Office</li>
                           <li>Kalyani Bhawan (Nargauna Palace)	-	University Departments and Maharajadhiraj Kameshwara Singh Museum.</li>
                           <li>Moti Mahal	-	University Department of Mathematics and residential quarters of Teaching &amp; Non –Teaching.</li>
                           <li>Technical School Compound	-	Office of the NCC, Office of the Non Teaching and Students Association.</li>
                           <li>Lalbagh Guest House Compound	-	Transferred to MRM College and residential quarters of teaching and non-teaching staff.</li>
                           <li>Garage Compound	-	Residence of non-teaching staff.</li>
                           <li>Srotriya Line Compound (03 quarters)	-	Residence of teachers.</li>
                           <li>Quarter No. 06	-	Residence of Officer and Teacher</li>
                           <li>Special Officer Residence	-	Residence of Teachers.</li>
                           <li>Manager’s Banglow, Nargauna	-	Residence of Vice-Chancellor</li>
                           <li>Side building of Kalyani Bhawan	-	Residence of Officers, Teachers &amp; Non-teaching staff.</li>
                           <li>Astabal Compound	-	Residence of Non-teaching &amp; office of the District Branch of Bihar Home Guards.</li>
                           <li>New Engineering Compound	-	Residence of Officers and Non-Teaching staff.</li>
                           <li>WIT Campus	-	Women’s Institute of Technology.</li>
                           <li>Chief Manager Banglow	-	Allotted to C. M. Law College, Darbhanga</li>
                           <li>Tutor’s Banglow	-	University Department of Dramatics.</li>
                           <li>Quarter No.- 11	-	Residence of Teachers and Non-Teaching staff.</li>
                           <li>Shrotriya Line (09 Quarters)	-	Residence of Non-teaching staff.</li>
                           <li>Married Quarters 03-Astabal Compound	-	Residence of Non-teaching staff.</li>
                           <li>European Guest House	-	Guest House of the University, office of the Directorate of Distance Education, residence of Pro-Vice-Chancellor &amp; Gandhi Smriti Sadan.</li>
                           <li>Jirat’s Manager’s Banglow	-	Residence of Teachers and Officers.</li>
                           <li>Raj Guest House	-	Residence of Non-teaching staff.</li>
                           <li>Sipahi Line &amp; Dinkar Awas	-	Non-teaching staff quarters.</li>
                           </ul>
                           
                           
            </div>
                            
                                  







                     
                        
                        
            
            

       </main>
    </div>
</div>






@endsection