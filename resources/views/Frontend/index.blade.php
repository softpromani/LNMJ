<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en-gb">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <script language="JavaScript">
        function MakeArray(n) {
            this.length = n
            return this
        }
        monthNames = new MakeArray(12)
        monthNames[1] = "January"
        monthNames[2] = "February"
        monthNames[3] = "March"
        monthNames[4] = "April"
        monthNames[5] = "May"
        monthNames[6] = "June"
        monthNames[7] = "July"
        monthNames[8] = "August"
        monthNames[9] = "September"
        monthNames[10] = "October"
        monthNames[11] = "November"
        monthNames[12] = "December"
        dayNames = new MakeArray(7)
        dayNames[1] = "Sunday"
        dayNames[2] = "Monday"
        dayNames[3] = "Tuesday"
        dayNames[4] = "Wednesday"
        dayNames[5] = "Thursday"
        dayNames[6] = "Friday"
        dayNames[7] = "Saturday"

        function customDateString() {
            currentDate = new Date()
            var theDay = dayNames[currentDate.getDay() + 1]
            var theMonth = monthNames[currentDate.getMonth() + 1]
            msie4 = ((navigator.appName == "Microsoft Internet Explorer") && (parseInt(navigator.appVersion) >= 4));
            if (msie4) {
                var theYear = currentDate.getYear()
            } else {
                var theYear = currentDate.getYear() + 1900
            }
            return theDay + ", " + theMonth + " " + currentDate.getDate() + ", " + theYear
        }
    </script>
    @include('Frontend.includes.head')
</head>

<body id="bd" class="homepage home-layout1 res">

    <div id="yt_wrapper" class="layout-wide">
        <!-- header starts here -->
        @include('Frontend.includes.header')
        <!-- header ends here -->
        <!-- slider starts here -->
        <section id="yt_spotlight1" class="block">
            <div class="container">
                <div class="row">


                    <div id="slideshow" class="col-sm-9" style="padding-right:0 !important">
                        <div id="sj_k2slickslider346" class="sj-k2slickslider slide slickslider-right"
                            data-interval="5000" data-pause="hover">
                            <!-- Carousel items -->
                            <div class="slickslider-items bg-style1">
                                <div class="slickslider-item item clearfix active">
                                    <div class="images-slideshow">
                                        <img alt="" src="{{ asset('Frontend/images/banners/slider12.jpg') }}"
                                            style="height:350px ;" />
                                    </div>
                                </div>

                                <div class="slickslider-item item clearfix">
                                    <div class="images-slideshow"><img alt=""
                                            src="{{ asset('Frontend/images/banners/003.jpg') }}"
                                            style="height:350px ;" /></div>
                                </div>

                                <div class="slickslider-item item clearfix">
                                    <div class="images-slideshow"><img alt=""
                                            src="{{ asset('Frontend/images/banners/0001.jpg') }}"
                                            style="height:350px ;" /></div>
                                </div>

                                <div class="slickslider-item item clearfix">
                                    <div class="images-slideshow"><img alt=""
                                            src="{{ asset('Frontend/images/banners/slider6.jpg') }}"
                                            style="height:350px ;" /></div>
                                </div>
                                <div class="slickslider-item item clearfix">
                                    <div class="images-slideshow"><img alt=""
                                            src="{{ asset('Frontend/images/banners/slider8.jpg') }}"
                                            style="height:350px ;" /></div>
                                </div>
                                <div class="slickslider-item item clearfix">
                                    <div class="images-slideshow"><img alt=""
                                            src="{{ asset('Frontend/images/banners/slider10.jpg') }}"
                                            style="height:350px ;" /></div>
                                </div>
                                <div class="slickslider-item item clearfix">
                                    <div class="images-slideshow"><img alt=""
                                            src="{{ asset('Frontend/images/banners/slider2.jpg') }}"
                                            style="height:350px ;" /></div>
                                </div>

                                <div class="slickslider-item item clearfix">
                                    <div class="images-slideshow"><img alt=""
                                            src="{{ asset('Frontend/images/banners/slider11.jpg') }}"
                                            style="height:350px ;" />
                                    </div>
                                </div>


                            </div>

                            <!-- Carousel nav -->
                            <div class="nav-pagination conner-tl bg-style1">
                                <a class="left" href="#sj_k2slickslider346" data-jslide="prev">Prev<span
                                        class="over-row"></span></a>
                                <a class="right" href="#sj_k2slickslider346" data-jslide="next">Next<span
                                        class="over-row"></span></a>
                            </div>
                            <div class="pag-item">
                                <a class="sel" href="#sj_k2slickslider346" data-jslide="0">1</a>
                                <a class="" href="#sj_k2slickslider346" data-jslide="1">2</a>
                                <a class="" href="#sj_k2slickslider346" data-jslide="2">3</a>
                                <a class="" href="#sj_k2slickslider346" data-jslide="3">4</a>

                                <a class="" href="#sj_k2slickslider346" data-jslide="4">5</a>
                                <a class="" href="#sj_k2slickslider346" data-jslide="5">6</a>
                                <a class="" href="#sj_k2slickslider346" data-jslide="6">7</a>
                                <a class="" href="#sj_k2slickslider346" data-jslide="7">8</a>

                                <a class="" href="#sj_k2slickslider346" data-jslide="8">9</a>
                            </div>
                        </div>

                        <script>
                            //<![CDATA[
                            jQuery(document).ready(function($) {
                                $('#sj_k2slickslider346').each(function() {
                                    var $this = $(this),
                                        options = options = !$this.data('modal') && $.extend({}, $this.data());
                                    $this.jcarousel(options);
                                    $this.bind('jslide', function(e) {
                                        var index = $(this).find(e.relatedTarget).index();
                                        // process for nav
                                        $('[data-jslide]').each(function() {
                                            var $nav = $(this),
                                                $navData = $nav.data(),
                                                href, $target = $($nav.attr('data-target') || (href = $nav.attr(
                                                    'href')) && href.replace(/.*(?=#[^\s]+$)/, ''));
                                            if (!$target.is($this)) return;
                                            if (typeof $navData.jslide == 'number' && $navData.jslide ==
                                                index) {
                                                $nav.addClass('sel');
                                            } else {
                                                $nav.removeClass('sel');
                                            }
                                        });
                                    });

                                    $this.touchSwipeLeft(function() {
                                        $this.jcarousel('next');
                                    });
                                    $this.touchSwipeRight(function() {
                                        $this.jcarousel('prev');
                                    });
                                });
                                return;
                            });
                            //]]>
                        </script>
                    </div>
                    <div class="col-sm-3 slideLft">
                        <ul>

                            <li><a href="https://osmaniaerp.com/ouconvocation/" target="_blank">OU - 82nd
                                    Convocation<img src="{{ asset('Frontend/images/newanim.gif') }}"></a></li>
                            <li><a href="rusa2/index.html" target="_blank">RUSA 2.0 Positions</a></li>
                            <li><a href="http://universities.eoffice.telangana.gov.in/" target="_blank">e-Office
                                    Portal</a></li>
                            <li><a href="https://ums.osmania.ac.in/" target="_blank">UMS LOGIN PAGE</a></li>

                            <li><a href="https://online.osmaniaerp.com/" target="_blank">Apply Online for
                                    Certificates</a></li>
                            <li><a href="https://online.osmaniaerp.com/" target="_blank">Apply Online for
                                    Certificates</a></li>
                            <li><a href="emp-career-news.html">Careers & Fellowships</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        <!-- slider ends here -->

        <!-- list box starts here -->

        <section id="yt_spotlight2" class="block" style="margin-bottom:0 !important">
            <div class="container">
                <div class="row">
                    <div id="top3" class="col-sm-12">
                        <div class="module categories-ii">
                            <div class="modcontent clearfix">
                                <div id="category_16297137721453353795" class="sj_category theme4">
                                    <ul class="line items-row1">
                                        <li class="" style="width: -20px;">
                                            <a href="http://ouexams.in/index.aspx" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon6.png') }}" alt=""
                                                    hspace="3">Examination Branch</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="http://www.oucde.net/" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon3.png') }}" alt=""
                                                    hspace="3">Distance Education</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="admissions/index-2.html" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon2.png') }}" alt=""
                                                    hspace="3">Admissions (DoA)</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="https://www.osmaniaerp.com/cstonline/" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon5.png') }}" alt=""
                                                    hspace="3">College Login</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="iqac/index.html" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon11.png') }}" alt=""
                                                    hspace="3">IQAC</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="http://www.oufro.ac.in/" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon8.png') }}" alt=""
                                                    hspace="3">Foreign Relations</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="examination-results.html"><img
                                                    src="{{ asset('Frontend/images/icon1.png') }}" alt=""
                                                    hspace="3">Examination Results</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="academic-information.html"><img
                                                    src="{{ asset('Frontend/images/icon4.png') }}" alt=""
                                                    hspace="3">Academic Info.</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="hrdc/index.html" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon12.png') }}" alt=""
                                                    hspace="3">UGC - HRDC</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="alumni/index-2.html" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon7.png') }}" alt=""
                                                    hspace="3">Alumni Association</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="statisticalcell/index.html"><img
                                                    src="{{ asset('Frontend/images/icon10.png') }}" alt=""
                                                    hspace="3">Statistical Cell</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="OUtenders.html"><img
                                                    src="{{ asset('Frontend/images/icon9.png') }}" alt=""
                                                    hspace="3">University Tenders</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- list box ends here -->





        <script type="text/javascript" src="{{ asset('Frontend/js/crawler.js') }}"></script>
        <style>
            .marquee0 {
                background: #c31e11;
                padding: 10px 0;
                margin-bottom: 10px
            }

            .marquee0 a {
                color: #fff;
                border-right: 1px solid #fff;
                padding: 0 10px
            }
        </style>
        <section id="yt_spotlight5" class="block">
            <div class="container">
                <div class="row">
                    <div id="top3" class="col-sm-12">
                        <div class="marquee" id="mycrawler">

                            <a href="foundation/index.html"><b>Osmania Foundation</b></a>
                            <a href="https://ums.telangana.gov.in/Alumni_Portal/register"><b>Attention: Now Alumni can
                                    register online for Alumni Membership of Alumni Association of Osmania University by
                                    paying the fee online.</b></a>

                            <a href="statisticalcell/pdf/OU%2020220302-NIRF2022-OVERALL.pdf"><b>NIRF-2022 Submitted
                                    Data</b></a>
                            <a href="https://www.youtube.com/channel/UC8m70fXQgw7Mw-Udk8124GA"><b>** Youtube Channel of
                                    DPIIT-IPR Chair, Osmania University.**</b></a>
                            <a href="https://osmaniaerp.com/ouconvocation/"><b>OU - 82nd Convocation</b><img
                                    src="{{ asset('Frontend/images/newanim.gif') }}"></a>
                            <a href="moocs/index.html" target="_blank"><b>SWAYAM - MOOCS</b></a>
                            <a href="https://ouipr.in/"><b>**DPIIT-IPR Chair, Osmania University.**</b></a>
                            <a href="CALL%20FOR%20SUBMISSIONS-OU%20IPR%20BLOG.pdf"><b>OU IPR FORUM</b></a>
                            <a href="alumniou.html"><b>**Honorable Chancellor Connects Alumni**</b></a>
                            <a href="cas202122.html"><b>CAS-2021 Circular Issued</b></a>

                            <a href="102nd%20AnnualReportOU/AnnualReport_102.html"><b>102nd Annual Report </b></a>
                            <a href="project-final-reports.html"><b>UGC-Major Research Project(MRP) Final
                                    Reports</b></a>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
            marqueeInit({
                uniqueid: 'mycrawler',
                style: {
                    'width': '100%',
                },
                inc: 8, //speed - pixel increment for each iteration of this marquee's movement
                mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
                moveatleast: 1,
                neutral: 150,
                savedirection: true
            });
        </script>

        <section id="yt_spotlight5" class="block">
            <div class="container">
                <div class="row">


                    <div id="top7" class="col-lg-4 col-sm-12 pr0">

                        <div class="module  k2-mega-new-main ">
                            <h3 class="modtitle">Latest News, Announcements, Circulars, etc.</h3>

                            <div class="modcontent clearfix">

                                <div id="sj_meganew_3938173111453353795" class="sj-meganew ">
                                    <!--<![endif]-->
                                    <div
                                        class="meganew-wrap  meganew-rps01-1 meganew-rps02-1 meganew-rps03-1 meganew-rps04-1">
                                        <div class="meganew-box">
                                            <div class="meganew-box-inner">

                                                <div class="meganew-items theme1">

                                                    <div class="item-other">


                                                        <ul class="otehr-link">


                                                            <li class="row">
                                                                <a href="News2022/Institute%20of%20Genetics%20Begumpet.pdf"
                                                                    class="col-xs-12" title=""><i
                                                                        class="fa fa-envelope"></i>Notification for
                                                                    Admission into DBT Sponsored M.Sc-Molecular and
                                                                    Human Genetics 2022-2023.</a>
                                                            </li>
                                                            <li class="row">
                                                                <a href="News2022/Letter%20to%20all%20the%20Principals%20of%20BBA03062022.pdf"
                                                                    class="col-xs-12" title=""><i
                                                                        class="fa fa-envelope"></i>To the Principals of
                                                                    All BBA Colleges affiliated to Osmania University to
                                                                    conduct BBA Viva-Voce exams from 12-06-2022 to
                                                                    20-06-2022, OU.</a>
                                                            </li>

                                                            <li class="row">
                                                                <a href="hcdc%20Placements2022/21%20adaequare.pdf"
                                                                    class="col-xs-12" title=""><i
                                                                        class="fa fa-envelope"></i>Openings at
                                                                    Adaequare Info Pvt Ltd for Jr. Digital Marketing
                                                                    Executives and Insight Sales, HCDC,OU.</a>
                                                            </li>
                                                            <li class="row">
                                                                <a href="hcdc%20Placements2022/20%20nspira.pdf"
                                                                    class="col-xs-12" title=""><i
                                                                        class="fa fa-envelope"></i>Openings at Nspira
                                                                    Management Services (Narayana Group) for Psychology
                                                                    Counselor, HCDC,OU.</a>
                                                            </li>
                                                            <li class="row">
                                                                <a href="News2022/Research%20centre%20notification.pdf"
                                                                    class="col-xs-12" title=""><i
                                                                        class="fa fa-envelope"></i>APPLICATION FOR
                                                                    RECOGNITION OF RESEARCH CENTRE,OU.</a>
                                                            </li>



                                                        </ul>
                                                        </marquee>
                                                        <a href="newsmore.html" class="col-xs-12" title=""
                                                            style="background: #EC3C32; color: #fff; width: auto;"><strong>More
                                                                News...</strong></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clr1"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div id="top7" class="col-lg-5 col-sm-12 pr0">

                        <div class="module  k2-mega-new-main ">
                            <h3 class="modtitle">Upcoming Events, Conferences, Seminars, Workshops, etc.</h3>
                            <div class="modcontent clearfix">

                                <div id="sj_meganew_3938173111453353795" class="sj-meganew ">
                                    <!--<![endif]-->
                                    <div
                                        class="meganew-wrap  meganew-rps01-1 meganew-rps02-1 meganew-rps03-1 meganew-rps04-1">
                                        <div class="meganew-box">
                                            <div class="meganew-box-inner">

                                                <div class="meganew-items theme1">
                                                    <div class="item-other">
                                                        <ul class="otehr-link">

                                                            <li class="row">
                                                                <a href="#" class="col-xs-2 pr0" title=""><span
                                                                        style="float: left; background:#EC3C32">13th-17th</span><span
                                                                        style="float: left; background: #f2b212">June
                                                                        2022</span></a>
                                                                <a href="EventsConf2022/WORKSHOP%20BROCHURE%20FOR%20WEBSITE.pdf"
                                                                    target="_blank" class="col-xs-10"
                                                                    title="">5-Days Hands-on Workshop on Animal Cell
                                                                    Culture Technology and its Applications Organizing
                                                                    by Dept. of Microbiology, CPMB, OU. </a>
                                                            </li>
                                                            <li class="row">
                                                                <a href="#" class="col-xs-2 pr0" title=""><span
                                                                        style="float: left; background:#EC3C32">17th-18th</span><span
                                                                        style="float: left; background: #f2b212">June
                                                                        2022</span></a>
                                                                <a href="EventsConf2022/ou%20genetics%20begumpet%20(I%20of%20Genetics)%20small%20(1).pdf"
                                                                    target="_blank" class="col-xs-10"
                                                                    title="">International Conference on Advances in
                                                                    Genetic Diagnosis in the Era of OMICS (Hybrid Mode
                                                                    Organized by Institute of Genetics and Hospital for
                                                                    Genetic Diseases, OU, Begumpet, Hyd. </a>
                                                            </li>
                                                            <li class="row">
                                                                <a href="#" class="col-xs-2 pr0" title=""><span
                                                                        style="float: left; background:#EC3C32">23rd &
                                                                        24th</span><span
                                                                        style="float: left; background: #f2b212">June
                                                                        2022</span></a>
                                                                <a href="EventsConf2022/Binder1.pdf" target="_blank"
                                                                    class="col-xs-10" title="">International
                                                                    Conference (Offline/Online) on Language and
                                                                    Literature: Cultural and Pedagogical Perspectives in
                                                                    the context of NEP 2020, OUCIS, OU, Hyd. </a>
                                                            </li>
                                                            <li class="row">
                                                                <a href="#" class="col-xs-2 pr0" title=""><span
                                                                        style="float: left; background:#EC3C32">30th-31st</span><span
                                                                        style="float: left; background: #f2b212">May
                                                                        2022</span></a>
                                                                <a href="EventsConf2022/Digital%20PCR-2022.pdf"
                                                                    target="_blank" class="col-xs-10" title="">Two
                                                                    Days Hands-On Workshop on "Nanoplate-Based Digital
                                                                    PCR" Organized by Dept. of Genetics & CFRD, OU. </a>
                                                            </li>

                                                            <a href="eventsarchives.html" class="col-xs-12"
                                                                title=""
                                                                style="background: #EC3C32; color: #fff; width: auto; margin-top:10px;"><strong>More
                                                                    Events...</strong></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="clr1"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div id="top9" class="col-lg-3 col-sm-6">
                        <div class="module  feature-teachers" style="height:468px">
                            <div class="modcontent clearfix">
                                <div class="carousel-custommer">
                                    <div id="yt-extra-carousel1" style="width:100%; height:100%"
                                        class="yt-extra-carousel carousel slide pull-center" data-ride="carousel"
                                        data-interval='false'>
                                        <div class="carousel-inner">

                                            <div class='item'>
                                                <h3 class="modtitle">Hon'bl Vice Chancellor</h3>
                                                <div class="customslider">
                                                    <div class="item-image"><img
                                                            src="{{ asset('Frontend/images/vcsir.jpg') }}" alt="" />
                                                    </div>
                                                    <div class="content-main">
                                                        <h3 class="title">Surendra Pratap Singh</h3>

                                                        <a href="adm-vc.html" target="_blank"><strong>Read
                                                                More...</strong></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='item'>
                                                <h3 class="modtitle">Hon'bl Chancellor </h3>
                                                <div class="customslider">
                                                    <div class="item-image"><a
                                                            href="RegistrarP%20Laxminarayana%20CV.pdf"
                                                            target="_blank"><img
                                                                src="{{ asset('Frontend/images/Fagu_chauhan.jpg') }}"
                                                                alt="" /></a></div>
                                                    <div class="content-main">
                                                        <h3 class="title">Shri Phagu Chauhan</h3>

                                                        <a href="adm-registrar.html" target="_blank"><strong>Read
                                                                More...</strong></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <a class="carousel-control left" href="#yt-extra-carousel1"
                                            data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="carousel-control right" href="#yt-extra-carousel1"
                                            data-slide="next"><i class="fa fa-angle-right"></i></a>
                                        <ol class="carousel-indicators">
                                            <li data-slide-to="0" data-target="#yt-extra-carousel1"></li>
                                            <li data-slide-to="1" data-target="#yt-extra-carousel1"></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="content" class="  no-left  no-right block com_content">
            <div class="container">
                <div class="row">
                    <aside id="content_left" class="col-md-3 col-sm-12 hidden"></aside>
                    <div id="content_main" class="col-sm-12">
                        <div id="system-message-container"></div>
                        <p style="display:none">Hide Main content block</p>
                    </div>
                    <aside id="content_right" class="col-md-3 col-sm-12 hidden"></aside>
                </div>
            </div>
        </section>

        <section id="yt_spotlight3" class="block">
            <div class="container">
                <div class="row">
                    <div id="top4" class="col-lg-9 col-sm-6">
                        <div class="module  k2-slider-style-one">
                            <h3 class="modtitle">Campus Colleges</h3>
                            <div class="modcontent clearfix">
                                <div id="sj_k2_slider_2843493131453353795" class="sj-k2-container-slider" style="">
                                    <div class="page-button top style">
                                        <ul class="control-button preload">
                                            <li class="preview"><i class="fa fa-chevron-left"></i></li>
                                            <li class="next"><i class="fa fa-chevron-right"></i></li>
                                        </ul>
                                    </div>

                                    <div
                                        class="slider not-js cols-6 preset01-3 preset02-3 preset03-1 preset04-1 preset05-1">
                                        <div class="vpo-wrap">
                                            <div class="vp">
                                                <div class="vpi-wrap">
                                                    <div class="item">
                                                        <div class="item-wrap">
                                                            <div class="item-img item-height">
                                                                <div class="item-img-info">
                                                                    <a href="http://arts.osmania.ac.in/"
                                                                        target="_blank"><img alt=" "
                                                                            src="{{ asset('Frontend/images/ou-arts.jpg') }}" /></a>
                                                                    <div class="over-image"></div>
                                                                </div>
                                                            </div>

                                                            <div class="item-info">
                                                                <div class="item-inner">
                                                                    <div class="item-title">
                                                                        <a href="http://arts.osmania.ac.in/" title=" "
                                                                            target="_blank">Univ. College of Arts &
                                                                            Social Sciences</a>
                                                                    </div>
                                                                    <div class="item-content">
                                                                        <div class="item-des">The Arts College
                                                                            was inaugurated on August 28, 1919. It was
                                                                            temporarily housed in eight rented buildings
                                                                            in Gunfoundry area with 25 teachers and 225
                                                                            students in the Interm ediate...
                                                                            <!-- first year class.-->
                                                                        </div>
                                                                        <div class="item-read">
                                                                            <a href="http://arts.osmania.ac.in/"
                                                                                title=" " target="_blank">
                                                                                <i class="fa fa-check"></i><span>Read
                                                                                    more</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="item-wrap">
                                                            <div class="item-img item-height">
                                                                <div class="item-img-info">
                                                                    <a href="http://www.uceou.edu/" target="_blank"><img
                                                                            alt="Fazen mipa nace rumas "
                                                                            src="{{ asset('Frontend/images/ou-engg.jpg') }}" /></a>
                                                                    <div class="over-image"></div>
                                                                </div>
                                                            </div>

                                                            <div class="item-info">
                                                                <div class="item-inner">
                                                                    <div class="item-title">
                                                                        <a href="http://www.uceou.edu/"
                                                                            title="Fazen mipa nace rumas "
                                                                            target="_blank">University College of
                                                                            Engineering</a>
                                                                    </div>
                                                                    <div class="item-content">
                                                                        <div class="item-des">The University
                                                                            College of Engineering (UCE) has the
                                                                            distinction of being the oldest and the
                                                                            biggest among the Engineering Colleges of
                                                                            the combined State of Andhra Pradesh.</div>
                                                                        <div class="item-read">
                                                                            <a href="http://www.uceou.edu/"
                                                                                title="Fazen mipa nace rumas "
                                                                                target="_blank">
                                                                                <i class="fa fa-check"></i><span>Read
                                                                                    more</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="item-wrap">
                                                            <div class="item-img item-height">
                                                                <div class="item-img-info">
                                                                    <a href="http://www.ouct.ac.in/"
                                                                        target="_blank"><img
                                                                            alt="Sazen mipan guka muten "
                                                                            src="{{ asset('Frontend/images/ou-tech.jpg') }}" /></a>
                                                                    <div class="over-image"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="item-inner">
                                                                    <div class="item-title"><a
                                                                            href="http://www.ouct.ac.in/"
                                                                            title="Sazen mipan guka muten "
                                                                            target="_blank">University College of
                                                                            Technology</a></div>
                                                                    <div class="item-content">
                                                                        <div class="item-des">The University
                                                                            College of Technology is one of the premier
                                                                            and the oldest colleges offering Chemical
                                                                            Engineering and Chemical Technology
                                                                            education in the country.</div>
                                                                        <div class="item-read">
                                                                            <a href="http://www.ouct.ac.in/"
                                                                                title="Sazen mipan guka muten "
                                                                                target="_blank"><i
                                                                                    class="fa fa-check"></i><span>Read
                                                                                    more</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="item-wrap">
                                                            <div class="item-img item-height">
                                                                <div class="item-img-info">
                                                                    <a href="uccbm/index.html" target="_blank"><img
                                                                            alt="Sazen mipan guka muten "
                                                                            src="{{ asset('Frontend/images/ou-cbm.jpg') }}" /></a>
                                                                    <div class="over-image"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="item-inner">
                                                                    <div class="item-title"><a
                                                                            href="uccbm/index.html"
                                                                            title="Sazen mipan guka muten "
                                                                            target="_blank">College of Commerce &amp; B.
                                                                            Management</a></div>
                                                                    <div class="item-content">
                                                                        <div class="item-des">The UCC & BM is one
                                                                            of the prime colleges in the Osmania
                                                                            University, located on the main campus,
                                                                            playing a pivotal Role in serving the
                                                                            society by shaping the careers of the
                                                                            students...
                                                                            <!-- keeping in view the changing socio-economic environment-->
                                                                        </div>
                                                                        <div class="item-read">
                                                                            <a href="uccbm/index.html"
                                                                                title="Sazen mipan guka muten "
                                                                                target="_blank"><i
                                                                                    class="fa fa-check"></i><span>Read
                                                                                    more</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="item-wrap">
                                                            <div class="item-img item-height">
                                                                <div class="item-img-info">
                                                                    <a href="ucedu/index.html" target="_blank"><img
                                                                            alt="Sazen mipan guka muten "
                                                                            src="{{ asset('Frontend/images/ou-adv.jpg') }}" /></a>
                                                                    <div class="over-image"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="item-inner">
                                                                    <div class="item-title"><a
                                                                            href="ucedu/index.html"
                                                                            title="Sazen mipan guka muten "
                                                                            target="_blank">University College of
                                                                            Education</a></div>
                                                                    <div class="item-content">
                                                                        <div class="item-des">The Osmania
                                                                            University, established in 1918, is the
                                                                            seventh oldest in the country, third oldest
                                                                            in South India and the first to be
                                                                            established in the princely state of
                                                                            Hyderabad.</div>
                                                                        <div class="item-read">
                                                                            <a href="ucedu/index.html"
                                                                                title="Sazen mipan guka muten "
                                                                                target="_blank"><i
                                                                                    class="fa fa-check"></i><span>Read
                                                                                    more</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="item-wrap">
                                                            <div class="item-img item-height">
                                                                <div class="item-img-info">
                                                                    <a href="lawcollege/index.html" target="_blank"><img
                                                                            alt="Sazen mipan guka muten "
                                                                            src="{{ asset('Frontend/images/ou-law.jpg') }}" /></a>
                                                                    <div class="over-image"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="item-inner">
                                                                    <div class="item-title"><a
                                                                            href="lawcollege/index.html"
                                                                            title="Sazen mipan guka muten "
                                                                            target="_blank">University College of
                                                                            Law</a></div>
                                                                    <div class="item-content">
                                                                        <div class="item-des">The Faculty of Law,
                                                                            Osmania University has a glorious history of
                                                                            more than 100 years. The "Law class" was
                                                                            opened in the year 1899 to give instruction
                                                                            in law to students desirous of...
                                                                            <!-- joining legal profession along with "Judicial Test" classes for Judicial Officers.-->
                                                                        </div>
                                                                        <div class="item-read">
                                                                            <a href="lawcollege/index.html"
                                                                                title="Sazen mipan guka muten "
                                                                                target="_blank"><i
                                                                                    class="fa fa-check"></i><span>Read
                                                                                    more</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="item-wrap">
                                                            <div class="item-img item-height">
                                                                <div class="item-img-info">
                                                                    <a href="sciencecollege/index.html"
                                                                        target="_blank"><img
                                                                            alt="Sazen mipan guka muten "
                                                                            src="images/ou-science.jpg" /></a>
                                                                    <div class="over-image"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="item-inner">
                                                                    <div class="item-title"><a
                                                                            href="sciencecollege/index.html"
                                                                            title="Sazen mipan guka muten "
                                                                            target="_blank">University College of
                                                                            Science</a></div>
                                                                    <div class="item-content">
                                                                        <div class="item-des">The University
                                                                            College of Science has a strong tradition of
                                                                            research in both basic and applied sciences.
                                                                            Even though the college itself was
                                                                            established in 1918, the work carried out
                                                                            in...
                                                                            <!--  Astronomy at the Nizamia Observatory dates back to 1908.-->
                                                                        </div>
                                                                        <div class="item-read">
                                                                            <a href="sciencecollege/index.html"
                                                                                title="Sazen mipan guka muten "
                                                                                target="_blank"><i
                                                                                    class="fa fa-check"></i><span>Read
                                                                                    more</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //<![CDATA[
                                    jQuery(document).ready(function($) {
                                        ;
                                        (function(element) {
                                            var $element = $(element);
                                            var $slider = $('.slider', $element)
                                            $('.slider', $element).responsiver({
                                                interval: 0,
                                                speed: 1000,
                                                start: 0,
                                                step: 1,
                                                circular: true,
                                                preload: true,
                                                fx: 'slide',
                                                pause: 'hover',
                                                control: {
                                                    prev: '#sj_k2_slider_2843493131453353795 .control-button li[class="preview"]',
                                                    next: '#sj_k2_slider_2843493131453353795 .control-button li[class="next"]'
                                                },
                                                getColumns: function(element) {
                                                    var match = $(element).attr('class').match(/cols-(\d+)/);
                                                    if (match[1]) {
                                                        var column = parseInt(match[1]);
                                                    } else {
                                                        var column = 1;
                                                    }
                                                    if (!column) column = 1;
                                                    return column;
                                                }
                                            });
                                            $slider.touchSwipeLeft(function() {
                                                $slider.responsiver('next');
                                            });
                                            $slider.touchSwipeRight(function() {
                                                $slider.responsiver('prev');
                                            });

                                            $('.control-button', $element).removeClass('preload');
                                        })('#sj_k2_slider_2843493131453353795');
                                    });
                                    //]]>
                                </script>
                            </div>
                        </div>
                    </div>

                    <div id="top4" class="col-lg-3 col-sm-6">
                        <div class="module">
                            <h3 class="modtitle">Useful Links</h3>
                            <div class="acd-item1">
                                <ul class="line items-row1">
                                    <li><a href="examination-results.html">Examination Results</a></li>
                                    <li><a href="https://www.ouexams.in/examnotifications">Examination Time Tables</a>
                                    </li>
                                    <li><a href="https://www.ouexams.in/press">Press Notes</a></li>
                                    <li><a href="oulwebpage/About%20Library.html" target="_blank">University Library</a>
                                    </li>
                                    <li><a href="statisticalcell/index.html" target="_blank">Statistical Cell</a></li>
                                    <li><a href="admission-notifications.html">Admission Notifications</a></li>
                                    <li><a href="application-forms.html">Download Forms</a></li>
                                    <li><a href="cdcNEW/index.html" target="_blank">CDC</a></li>
                                    <li><a href="http://uceou.edu/CELT/index.php" target="_blank">CELT-OU</a></li>

                                    <li><a href="https://ums.telangana.gov.in/STAFF/login" target="_blank">Staff
                                            Login</a></li>
                                    <li><a href="http://14.139.82.53/otherthen-oucet/home.html" target="_blank">Hostel
                                            Login</a></li>
                                    <li><a href="http://mail.osmania.ac.in/src/login.php" target="_blank">University
                                            e-mail</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('Frontend.includes.footertop')

        @include('Frontend.includes.footer')
    </div>


    @include('Frontend.includes.foot')

</body>

</html>
