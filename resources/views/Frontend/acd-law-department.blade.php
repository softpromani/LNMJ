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
                                                href="#" style="color:#7C0000" title="">Faculties of Law</a>
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
    <div class="container-fluid"
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;">
        <p class="text-center">Faculty of Law</p>
    </div>

    <div class="container" style="margin-top: 40px;">
        <div class="row d-flex d-md-block flex-nowrap wrapper " >
            <div class="col-md-3 col-sm-3" id="sidebar">
                <div class="box2">
                    <div class="box-top">
                        Dean of Law
                    </div>
                    <img src="{{ asset('Frontend/images/dean_law.jpg') }}" style="height: 300px;width:400px;">
                    <div class="box-content">
                        <h2 class="title">Dr. Jitendra Narayan</h2>
                        <span class="post">deanlaw@lnmu.ac.in</span>
                    </div>

                </div>
            </div>
            <main class="col-md-9 float-left">

                <div class="col-md-12 col-sm-12">
                    <table border="2" width="100%">
                    <tbody>
                    <tr>
                    <td width="38"><strong>Sl. No.</strong></td>
                    <td width="115"><strong>College Name</strong></td>
                    <td width="83"><strong>Principal</strong></td>
                    <td width="96"><strong>Contact</strong></td>
                    <td width="246"><strong>E-mail id</strong></td>
                    <td width="157"><strong>Website</strong></td>
                    </tr>
                    <tr>
                    <td width="38">1.</td>
                    <td width="115">C. M. Law College</td>
                    <td width="83">Dr. Badre Alam Khan</td>
                    <td width="96">8987128054</td>
                    <td width="246"><a href="mailto:principal.cmlawcollege@gmail.com">badrealamkhan56@gmail.com</a></td>
                    <td width="157"><a href="http://www.cmlawcollege.org">www.cmlclnmu.org</a>

                    &nbsp;</td>
                    </tr>
                    <tr>
                    <td width="38">2.</td>
                    <td width="115">Vidhi Mahavidyalaya, Samastipur</td>
                    <td width="83">Prof. Sanjay Kumar</td>
                    <td width="96">8434688828

                    7992315304</td>
                    <td width="246"><a href="mailto:lawcollegespr@gmail.com">lawcollegespr@gmail.com</a></td>
                    <td width="157">N/A</td>
                    </tr>
                    <tr>
                    <td width="38">3.</td>
                    <td width="115">R. K. A.&nbsp; Bidhi College,&nbsp; Begusarai</td>
                    <td width="83">Prof. R. L. Singh</td>
                    <td width="96">9905226730</td>
                    <td width="246"><a href="mailto:rkalawcollege@gmail.com">rkalawcollege@gmail.com</a><strong> , </strong>

                    <a href="mailto:ramlochansinghprincipal@gmail.com">ramlochansinghprincipal@gmail.com</a></td>
                    <td width="157">N/A</td>
                    </tr>
                    </tbody>
                    </table>
                    <p>&nbsp;</p>

                    <p></p></div>



            </main>


        </div>





        <p>
        </p>
        <p></p>
    </div>
@endsection
