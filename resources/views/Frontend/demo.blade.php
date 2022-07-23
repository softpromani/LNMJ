<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>LNMU</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="{{asset('demo/css/default.css')}}">
	<link rel="stylesheet" href="{{asset('demo/css/layout.css')}}">
   <link rel="stylesheet" href="{{asset('demo/css/media-queries.css')}}">
   <link rel="icon" type="image/x-icon" href="{{ asset('Frontend/images/icon/logo.jpg') }}" />
   <!-- Script
   ================================================== -->
	<script src="{{asset('demo/js/modernizr.js')}}"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

	<div id="preloader">
      <div id="status">
         <img src="{{asset('demo/images/preloader.gif')}}" height="64" width="64" alt="">
      </div>
   </div>

   <!-- Intro Section
   ================================================== -->
   <section id="intro">

   	<header class="row">

			<div id="logo" >
				<a href="#" >
                 <img src="{{ asset('Frontend/images/icon/logo.jpg') }}" alt="Zoon">
              </a>
			</div>

            <a href="https://lnmu.ac.in:2096/" style="color: white;"> Administrative Webmail Login</a>


   	</header> <!-- Header End -->

   	<div  id="main" class="row">

	   	<div class="twelve columns">

	   		<h1>We are currently working on something awesome. Stay tuned!</h1>


               <a href="http://lnmuniversity.com/LNMU_ERP/UserLogin.aspx" style="color: white;"> "Examination form for part 3 session 2019-22"</a>


         </div>

      </div> <!-- main end -->

   </section> <!-- end intro section -->

   <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 900px; width: 1263px; z-index: -999998; position: absolute;">
    <img src="{{asset('demo/images/header-background.jpg')}}" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1349.73px; height: 900px; max-height: none; max-width: none; z-index: -999999; left: -43.365px; top: 0px;"></div>
   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="copyright">
               <li>&copy; Copyright 2022 LNMU</li>
               <li>Developed by <a title="Styleshout" href="#">IT  CELL LNMU</a></li>
            </ul>

         </div>

      </div>

      <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#intro"><i class="icon-up-open"></i></a></div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="{{asset('demo/js/jquery-1.10.2.min.js')}}"><\/script>')</script>
   <script type="text/javascript" src="{{asset('demo/js/jquery-migrate-1.2.1.min.js')}}"></script>

	<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
   <script src="{{asset('demo/js/gmaps.js')}}"></script>
   <script src="{{asset('demo/js/waypoints.js')}}"></script>
   <script src="{{asset('demo/js/jquery.countdown.js')}}"></script>
   <script src="{{asset('demo/js/jquery.placeholder.js')}}"></script>
   <script src="{{asset('demo/js/backstretch.js')}}"></script>
   <script src="{{asset('demo/js/init.js')}}"></script>

</body>

</html>
