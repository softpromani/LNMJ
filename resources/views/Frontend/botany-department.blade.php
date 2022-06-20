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
                                                href="#" style="color:#7C0000" title="">Department of Botany</a>
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
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;margin-bottom:40px;">
        <p class="text-center">PG Department of Botany</p>
    </div>
    <!-- slider ends here -->


    <div class="container">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-4 col-sm-4">
                <div class="pic">
                    <img src="{{ asset('Frontend/images/department/botany.png') }}">

                </div>
            </div>
            <main class="col-md-8 col-sm-8">
                <div class="col-md-12" id="content_main">
                    <h2><strong>About the Department</strong></h2>
                    <p style="text-align: justify;font-size:13px;">The department has two laboratories possessing diverse
                        forms of Algae (Terrestrial and acquatic algae from freshwater and marine habitats) Bryophytes,
                        pteridophytes, Gymnosperms and Angiosperms. Different classes of Fungi and several fungal disease
                        materials are available for study. The laboratory and instrumentation facilities in the department
                        include microscopy with Digital Research Microscope, and Light Microscopes, Gel Electrophoretic
                        Units with accessories for DNA, RNA and Protein Analysis, PCR Thermocycler, Hot Air Oven, BOD
                        incubator, Laminar Air Flow, Autoclave unit, Deep Freezer, Autoclave Vertical, Gas Sawpling
                        kit,Respirable Dust sample, Hot Plate, Gas Chromatograph, Double Beam Spectrophotometer,
                        Microprocessor Flame Photometer, Refrigerated Centrifuge, Toxin free water Purification system,
                        Elecrode Based Digital PH Meter, Photosynthetic analyser, Electronic Soil Sawpling Kit and Water
                        sawpling Kit. The department library fulfils the requirement of the faculty members and students.
                    </p>
                    <p style="text-align: justify;font-size:13px;">The faculty members of the department have contributed to
                        the scientific world through scientific research publications. The faculty members of the department
                        have successfully conducted 14 Major Research Projects. One International Symposium and two National
                        symposium were organized earlier.</p>
                </div>
            </main>
        </div>

        <div class="row d-flex d-md-block flex-nowrap wrapper" style="margin-top: 40px;">
            <main class="col-md-8 col-sm-8">
                <div class="col-md-12" id="content_main">
                    <p style="text-align: justify;font-size:13px;">The department has two laboratories possessing diverse
                        forms of Algae (Terrestrial and acquatic algae from freshwater and marine habitats) Bryophytes,
                        pteridophytes, Gymnosperms and Angiosperms. Different classes of Fungi and several fungal disease
                        materials are available for study. The laboratory and instrumentation facilities in the department
                        include microscopy with Digital Research Microscope, and Light Microscopes, Gel Electrophoretic
                        Units with accessories for DNA, RNA and Protein Analysis, PCR Thermocycler, Hot Air Oven, BOD
                        incubator, Laminar Air Flow, Autoclave unit, Deep Freezer, Autoclave Vertical, Gas Sawpling
                        kit,Respirable Dust sample, Hot Plate, Gas Chromatograph, Double Beam Spectrophotometer,
                        Microprocessor Flame Photometer, Refrigerated Centrifuge, Toxin free water Purification system,
                        Elecrode Based Digital PH Meter, Photosynthetic analyser, Electronic Soil Sawpling Kit and Water
                        sawpling Kit. The department library fulfils the requirement of the faculty members and students.
                    </p>
                    <p style="text-align: justify;font-size:13px;">The faculty members of the department have contributed to
                        the scientific world through scientific research publications. The faculty members of the department
                        have successfully conducted 14 Major Research Projects. One International Symposium and two National
                        symposium were organized earlier.
                    </p>
                </div>
            </main>
            <div class="col-md-4 col-sm-4">
                <div class="pic">
                    <img src="{{ asset('Frontend/images/department/botany.png') }}">

                </div>
            </div>
        </div>

        <div class="row d-flex d-md-block flex-nowrap wrapper" style="margin-top: 40px;">
            <main class="col-md-8 col-sm-8">
                <div class="col-md-12" id="content_main">
                    <div class="row d-flex d-md-block flex-nowrap wrapper" style="margin-top: 40px;">
                        <main class="col-md-8 col-sm-8">
                            <div class="col-md-12" id="content_main">
                                <h2> Former HoDs</h2>
                                <ol style="text-align: justify;font-size:13px;">
                                    <li>Late Q.A. Haque</li>
                                    <li>A.K. Mishra</li>
                                    <li>J.S. Prasad</li>
                                    <li>Late T.K.S. Singh</li>
                                    <li>A.B. Prasad</li>
                                    <li>Jaykar Jha</li>
                                    <li>V.P. Singh</li>
                                    <li>C.N. Jha</li>
                                    <li>Prof. Abhay Kumar</li>
                                </ol>

                            </div>
                        </main>
                    </div>

                </div>
            </main>
        </div>

        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class=" col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-sm-5 col-xs-12">
                                    <h4 class="title">Faculty <span>Members</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Mobile</th>
                                        <th>Email Id</th>
                                        <th>Photo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Sahnaz Jamil</td>
                                        <td>Professor & Head</td>
                                        <td>8544513309</td>
                                        <td>hodbotany@lnmu.ac.in</td>
                                        <td> <div class="user_icon">
                                            <img src="{{asset('Frontend/images/faculty/sahnaj_head.jpg')}}" alt="">
                                        </div></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. R. N. Jha</td>
                                        <td>Associate Professor</td>
                                        <td>8084827379</td>
                                        <td>ram.jha614@gmail.com</td>
                                        <td> <div class="user_icon">
                                            <img src="{{asset('Frontend/images/faculty/rn_prof.jpg')}}" alt="">
                                        </div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
