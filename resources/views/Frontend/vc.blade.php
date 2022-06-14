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
							<div class="images-slideshow"><img alt="" src="{{asset('Frontend/images/internal%20banners/banner120.jpg')}}"/></div>
							<div class="item-content">
								<div class="item-content-inner">
									<h5 class="item-title">
										<a href="#" title="" >Home</a> | <a href="#" title="" >Origin and History</a>
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
 

@endsection