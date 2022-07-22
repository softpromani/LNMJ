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
                                                href="#" style="color:#7C0000" title="">NIRF</a>
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
        <p class="text-center">NIRF</p>
    </div>
    <!-- slider ends here -->


    <section class="container" style="margin-top: 50px;margin-bottom:50px;">

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel with-nav-tabs panel-primary">
                        <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                     <li class="active tab-color"><a href="#tab5primary" data-toggle="tab">NIRF </a></li>
                                     <!--<li class="tab-color"><a href="#tab1primary" data-toggle="tab">Certificates & Grade Card</a></li>
                                    <li class="tab-color"><a href="#tab2primary" data-toggle="tab"> IQAC</a></li>
                                    <li class="tab-color"><a href="#tab3primary" data-toggle="tab">NAAC Guidelines</a></li>
                                   <li class="tab-color"><a href="#tab4primary" data-toggle="tab"> Notices</a></li>-->
                                </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                              <div class="tab-pane fade in active" id="tab5primary">
                                <div class="col-md-12">
                                    <table width="100%" border="1" style="box-shadow: 0px 3px 4px 0px #000;">
                                        <tbody><tr>
                                           <th>Sl No.</th>
                                            <th>AQAR Year</th>
                                            <th>Download PDF/DOC</th>

                                             </tr>
                                              <tr>
                                                 <td>1</td>
                                            <td>Lalit Narayan Mithila University_U-0068 (NIRF_22)</td>
                                            <td><a href="NIRF/Lalit Narayan Mithila University_U-0068 (NIRF_22).pdf" target="_blank"><img class="download" src="http://lnmuacin.in/studentnotice/2019/pdf-icon.png" alt="pdf"></a></td>

                                            </tr>
                                             <tr>
                                                 <td>2</td>
                                            <td>Lalit Narayan Mithila University, Darbhanga</td>
                                            <td><a href="https://lnmuacin.in/studentnotice/2021/Lalit%20Narayan%20Mithila%20University,%20Darbhanga20210225-.pdf" target="_blank"><img class="download" src="http://lnmuacin.in/studentnotice/2019/pdf-icon.png" alt="pdf"></a></td>

                                            </tr>


                                    </tbody></table>
                                <!--<ul>-->
                                <!--  <li> <a href="https://lnmu.ac.in/nacc/AQAR%202015-16-min.pdf" target="_blank">AQAR 2015-16</a></li>-->
                                <!--  <li> <a href="https://lnmu.ac.in/nacc/AQAR%202016-17-min.pdf" target="_blank">AQAR 2016-17</a></li>-->
                                <!--  <li> <a href="https://lnmu.ac.in/nacc/BRUNGN101202014-L.N.M.University,%20Kameshwaranagar,%20Dbg.doc" target="_blank">AQAR 2017-18</a></li>-->
                                <!--</ul>-->
                                </div>
                              </div>

                              <div class="tab-pane fade" id="tab1primary">
                                <div class="col-md-12">
                                  <ul>
                                    <li> <a href="http://lnmuacin.in/studentnotice/Administration%20notice%20image/NAAC%20ACCREDITATION%20CERTIFICATE-min.pdf" target="_blank">NAAC ACCREDITATION CERTIFICATE</a></li>
                                  </ul>
                                </div>
                              </div>

                                <div class="tab-pane fade" id="tab2primary">
                                  <div class="col-md-12">
                                    <div class="col-md-4">
                                      <!--<img src="http://lnmuacin.in/studentnotice/nanotechnology/VC-LNMU-new-276x300-min.jpg" width="100%" height="100%">-->
                                    </div>
                                    <div class="col-md-8">

                                    </div>
                                  </div>
                               </div>

                                <div class="tab-pane fade" id="tab3primary">
                                  <div class="col-md-12">
                                    <div class="col-md-4">
                                      <!--<img src="http://lnmuacin.in/studentnotice/nanotechnology/prem11-min.jpg" width="100%" height="100%">-->
                                    </div>
                                    <div class="col-md-8">

                                    </div>
                                  </div>
                                </div>

                                <div class="tab-pane fade" id="tab4primary">
                                  <div class="col-md-12">
                                    <div class="col-md-4">
                                      <!--<img src="http://lnmuacin.in/studentnotice/nanotechnology/futureplan%20(1)new-min.jpg" height="100%" width="100%">-->
                                    </div>
                                    <div class="col-md-8">

                                    </div>
                                  </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
    </section>
@endsection
