<!DOCTYPE html>
<html>

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

                        <div class="module  feature-teachers" style="height:468px; padding:0px">
                            <div class="modcontent clearfix">
                                <div class="carousel-custommer">
                                    <div id="yt-extra-carousel1" style="width:100%; height:100%"
                                        class="yt-extra-carousel carousel slide pull-center" data-ride="carousel"
                                        data-interval='false'>
                                        <div class="carousel-inner">

                                            <div class='item'>
                                                <h3 class="modtitle">Hon'bl Chancellor </h3>
                                                <div class="customslider">
                                                    <div class="item-image"><a
                                                            href="RegistrarP%20Laxminarayana%20CV.pdf"
                                                            target="_blank"><img
                                                                src="{{ asset('Frontend/images/Fagu_chauhan.jpg') }}"
                                                                alt="" /></a></div>
                                                    <div class="content-main">
                                                        <h3 class="title"
                                                            style='color:#7C0000;font-weight:bold'>Shri Phagu Chauhan
                                                        </h3>
                                                        <br />
                                                        <a href="https://governor.bih.nic.in/" target="_blank"><strong
                                                                style="color:black;">Read
                                                                More</strong></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='item'>
                                                <h3 class="modtitle">Hon'bl Vice Chancellor</h3>
                                                <div class="customslider">
                                                    <div class="item-image"><img
                                                            src="{{ asset('Frontend/images/vcsir.jpg') }}" alt="" />
                                                    </div>
                                                    <div class="content-main">
                                                        <h3 class="title"
                                                            style='color:#7C0000;font-weight:bold'>Prof. Surendra Pratap
                                                            Singh</h3>
                                                        <br />
                                                        <a href="{{ route('adm.vc') }}" target="_blank"><strong
                                                                style="color:black;">Read
                                                                More...</strong></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='item'>
                                                <h3 class="modtitle">Registrar </h3>
                                                <div class="customslider">
                                                    <div class="item-image"><a
                                                            href="RegistrarP%20Laxminarayana%20CV.pdf"
                                                            target="_blank"><img
                                                                src="{{ asset('Frontend/images/banners/registrarphoto.jpg') }}"
                                                                alt="" /></a></div>
                                                    <div class="content-main">
                                                        <h3 class="title"
                                                            style='color:#7C0000;font-weight:bold'>Prof. Mushtaque Ahmad
                                                        </h3>

                                                        <a href="adm-registrar.html" target="_blank"><strong
                                                                style="color:black;">Read
                                                                More...</strong></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <a class="carousel-control left" href="#yt-extra-carousel1" data-slide="prev"><i
                                                class="fa fa-angle-left"></i></a>
                                        <a class="carousel-control right" href="#yt-extra-carousel1"
                                            data-slide="next"><i class="fa fa-angle-right"></i></a>
                                        <ol class="carousel-indicators">
                                            <li data-slide-to="0" data-target="#yt-extra-carousel1"></li>
                                            <li data-slide-to="1" data-target="#yt-extra-carousel1"></li>
                                            <li data-slide-to="2" data-target="#yt-extra-carousel1"></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                            <a href="#" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon6.png') }}" alt=""
                                                    hspace="3">Examination</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="#" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon3.png') }}" alt=""
                                                    hspace="3">Self Finance</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="#" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon2.png') }}" alt=""
                                                    hspace="3">Admissions </a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="#" target="_blank" style="font-size:11px;"><img
                                                    src="{{ asset('Frontend/images/icon5.png') }}" alt=""
                                                    hspace="3">E-Learning Resources</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="{{ route('photogallery') }}" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon11.png') }}" alt=""
                                                    hspace="3">Photo Gallery</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="#" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon8.png') }}" alt=""
                                                    hspace="3">Grievance Redressal</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="#"><img src="{{ asset('Frontend/images/icon1.png') }}" alt=""
                                                    hspace="3">Examination Results</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="#"><img src="{{ asset('Frontend/images/icon4.png') }}" alt=""
                                                    hspace="3">AQAR </a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="#" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon12.png') }}" alt=""
                                                    hspace="3">Library</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="#" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon7.png') }}" alt=""
                                                    hspace="3">Alumni Association</a>
                                        </li>
                                        {{-- <li class="" style="width: -20px;">
                                            <a href="statisticalcell/index.html"><img
                                                    src="{{ asset('Frontend/images/icon10.png') }}" alt=""
                                                    hspace="3">Statistical Cell</a>
                                        </li> --}}
                                        <li class="" style="width: -20px;">
                                            <a href="#"><img src="{{ asset('Frontend/images/icon9.png') }}" alt=""
                                                    hspace="3">University Tenders</a>
                                        </li>

                                        <li class="" style="width: -20px;">
                                            <a href="#"><img src="{{ asset('Frontend/images/icon9.png') }}" alt=""
                                                    hspace="3">RTI ACT</a>
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
                background: #7C0000;
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
                        <div class="marquee" id="mycrawler" style="width:100%;">

                            <a href="#"><b>Example News</b></a>
                            <a href="#"><b>Example News</b></a>
                            <a href="#"><b>Example News</b></a>



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

                    <div id="top9" class="col-lg-3 col-sm-6  slideLft1">
                        <ul>
                            <li><a href="#" target="_blank">Online Portal

                                    <img src="http://newweb.lnmudde.com/Frontend/images/newanim.gif"></a></li>
                            <li><a href="#" target="_blank">Helpline For University Student</a></li>
                            <li><a href="#" target="_blank">Awards/Recognition</a></li>
                            <li><a href="#" target="_blank">NIRF</a></li>

                            <li><a href="#" target="_blank">Surprise Visit Report</a></li>
                            <li><a href="#" target="_blank">Sport Calendar</a></li>
                            <li><a href="#">Careers &amp; Fellowships</a></li>

                            <li><a href="#" target="_blank">Features</a></li>
                            <li><a href="#" target="_blank">RTI ACT</a></li>
                            <li><a href="#">Careers &amp; Services</a></li>
                        </ul>
                    </div>

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
                                                                <a href="#" class="col-xs-12" title=""><i
                                                                        class="fa fa-envelope"></i>BA BCOM MA MCOM
                                                                    RESULT FOR JUNE 2021 (29.05.2022).</a>
                                                            </li>
                                                            <li class="row">
                                                                <a href="#" class="col-xs-12" title=""><i
                                                                        class="fa fa-envelope"></i>Notice Regarding
                                                                    Grade Card Distribution For June 2021</a>
                                                            </li>

                                                            <li class="row">
                                                                <a href="#" class="col-xs-12" title=""><i
                                                                        class="fa fa-envelope"></i>Notice Regarding
                                                                    Grade Card Distribution For June 2021</a>
                                                            </li>

                                                            <li class="row">
                                                                <a href="#" class="col-xs-12" title=""><i
                                                                        class="fa fa-envelope"></i>Notice Regarding
                                                                    Grade Card Distribution For June 2021</a>
                                                            </li>

                                                            <li class="row">
                                                                <a href="#" class="col-xs-12" title=""><i
                                                                        class="fa fa-envelope"></i>Apply Examination
                                                                    Form June 2022 </a>
                                                            </li>
                                                            <li class="row">
                                                                <a href="#" class="col-xs-12" title=""><i
                                                                        class="fa fa-envelope"></i>Regarding Notice
                                                                    Examination Form June 2022 </a>
                                                            </li>
                                                            <li class="row">
                                                                <a href="#" class="col-xs-12" title=""><i
                                                                        class="fa fa-envelope"></i>MSC PRACTICAL
                                                                    SCHEDULE FOR DEC 2021 PREVIOUS YEAR </a>
                                                            </li>
                                                            <li class="row">
                                                                <a href="#" class="col-xs-12" title=""><i
                                                                        class="fa fa-envelope"></i>MSC PRACTICAL
                                                                    SCHEDULE FOR DEC 2021 PREVIOUS YEAR </a>
                                                            </li>
                                                        </ul>
                                                        </marquee>
                                                        <a href="#" class="col-xs-12" title=""
                                                            style="background: #7C0000; color: #fff; width: auto;"><strong>More
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
                                                                        style="float: left; background:#7C0000">13th-17th</span><span
                                                                        style="float: left; background: #00aeef">June
                                                                        2022</span></a>
                                                                <a href="#" target="_blank" class="col-xs-10"
                                                                    title="">Event is going to be orgnised </a>
                                                            </li>
                                                            <li class="row">
                                                                <a href="#" class="col-xs-2 pr0" title=""><span
                                                                        style="float: left; background:#7C0000">17th-18th</span><span
                                                                        style="float: left; background: #00aeef">June
                                                                        2022</span></a>
                                                                <a href="#" target="_blank" class="col-xs-10"
                                                                    title="">Event will reschedule on dated Please Fill
                                                                    happy. </a>
                                                            </li>
                                                            <li class="row">
                                                                <a href="#" class="col-xs-2 pr0" title=""><span
                                                                        style="float: left; background:#7C0000">23rd-
                                                                        24th</span><span
                                                                        style="float: left; background: #00aeef">June
                                                                        2022</span></a>
                                                                <a href="#" target="_blank" class="col-xs-10"
                                                                    title="">This Event is orgnised by DDE LNMU on
                                                                    ocation of holi. Hon'ble minister is our event chief
                                                                    minister.
                                                                </a>
                                                            </li>
                                                            <li class="row">
                                                                <a href="#" class="col-xs-2 pr0" title=""><span
                                                                        style="float: left; background:#7C0000">30th-31st</span><span
                                                                        style="float: left; background: #00aeef">May
                                                                        2022</span></a>
                                                                <a href="#" target="_blank" class="col-xs-10"
                                                                    title="">Two
                                                                    Days Hands-On Workshop on "Nanoplate-Based Digital
                                                                    PCR" Organized by Dept. of Genetics & CFRD. </a>
                                                            </li>
                                                            <li class="row">
                                                                <a href="#" class="col-xs-2 pr0" title=""><span
                                                                        style="float: left; background:#7C0000">23rd-
                                                                        24th</span><span
                                                                        style="float: left; background: #00aeef">June
                                                                        2022</span></a>
                                                                <a href="#" target="_blank" class="col-xs-10"
                                                                    title="">IT Cell of DDE LNMU is going to present
                                                                    Cyber Security Workshop.
                                                                </a>
                                                            </li>


                                                            <a href="#" class="col-xs-12" title=""
                                                                style="background: #7C0000; color: #fff; width: auto; margin-top:10px;"><strong>More
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

        <section id="yt_spotlight3" class="block " style="margin-bottom:50px;">
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
                                                                    <a href="#" target="_blank"><img alt=" "
                                                                            src="{{ asset('Frontend/images/banners/06.jpg') }}" /></a>
                                                                    <div class="over-image"></div>
                                                                </div>
                                                            </div>

                                                            <div class="item-info">
                                                                <div class="item-inner">
                                                                    <div class="item-title">
                                                                        <a href="#" title=" " target="_blank">Univ. PG
                                                                            Dep. of Arts &
                                                                            Social Sciences</a>
                                                                    </div>
                                                                    <div class="item-content">
                                                                        <div class="item-des">The Arts College
                                                                            was inaugurated on Mont xx YYYY. It was
                                                                            temporarily housed in eight rented buildings
                                                                            in Gunfoundry area with xx teachers and xxx
                                                                            students in the Interm ediate...
                                                                            <!-- first year class.-->
                                                                        </div>
                                                                        <div class="item-read">
                                                                            <a href="#" title=" " target="_blank">
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
                                                                    <a href="#" target="_blank"><img
                                                                            alt="Fazen mipa nace rumas "
                                                                            src="{{ asset('Frontend/images/banners/005.jpg') }}" /></a>
                                                                    <div class="over-image"></div>
                                                                </div>
                                                            </div>

                                                            <div class="item-info">
                                                                <div class="item-inner">
                                                                    <div class="item-title">
                                                                        <a href="#" title="Fazen mipa nace rumas "
                                                                            target="_blank">University PG Department of
                                                                            Science</a>
                                                                    </div>
                                                                    <div class="item-content">
                                                                        <div class="item-des">University PG
                                                                            Department of Science
                                                                            the
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
                                                                    <a href="#" target="_blank"><img
                                                                            alt="Sazen mipan guka muten "
                                                                            src="{{ asset('Frontend/images/banners/mba.jfif') }}"
                                                                            style="height:175px;" /></a>
                                                                    <div class="over-image"></div>
                                                                </div>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="item-inner">
                                                                    <div class="item-title"><a href="#"
                                                                            title="Sazen mipan guka muten "
                                                                            target="_blank">Univ. PG Dep. of Commerce &
                                                                            Management</a></div>
                                                                    <div class="item-content">
                                                                        <div class="item-des">University PG
                                                                            Department of Commerce & Management
                                                                            University PG Department of Commerce &
                                                                            Management
                                                                            .</div>
                                                                        <div class="item-read">
                                                                            <a href="#" title="Sazen mipan guka muten "
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
                                    <li><a href="#">Examination Results</a></li>
                                    <li><a href="#">Examination Time Tables</a>
                                    </li>
                                    <li><a href="#">Press Notes</a></li>
                                    <li><a href="#" target="_blank">University Library</a>
                                    </li>

                                    <li><a href="#">Admission Notifications</a></li>
                                    <li><a href="#">Download Forms 1</a></li>
                                    <li><a href="#">Download Forms 2</a></li>
                                    <li><a href="#">Download Forms 3</a></li>
                                    <li><a href="#">Grievance</a></li>



                                    <li><a href="#" target="_blank">University
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
