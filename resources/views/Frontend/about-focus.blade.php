@extends('Frontend.includes.layout')

@section('content')
    <!-- slider starts here -->
    <section id="yt_spotlight1" class="block mb30">
        <div class="container">
            <div class="row">
                <div id="slideshow" class="col-sm-12">
                    <div id="sj_k2slickslider346" class="sj-k2slickslider slide slickslider-right" data-interval="5000"
                        data-pause="hover">
                        <!-- Carousel items -->
                        <div class="slickslider-items bg-style1">
                            <div class="slickslider-item item clearfix active">
                                <div class="images-slideshow"><img alt=""
                                        src="{{ asset('Frontend/images/internal%20banners/banner119.jpg') }}" /></div>
                                <div class="item-content">
                                    <div class="item-content-inner">
                                        <h5 class="item-title">
                                            <a href="#" style="color:#7C0000" title="">Home</a> | <a
                                                href="#" style="color:#7C0000" title="">University at a
                                                Glance</a>
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
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Focus</h2>
                </div>
                <div class="col-md-12" id="content_main">
                    <div id="system-message-container"></div>
                    <div id="yt_component">
                        <div class="itemListView gridview" id="k2Container">

                                <section class="alterna-col col-lg-12 col-md-12 col-sm-12">
                                    <p style="text-align: justify;">Focus of Lalit Narayan Mithila University is on offering
                                        and strengthening innovative academic programmes in emerging interdisciplinary areas
                                        of different faculties with quality provisions to contribute to the growth of
                                        knowledge. In quest to make the University among India’s most forward looking and
                                        responsive University, following priority based areas have been identified for
                                        actions:</p>
                                    <ul>
                                        <li><strong>Teaching and Learning</strong>: Create conducive environment for an
                                            interactive and application-oriented experiential learning.</li>
                                        <li><strong>Research</strong>: Foster research orientation among students and
                                            faculty in basic and applied areas.</li>
                                        <li><strong>Consultancy Services</strong>: Take academic proficiency to corporate
                                            and community by providing cost effective solutions.</li>
                                        <li><strong>People</strong>: Make the University a preferred destination for work
                                            and study.</li>
                                        <li><strong>Global perspective</strong>: Encompass a national and international
                                            viewpoint into teaching, research and consultancy.</li>
                                        <li><strong>Good Governance</strong>: Bring transparency and accountability in
                                            administrative operations.</li>
                                        <li><strong>Social Relevance</strong>: Position itself as a catalyst in social
                                            change.</li>
                                        <li><strong>Entrepreneurial Culture:</strong> Nurture entrepreneurial capabilities
                                            to accelerate growth.</li>
                                        <li><strong>Sports and Culture</strong>: Provide ample opportunities to develop
                                            sportsmanship and passion for culture and national heritage.</li>
                                        <li><strong>Industrial Linkage:</strong>Linkage with industries for the promotion of
                                            science and technology.</li>
                                        <li><strong>Academic Programmes:</strong> Design and launch academic programmes
                                            which may transform the socio-economic condition of the people leading to
                                            intellectual, academic and cultural development.</li>
                                    </ul>
                                    <p>&nbsp;</p>
                                </section>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
