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
                        {{-- <div class="text-effect"
                            style=" z-index:99;position:absolute;margin-top:6%;margin-left:40%;">
                            <span>IQAC</span>
                        </div> --}}

                        <div class="slickslider-items bg-style1">
                            <div class="slickslider-item item clearfix active">
                                <div class="images-slideshow"><img alt=""
                                        src="{{ asset('Frontend/images/iqac.jpg') }}" style="height: 250px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-3 float-left col-1 pl-0 pr-0  width" id="sidebar">
                <div class="list-group border-0 text-left text-md-left">
                    <a href="#" class="list-group-item d-inline-block collapsed sidenav "> <span class="d-none d-md-inline">Introduction</span> </a>
                    <a href="#" class="list-group-item d-inline-block collapsed" > <span class="d-none d-md-inline">IQAC Committee</span> </a>
                    <a href="#" class="list-group-item d-inline-block collapsed"> <span class="d-none d-md-inline">Vision, Mission & Strategies
                    </span> </a>
                    <a href="#" class="list-group-item d-inline-block collapsed" > <span class="d-none d-md-inline">Climate Action Plan</span> </a>
                    <a href="#" class="list-group-item d-inline-block collapsed" > <span class="d-none d-md-inline">Sustainability Cell</span> </a>
                    <a href="#" class="list-group-item d-inline-block collapsed" > <span class="d-none d-md-inline">IQAC Committee</span> </a>
                    <a href="#menu1" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false" > <span class="d-none d-md-inline">National Ranking</span> </a>
                    <div class="collapse" id="menu1" data-parent="#sidebar"  >
                        <a href="#menu1sub1" class="list-group-item">NIRF Ranking </a>
                        <a href="#menu1sub1" class="list-group-item">NIRF 2022 Data </a>
                    </div>
                    <a href="#menu2" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false" > <span class="d-none d-md-inline">National Ranking</span> </a>
                    <div class="collapse" id="menu2" data-parent="#sidebar"  >
                        <a href="#menu1sub1" class="list-group-item">NIRF Ranking </a>
                        <a href="#menu1sub1" class="list-group-item">NIRF 2022 Data </a>
                    </div>
                    <a href="#menu3" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false" > <span class="d-none d-md-inline">NAAC Accreditation</span> </a>
                    <div class="collapse" id="menu3" data-parent="#sidebar"  >
                        <a href="#menu1sub1" class="list-group-item">SSR 2020 </a>
                        <a href="#menu1sub1" class="list-group-item">AQAR </a>
                        <a href="#menu1sub1" class="list-group-item">Academic & Administrative Audit </a>
                        <a href="#menu1sub1" class="list-group-item">NAAC Certificate Cycle-I </a>
                        <a href="#menu1sub1" class="list-group-item">Photo of NAAC peer team visit -2015 </a>
                        <a href="#menu1sub1" class="list-group-item">Photo of NAAC peer team visit -2021 </a>
                        <a href="#menu1sub1" class="list-group-item">NAAC PPT </a>
                    </div>
                    <a href="#" class="list-group-item d-inline-block collapsed sidenav "> <span class="d-none d-md-inline">Feedback</span> </a>
                    <a href="#" class="list-group-item d-inline-block collapsed" > <span class="d-none d-md-inline">IQAC Events</span> </a>
                    <a href="#" class="list-group-item d-inline-block collapsed" > <span class="d-none d-md-inline">Reports</span> </a>
                    <a href="#menu4" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false" > <span class="d-none d-md-inline">Research Profile</span> </a>
                    <div class="collapse" id="menu4" data-parent="#sidebar"  >
                        <a href="#menu1sub1" class="list-group-item">Research Credential </a>
                        <a href="#menu1sub1" class="list-group-item">Research Policy </a>
                        <a href="#menu1sub1" class="list-group-item">IPR Policy </a>
                        <a href="#menu1sub1" class="list-group-item">Consultancy Policy</a>
                    </div>
                    <a href="#menu5" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false" > <span class="d-none d-md-inline">Hony. Directors</span> </a>
                    <div class="collapse" id="menu5" data-parent="#sidebar"  >
                        <a href="#menu1sub1" class="list-group-item">Former Hony. Directors </a>
                    </div>
                    <a href="#" class="list-group-item d-inline-block collapsed sidenav "> <span class="d-none d-md-inline">Contact Us</span> </a>
                </div>
            </div>
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Introduction</h2>
                </div>


                        <div class="col-md-4 col-sm-6">
                            <div class="box">
                                <img src="{{asset('Frontend/images/ZeyaHaider.jpg')}}">
                                <div class="box-content">
                                    <h3 class="title">Zeya Haider</h3>
                                    <span class="post">IQAC Director</span>
                                </div>
                            </div>
                        </div>

          <p class="text-justify">NAAC has been instilling a momentum of quality consciousness amongst Higher Educational Institutions, aiming for continuous improvement. However, lasting improvements in standards cannot come about only by accreditation from outside, once in five years. An internal mechanism for sustenance, assurance and enhancement of the quality culture of education imparted by the institution, therefore becomes essential. Many HEIs already have established the Internal Quality Assurance Cell (IQAC) as a post accreditation quality sustenance activity.  Therefore, in pursuance for performance evaluation, assessment and accreditation and quality up-gradation of institutions of higher education, Jamia Millia Islamia has setup an Internal Quality Assurance cell since 2010. Ever since its establishment the IQAC is actively working towards creating quality conscious environment in the University. Jamia Millia Islamia has been accredited as ‘A’ grade for the first cycle of NAAC accreditation in Feb 2015.</p>
          <p class="text-justify pt-2">Maintaining the momentum of quality consciousness is crucial. Internal Quality Assurance Cell, in fact, is conceived as a mechanism to build and ensure a quality culture at the institutional level. It should have an internal quality assurance system, with appropriate structure and processes, and with enough flexibility to meet the diverse needs of the stakeholders. The internal quality assurance mechanism of the institution called as “Internal Quality Assurance Cell (IQAC)”, is meant for planning, guiding and monitoring Quality Assurance (QA) and Quality Enhancement (QE) activities of the university</p>
          <p class="text-justify pt-2">The IQAC channelizes and systematizes the efforts and measures towards academic excellence. It is merely not yet another hierarchical structure or record-keeping exercise; but a facilitative and participative organ of the institution. The IQAC strives to become a driving force for ushering in quality by working out intervention strategies to remove deficiencies and enhance quality.</p>
            </main>
        </div>
    </div>

@endsection
