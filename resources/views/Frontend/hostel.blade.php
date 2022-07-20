@extends('Frontend.includes.layout')
@section('content')
    <!-- slider starts here -->
    <section id="yt_spotlight1" class="block">
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
                                                href="#" style="color:#7C0000" title="">Hostel</a>
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
    <div class="container-fluid"
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;">
        <p class="text-center">Hostel</p>
    </div>
    <!-- slider ends here -->

    <section class="container" style="margin-top: 50px;margin-bottom:50px;">
        <p style="text-align: justify;">The University has three Boys and one Girls Hostel to provide accommodation to Boys
            and Girls students enrolled in University Departments. The Hostel facilities are being face lifted an improved
            every year with an aim to provide a feeling of home to the hostel inmates. Support facilitates as a mess,
            medical care centre with day &amp; night services, daily news papers and T.V. are provided in each and every
            Hostel. Each Hostel has individual recreation room with television, Indoor and Outdoor games facilities like
            Badminton, Table Tennis, Carom and Chess. Hostel Superintendents and Wardens are appointed for better management
            of Hostel affairs.</p>
        <p>The University has following Hostels for Boys and Girls:</p>

        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class=" col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-sm-5 col-xs-12">
                                    <h4 class="title ">Hostel <span>Data</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Name</th>
                                        <th>Total Seat</th>
                                        <th>Vacant Seat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Gandak</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Koshi</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Bagmati</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Kamla (Archana)</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <div class="container">
        <div class="row" style="margin-bottom: 40px;" >
            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Hostel Warden
                    </div>
                    <img src="{{asset('Frontend/images/user.png')}}" style="height: 300px;width:400px;">
                    <div class="box-content">
                        <h3 class="title">Prof. K K Jha</h3>
                        <span class="post">9470644735 <br/> 9431415528</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Hostel Superintendent,Gandak, Koshi,Bagmati
                    </div>
                    <img src="{{asset('Frontend/images/user.png')}}" style="height: 300px;width:400px;">
                    <div class="box-content">
                        <h3 class="title">Prof. J N Jha </h3>
                        <span class="post">9934241993 <br/> 7004367982</span>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    <div class="box-top">
                        Hostel Superintendent, Kamla (Archana)
                    </div>
                    <img src="{{asset('Frontend/images/user.png')}}" style="height: 300px;width:400px;">
                    <div class="box-content">
                        <h3 class="title">Dr. L. K. Singh ‘Kabya’</h3>
                        <span class="post">+91 9470849666</span>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
