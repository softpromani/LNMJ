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


<section class="no-left  block com_k2" id="content">
    <div class="container">
        <div class="row">
            <aside class="col-md-3 col-sm-12" id="content_left">
                <div class="col-sm-12" id="right">
                    <div class="module k2-categories">
<h3 class="modtitle">About Us</h3>
<div class="modcontent clearfix">
    <div class="k2CategoriesListBlock k2-categories" id="k2ModuleBox357">
        <ul class="level0">
            <li><a href="aboutus-originandhistory.html"><span class="catTitle">Origin and History</span><span class="catCounter"></span></a></li>
            <li><a href="aboutus-universityprofile.html"><span class="catTitle">University Profile</span><span class="catCounter"></span></a></li>
            <li><a href="aboutus-visionmission.html"><span class="catTitle">Vision &amp; Mission</span><span class="catCounter"></span></a></li>
            <li><a href="aboutus-impvisitors.html"><span class="catTitle">Important Visitors</span><span class="catCounter"></span></a></li>
            <li><a href="aboutus-formerVCs.html"><span class="catTitle">Former Vice-Chancellors</span><span class="catCounter"></span></a></li>
            <li><a href='alumni/index.html' target="_blank">Distinguished Alumni</a></li>
            <li><a href="aboutus-universityglance.html"><span class="catTitle">University at a glance</span><span class="catCounter"></span></a></li>
            <li><a href="aboutus-Accreditation.html"><span class="catTitle">Accreditation</span><span class="catCounter"></span></a></li>
            <li><a href="aboutus-milestones.html"><span class="catTitle">Milestones</span><span class="catCounter"></span></a></li>
            <li><a href="aboutus-newinitiatives.html"><span class="catTitle">New Initiatives</span><span class="catCounter"></span></a></li>
            <li><a href="aboutus-routemap.html"><span class="catTitle">Route Map</span><span class="catCounter"></span></a></li>
            <li><a href="photogallery.html"><span class="catTitle">Photo Gallery</span><span class="catCounter"></span></a></li>
            <!--<li><a href="aboutus-directory.php"><span class="catTitle">Directory</span><span class="catCounter"></span></a></li>
            --><li><a href="aboutus-publicrelations.html"><span class="catTitle">Public Relations</span><span class="catCounter"></span></a></li>
            <!--<li><a href="aboutus-publications.php"><span class="catTitle">Publications</span><span class="catCounter"></span></a></li>
            <li><a href="aboutus-ouinmedia.php"><span class="catTitle">OU in Media</span><span class="catCounter"></span></a></li>
            --><li><a href="aboutus-otherlinks.html"><span class="catTitle">Other Links</span><span class="catCounter"></span></a></li>
            <li><a href="aboutus-contactus.html"><span class="catTitle">Contact Us</span><span class="catCounter"></span></a></li>
        </ul>
    </div>
</div>
</div>					</div>
            </aside>
            <div class="col-md-9" id="content_main">
                <div id="system-message-container"></div>
                <div id="yt_component">
                    <div class="itemListView gridview" id="k2Container">
                        <img  />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
