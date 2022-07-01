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
                                                href="#" style="color:#7C0000" title="">Faculties of Dentistry</a>
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
        <p class="text-center">Faculty of Dentistry</p>
    </div>

    <div class="container" style="margin-top: 40px;">
        <div class="row d-flex d-md-block flex-nowrap wrapper " >
            <div class="col-md-3 col-sm-3" id="sidebar">
                <div class="box2">
                    <div class="box-top">
                        Dean of Dentistry
                    </div>
                    <img src="{{ asset('Frontend/images/user.png') }}" style="height: 300px;width:400px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Rohit Miglani</h3>
                        <span class="post">9431219800, 9934652144 <br /> deandentalsc@lnmu.ac.in</span>
                    </div>

                </div>
            </div>
            <main class="col-md-9 float-left">

                <div class="col-md-12 col-sm-12">
                    <table border="2" width="100%" cellspacing="0" cellpadding="0" align="center">
      <thead>
        <tr>
        <td align="center" width="45"><strong>Sr. No.</strong></td>
        <td align="center" width="310"><strong>College Name</strong></td>
        <td align="center" width="162"><strong>Principal</strong></td>
        <td align="center" width="85"><strong>Mobile</strong></td>
        <td align="center" width="102"><strong>Email</strong></td>
        <td align="center" width="102"><strong>Website</strong></td>
        </tr></thead>
        <tbody>
        <tr>
        <td align="center" width="45"><strong>1</strong></td>
        <td align="center" width="310">Sarjug Dental College &amp; Hospital</td>
        <td align="center" width="162">Dr. M. Bandana Devi</td>
        <td align="center" width="85">9304024700,
        9431261173,
        9835045432
        </td>
        <td align="center" width="102">sdchdbn@gmail.com, info@sdch.org.in</td>
        <td align="center" width="102"><span class="zw-portion" data-text-len="9">www.sdch.org.in</span><span class="EOP EOP-readonly"> </span></td>
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
