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
                                                href="#" style="color:#7C0000" title="">IQAC Home</a>
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
            <div class="col-md-3 float-left col-1 pl-0 pr-0  width" id="sidebar">
                @include('Frontend.includes.sidebar.iqac_menu')
            </div>
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main" style="font-size: 12px;">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Internal Quality Assurance Cell</h2>
                </div>
                <div class="row">
                    <div class="col-md-8">

                        <p class="text-justify">Hello Friends,<br />
                            Welcome to the IQAC of L N Mithila University! <br /><br />
                            Quality in higher education is indeed a big issue in a knowledge-society of 21st century.
                            Further, path-breaking advancements in ICT and its innovative application in all walks of life
                            gives extra stimulus to the quality culture in all sorts of educational institutions including
                            HEIs. Quite naturally, HEIs across India are taking sincere efforts to upgrade and significantly
                            enhance the qualitative character of the Institution. Internal Quality Assurance Cell (IQAC),
                            the quality circle created within the organizational framework of the Institution, plays
                            proactive role in the entire process of quality enhancement and so, is of immense value for HEIs
                            in the changing landscape of higher education in new millennium.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <img src="{{ asset('Frontend/images/officers/iqac_director.jpeg') }}">
                            <div class="box-content">
                                <h3 class="title">Dr. Md. Zeya Haider</h3>
                                <span class="">Director</span>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="text-justify pt-2">L N Mithila University is one of the top-notch Universities of Bihar and is
                    being perpetually assessed and accredited by the NAAC in various cycles. So far, University has availed
                    two cycles of NAAC Assessment & Accreditation earning a good score. The subsequent cycle is on the
                    cards. University established its IQAC sometimes after 1st cycle of NAAC assessment and accreditation in
                    2005 and since then, it is working purposively within the academic and administrative fabric of the
                    University.
                    The focal of all objectives of the Cell, as underlined by the NAAC/UGC, is to provide internal mechanism
                    for improvement in quality in education. Accordingly, it is taking efforts to tone-up the quality
                    culture in the academic delivery system of the University. Since its establishment and constitution, the
                    IQAC of the University is working effectively to accomplish all its legitimate goals and objectives and
                    help University in getting evaluated both by the NAAC and NIRF.
                    Ours is a state traditional teaching-cum-affiliating public university and is accommodating quite a
                    large number of students and researchers at UG, PG, Doctoral and Post-doctoral levels in various
                    academic programs. Also, the jurisdiction of the University is spread over four districts of the state
                    located in a differently blessed location. Besides two dozens of Post-graduate Departments and
                    Institutes, over hundred Colleges of different academic nature are within the ambit of the University.
                    Obviously, it's relatively a big University. Quality initiatives of such a big University demand a
                    greater and discrete attention at the juncture of policy making and we at IQAC formulate plans and
                    strategies to accomplish our broader objectives of imparting quality education to our learners and also,
                    come to the expectations of all the stakeholders of the University and the society at large.
                    Quality enhancement is a dynamic process which begins but never ends. For all practical purposes,
                    quality enhancement is therefore, a never-ending task. Constant interaction with the environment opens
                    new doors for all kinds of upgradation and advancement. Involvement of one and all is the first and
                    foremost requisite to the success of this kind of institutional forum. Taking note of all these
                    institutional needs, we at IQAC are working as a Team for a good, better and the best. Let's involve and
                    accomplish, what not yet accomplished.
                </p>
            </main>
        </div>
    </div>
@endsection
