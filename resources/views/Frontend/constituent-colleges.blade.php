@extends('Frontend.includes.layout')
@section('content')
    <!-- slider starts here -->
    <section id="yt_spotlight1" class="block mb30">
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
                                                href="#" style="color:#7C0000" title="">IQAC Home</a>
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

    <div class="container">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            @include('Frontend.includes.sidebar.academics_menu')
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Constituent Colleges</h2>
                </div>

                <section class="col-md-12 col-sm-12">

                    <p style="text-align: center;"><strong>Darbhanga District</strong></p>

                    <table border="2" width="100%">
                        <tbody>
                            <tr>
                                <td width="43"><strong>Sl. No.</strong></td>
                                <td width="204"><strong>Name of the College</strong></td>
                                <td width="144"><strong>Principal</strong></td>
                                <td width="96"><strong>Phone</strong></td>
                                <td width="89"><strong>Mobile</strong></td>
                                <td width="247"><strong>E-mail Id</strong></td>
                                <td width="180"><strong>Website</strong></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>01</strong></td>
                                <td width="204">C. M. College, Darbhanga.</td>
                                <td width="144"><strong>Dr. Anil Kumar Mandal</strong></td>
                                <td width="96">06272-222264</td>
                                <td width="89"><strong>9431632410</strong></td>
                                <td width="247"><a
                                        href="mailto:principalcmcollege@yahoo.com"><strong>principalcmcollege@yahoo.com</strong></a>
                                </td>
                                <td width="180"><a href="http://www.cmclnmu.ac.in"><strong>www.cmclnmu.ac.in</strong></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>02</strong></td>
                                <td width="204">C. M. Science College, Darbhanga</td>
                                <td width="144"><strong>Dr.&nbsp;Dilip Kumar Choudhary</strong></td>
                                <td width="96">06272-222051</td>
                                <td width="89"><strong> 9431819580</strong></td>
                                <td width="247"><a
                                        href="mailto:principal@cmsc.ac.in"><strong>principal@cmsc.ac.in</strong></a>

                                    <!--<a href="mailto:arvindkumarjha100@gmail.com"><strong>arvindkumarjha100@gmail.com</strong></a>-->
                                </td>
                                <td width="180"><a href="http://www.cmsc.ac.in"><strong>www.cmsc.ac.in</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>03</strong></td>
                                <td width="204">C. M. Law College, Darbhanga</td>
                                <td width="144"><strong>Dr. Dilip Kumar Choudhary</strong></td>
                                <td width="96">&nbsp;</td>
                                <td width="89"><strong>9431819580</strong></td>
                                <td width="247"><a href="mailto:"><strong>principalcmlowcollege@gmaol.com</strong></a>
                                </td>
                                <td width="180"><a href="http://cmlclnmu.org/"><strong>cmlclnmu.org</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>04</strong></td>
                                <td width="204">Marwari College, Darbhanga</td>
                                <td width="144"><strong>Dr. Dilip Kumar</strong></td>
                                <td width="96">06272-222196</td>
                                <td width="89"><strong>9431896545</strong></td>
                                <td width="247"><a href=""><strong>marwaricollegedarbhanga@gmail.com</strong></a>
                                </td>
                                <td width="180"><a
                                        href="http://marwaricollege.ac.in"><strong>www.marwaricollege.ac.in</strong></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>05</strong></td>
                                <td width="204">M. R. M. College, Darbhanga</td>
                                <td width="144"><strong>Dr.&nbsp;Roopkala Sinha</strong></td>
                                <td width="96"></td>
                                <td width="89"><strong>9431819154</strong></td>
                                <td width="247"><a
                                        href="mailto:mrmcollege58@gmail.com"><strong>mrmcollege58@gmail.com</strong></a>
                                </td>
                                <td width="180"><a
                                        href="http://www.mrmclnmu.ac.in"><strong>www.mrmclnmu.ac.in</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>06</strong></td>
                                <td width="204">K. S. College, Laheriasarai, Darbhanga</td>
                                <td width="144"><strong>Dr. L.P.Jaswal </strong></td>
                                <td width="96">06272-233672</td>
                                <td width="89"><strong>9973615535</strong></td>
                                <td width="247"><a href="mailto:kscdbg@gmail.com "><strong>kscdbg@gmail.com</strong></a>
                                </td>
                                <td width="180"><a
                                        href="http://www.kscollegelnmu.org"><strong>www.kscollegelnmu.org</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>07</strong></td>
                                <td width="204">M. K. College, Laheriasarai, Darbhanga</td>
                                <td width="144"><strong>Dr.Parvez Akhtar</strong></td>
                                <td width="96">06274-222168</td>
                                <td width="89"><strong></strong></td>
                                <td width="247"><a
                                        href="mailto:mkc.lsarai@gmail.com"><strong>mkc.lsarai@gmail.com</strong></a></td>
                                <td width="180"><a
                                        href="http://www.mkcollegedbg.ac.in"><strong>www.mkcollegedbg.ac.in</strong></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>08</strong></td>
                                <td width="204">Millat College, Laheriasarai, Darbhanga</td>
                                <td width="144"><strong>Dr. Iftekhar Ahmad</strong></td>
                                <td width="96">06272-222196</td>
                                <td width="89"><strong>9431403130</strong></td>
                                <td width="247"><a href="mailto:pmcdbg@gmail.com"><strong>pmcdbg@gmail.com</strong></a>
                                </td>
                                <td width="180"><a
                                        href="http://www.millatcollege.ac.in"><strong>www.millatcollege.ac.in</strong></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>09</strong></td>
                                <td width="204">M. L. S. M. College, Darbhanga</td>
                                <td width="144"><strong>Dr. Manju Chaturbedi</strong></td>
                                <td width="96">06272-220550</td>
                                <td width="89"><strong>9771245005</strong></td>
                                <td width="247"><a
                                        href="mailto:principal@mlsmlnmu.ac.in"><strong>principal@mlsmlnmu.ac.in</strong></a>
                                </td>
                                <td width="180"><a
                                        href="http://www.mlsmlnmu.ac.in"><strong>www.mlsmlnmu.ac.in</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>10</strong></td>
                                <td width="204">B. M. A. College, Baheri, Darbhanga</td>
                                <td width="144"><strong>Dr. Shambhu Kumar Yadav</strong></td>
                                <td width="96">&nbsp;</td>
                                <td width="89"><strong>9431859046&nbsp;</strong></td>
                                <td width="247"><a href="mailto:info@bmac.ac.in"><strong>info@bmac.ac.in</strong></a>
                                </td>
                                <td width="180"><a href="http://www.bmac.ac.in"><strong>www.bmac.ac.in</strong></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>11</strong></td>
                                <td width="204">M. K. S. College, Trimuhan Chandauna, Darbhanga</td>
                                <td width="144"><strong>Dr. Pulo Paswan</strong></td>
                                <td width="96">06226-251807</td>
                                <td width="89"><strong>9199683430</strong></td>
                                <td width="247"><a
                                        href="mailto:mkscollegechandauna209@gmail.com"><strong>mkscollegechandauna209@gmail.com</strong></a>
                                </td>
                                <td width="180"><a
                                        href="http://www.mkscollege.in"><strong>www.mkscollege.in</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>12</strong></td>
                                <td width="204">J. K. College, Biraul, Darbhanga</td>
                                <td width="144"><strong>Dr.Surya Narayan Panday</strong></td>
                                <td width="96">&nbsp;</td>
                                <td width="89"><strong>9771292141</strong></td>
                                <td width="247"><a
                                        href="mailto:jkcblnmu68@gmail.com"><strong>jkcblnmu68@gmail.com</strong></a></td>
                                <td width="180"><a
                                        href="http://www.jkcollegebiraul.com"><strong>www.jkcollegebiraul.com</strong></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>13</strong></td>
                                <td width="204">J. N. College, Nehra, Darbhanga</td>
                                <td width="144"><strong>Dr. Amar Nath Prasad</strong></td>
                                <td width="96">&nbsp;</td>
                                <td width="89"><strong>8789009928&nbsp;</strong></td>
                                <td width="247"><a
                                        href="mailto:jncnehrad@gmail.com"><strong>jncnehrad@gmail.com&nbsp;</strong></a>

                                    <!--<a href="mailto:jncnehrad@gmail.com"><strong>jncnehrad@gmail.com</strong></a>-->
                                </td>
                                <td width="180"><a
                                        href="http://www.jncollegenehra.co.in"><strong>www.jncollegenehra.com</strong></a><strong>&nbsp;</strong>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>14</strong></td>
                                <td width="204">Subdivision Govt. Degree College, Benipur, Darbhanga</td>
                                <td width="144"><strong>Dr. Ambrish Kumar Jha</strong></td>
                                <td width="96">&nbsp;</td>
                                <td width="89"><strong>9931749237</strong></td>
                                <td width="247"><a
                                        href="mailto:psdgded@gmail.com"><strong>psdgded@gmail.com</strong></a>

                                    <!--<a href="mailto:jncnehrad@gmail.com"><strong>jncnehrad@gmail.com</strong></a>-->
                                </td>
                                <td width="180"><a href=""><strong></strong></a><strong>&nbsp;</strong></td>
                            </tr>
                        </tbody>
                    </table>

                    <strong>&nbsp;</strong>
                    <p style="text-align: center;"><strong>Madhubani District</strong></p>

                    <table border="2" width="100%">
                        <tbody>
                            <tr>
                                <td width="43"><strong>Sl. No.</strong></td>
                                <td width="204"><strong>Name of the College</strong></td>
                                <td width="144"><strong>Principal</strong></td>
                                <td width="96"><strong>Phone</strong></td>
                                <td width="90"><strong>Mobile</strong></td>
                                <td width="246"><strong>E-mail Id</strong></td>
                                <td width="180"><strong>Website</strong></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>01</strong></td>
                                <td width="204">R. K. College, Madhubani</td>
                                <td width="144"><strong>Dr. Phoulo Paswan</strong></td>
                                <td width="96"><strong>&nbsp;</strong></td>
                                <td width="90"><strong>9199683430</strong></td>
                                <td width="246"><a
                                        href="mailto:rkcollegemadhubani1940@gmail.com"><strong>rkcollegemadhubani1940@gmail.com</strong></a>
                                </td>
                                <td width="180"><a
                                        href="http://www.rkclnmu.ac.in"><strong>www.rkclnmu.ac.in</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>02</strong></td>
                                <td width="204">J. N. College, Madhubani</td>
                                <td width="144"><strong>Dr. Laxmi Kant Mishra</strong></td>
                                <td width="96"><strong>06276-222247</strong></td>
                                <td width="90"><strong>9931870819</strong></td>
                                <td width="246"><a
                                        href="mailto:jncmadhubani@gmail.com"><strong>jncmadhubani@gmail.com</strong></a>
                                </td>
                                <td width="180"><a
                                        href="http://www.jncollegemdb.com"><strong>www.jncollegemdb.com</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>03</strong></td>
                                <td width="204">R. N. College, Pandaul, Madhubani</td>
                                <td width="144"><strong>Dr. Arti Prasad</strong></td>
                                <td width="96"><strong>&nbsp;</strong></td>
                                <td width="90"><strong>9955839898</strong></td>
                                <td width="246">
                                    <!--<td width="246"><a href="mailto:rasnarayancollege@gmail.com"><strong>rasnarayancollege@gmail.com</strong></a>-->

                                    <a
                                        href="mailto:rasnarayancollege@gmail.com"><strong>rasnarayancollege@gmail.com</strong></a>
                                </td>
                                <td width="180"><a
                                        href="http://www.rncollegepandaul.in"><strong>www.rncollegepandaul.in</strong></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>04</strong></td>
                                <td width="204">B. M. College, Rahika, Madhubani</td>
                                <td width="144"><strong> Dr. Kshitesh Kumar</strong></td>
                                <td width="96"><strong>&nbsp;</strong></td>
                                <td width="90"><strong>9973690202</strong></td>
                                <td width="246"><a
                                        href="mailto:bmc71@rediffmail.com"><strong>bmc71@rediffmail.com</strong></a>

                                    <!---->
                                </td>
                                <td width="180"><a href="http://www.bmcollege.in "><strong> www.bmcollege.in
                                        </strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>05</strong></td>
                                <td width="204">K. V. Sc. College, Ucchaith, Madhubani</td>
                                <td width="144"><strong>Dr. Shubh Kumar Sahu</strong></td>
                                <td width="96"><strong>&nbsp;</strong></td>
                                <td width="90"><strong>9430631411</strong></td>
                                <td width="246"><a
                                        href="mailto:kvsccollege1971@gmail.com"><strong>kvsccollege1971@gmail.com</strong></a>
                                </td>
                                <td width="180"><a
                                        href="http://www.kvscollege.com"><strong>www.kvscollege.com</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>06</strong></td>
                                <td width="204">J. M. D. P. L. Mahila College, Madhubani</td>
                                <td width="144"><strong>Dr. Nilam Bairolia</strong></td>
                                <td width="96"><strong>&nbsp;</strong></td>
                                <td width="90"><strong>9430923239</strong></td>
                                <td width="246"><a
                                        href="mailto:jmdplmahilacollege@gmail.com"><strong>jmdplmahilacollege@gmail.com</strong></a>
                                </td>
                                <td width="180"><a
                                        href="http://www.jmdplmahilacollege.com"><strong>www.jmdplmahilacollege.com</strong></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>07</strong></td>
                                <td width="204">L. N. J. College, Jhanjharupr, Madhubani</td>
                                <td width="144"><strong>Kedar Nath Jha</strong></td>
                                <td width="96"><strong>&nbsp;</strong></td>
                                <td width="90"><strong>9430935134</strong></td>
                                <td width="246"><a
                                        href="mailto:principallnjcjjp@gmail.com"><strong>principallnjcjjp@gmail.com</strong></a>
                                </td>
                                <td width="180">
                                    <!--<a href="http://www.lnjcollege.in" target="_blank"><strong> www.lnjcollege.in</strong></a>-->
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>08</strong></td>
                                <td width="204">M. L. S. College, Sarisabpahi, Madhubani</td>
                                <td width="144"><strong>Dr. Vijoy Mishra</strong></td>
                                <td width="96"><strong>&nbsp;</strong></td>
                                <td width="90"><strong>9931997119</strong></td>
                                <td width="246"><a
                                        href="principalmlscollege@gmail.com"><strong>principalmlscollege@gmail.com</strong></a>
                                </td>
                                <td width="180"><a
                                        href="http://www.mlscollege.in"><strong>www.mlscollege.in</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>09</strong></td>
                                <td width="204">H. P. S. College, Madhepur, Madhubani</td>
                                <td width="144"><strong>Dr. Umesh Kumar Choudhary</strong></td>
                                <td width="96"><strong></strong></td>
                                <td width="90"><strong>9431400196</strong></td>
                                <td width="246"><a
                                        href="mailto:hpscollegemadhepur@gmail.com"><strong>hpscollegemadhepur@gmail.com</strong></a>
                                    <!--<a href="mailto:hpscollegemadhepur@gmail.com"><strong>hpscollegemadhepur@gmail.com</strong></a>-->
                                </td>
                                <td width="180"><a
                                        href="http://www.hpscollege.com"><strong>www.hpscollege.com</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>10</strong></td>
                                <td width="204">C. M. J. College, Downwarihat, Madhubani</td>
                                <td width="144"><strong>Dr. Md. Rahamtullah</strong></td>
                                <td width="96"><strong>&nbsp;</strong></td>
                                <td width="90"><strong>9708825314</strong></td>
                                <td width="246"><a
                                        href="mailto:principalcmjcollege@gmail.com"><strong>principalcmjcollege@gmail.com</strong></a>
                                </td>
                                <td width="180"><a
                                        href="http://www.cmjcollege.com/"><strong>www.cmjcollege.com</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>11</strong></td>
                                <td width="204">C. M. B. College, Deorh, Ghoghardiha, Madhubani</td>
                                <td width="144"><strong>Dr. Kirtan Sahu</strong></td>
                                <td width="96"><strong>&nbsp;</strong></td>
                                <td width="90"><strong>7654797116</strong></td>
                                <td width="246"><a
                                        href="mailto:cmbcollegedeorh@gmail.com"><strong>cmbcollegedeorh@gmail.com</strong></a>
                                </td>
                                <td width="180"><strong><a
                                            href="http://www.cmbcollege.in">www.cmbcollege.in</a>&nbsp;</strong></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>12</strong></td>
                                <td width="204">D. B. College, Jaynagar, Madhubani</td>
                                <td width="144"><strong>Dr.Nand Kumar</strong></td>
                                <td width="96"><strong>06246-222076</strong></td>
                                <td width="90"><strong>9430468961</strong></td>
                                <td width="246"><a
                                        href="mailto:principal.dbcollege@gmail.com"><strong>principal.dbcollege@gmail.com</strong></a>
                                </td>
                                <td width="180"><a
                                        href="http://www.dbcollege.co.in"><strong>www.dbcollege.co.in</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>13</strong></td>
                                <td width="204">V. S. J. College, Rajnagar, Madhubani</td>
                                <td width="144"><strong>Dr. Mihir Kumar Jha </strong></td>
                                <td width="96"><strong>&nbsp;</strong></td>
                                <td width="90"><strong>9430583759</strong></td>
                                <td width="246"><a
                                        href="pvsjc1971@gmail.com@gmail.com"><strong>pvsjc1971@gmail.com</strong></a></td>
                                <td width="180"><a
                                        href="http://www.vsjcollege.in"><strong>www.vsjcollege.in</strong></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="text-align: center;"><strong>Samastipur District</strong></p>

                    <table border="2" width="100%">
                        <tbody>
                            <tr>
                                <td width="43"><strong>Sl. No.</strong></td>
                                <td width="228"><strong>Name of the College</strong></td>
                                <td width="144"><strong>Principal</strong></td>
                                <td width="72"><strong>Phone</strong></td>
                                <td width="90"><strong>Mobile</strong></td>
                                <td width="252"><strong>E-mail Id</strong></td>
                                <td width="145"><strong>Website</strong></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>01</strong></td>
                                <td width="228">Samastipur College, Samastipur</td>
                                <td width="144"><strong>Dr.Satyen Kumar</strong></td>
                                <td width="72"><strong>06274-220433</strong></td>
                                <td width="90"><strong>9835048381</strong></td>
                                <td width="252"><a
                                        href="mailto:samastipurcollege@gmail.com"><strong>samastipurcollege@gmail.com</strong></a>

                                    <!--<a href="mailto:jaishankar.prasad60@gmail.com"><strong>jaishankar.prasad60@gmail.com</strong></a>-->
                                </td>
                                <td width="145"><a
                                        href="http://samastipurcollege.org/"><strong>www.samastipurcollege.org/</strong></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>02</strong></td>
                                <td width="228">R. N. A. R. College, Samastipur</td>
                                <td width="144"><strong>Dr. Surendra Prasad</strong></td>
                                <td width="72"><strong>06274-222168</strong></td>
                                <td width="90"><strong>9430034681</strong></td>
                                <td width="252"><a
                                        href="mailto:principalrnar@yahoo.com"><strong>principalrnar@yahoo.com</strong></a>
                                </td>
                                <td width="145"><a
                                        href="http://www.rnarcollege.org"><strong>www.rnarcollege.org</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>03</strong></td>
                                <td width="228">B. R. B. College, Samastipur</td>
                                <td width="144"><strong>Dr. Birendra Kumar Choudhary</strong></td>
                                <td width="72"><strong>06274-222366</strong></td>
                                <td width="90"><strong>9931470706</strong></td>
                                <td width="252"><a
                                        href="mailto:principalbrb@gmail.com"><strong>principalbrb@gmail.com</strong></a>
                                </td>
                                <td width="145"><a
                                        href="http://www.brbcollege.in/"><strong>www.brbcollege.in/</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>04</strong></td>
                                <td width="228">Women’s College, Samastipur</td>
                                <td width="144"><strong>Dr. Sunita Sinha</strong></td>
                                <td width="72"><strong>06274-222017</strong></td>
                                <td width="90"><strong>9934917117</strong></td>
                                <td width="252"><a
                                        href="mailto:womcollsam@gmail.com"><strong>womcollsam@gmail.com</strong></a></td>


                                <td width="145"><a
                                        href="http://www.womenscollegesamastipur.org/"><strong>www.womenscollegesamastipur.org</strong></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>05</strong></td>
                                <td width="228">A. N. D. College, Shahpur Patory, Samastipur</td>
                                <td width="144"><strong>Dr. Jaishankar Prasad</strong></td>
                                <td width="72"><strong>&nbsp;</strong></td>
                                <td width="90"><strong>9852307592</strong></td>
                                <td width="252"><a
                                        href="mailto:andc.patory@gmail.com"><strong>andc.patory@gmail.com</strong></a></td>
                                <td width="145"><a
                                        href="http://www.andcollege.in"><strong>www.andcollege.in</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>06</strong></td>
                                <td width="228">R. B. S. College, Andaur, Samastipur</td>
                                <td width="144"><strong>Dr. Shyam Chandra Gupta</strong></td>
                                <td width="72"><strong>&nbsp;</strong></td>
                                <td width="90"><strong>9431050453</strong></td>
                                <td width="252"><a
                                        href="rambahadursinghcollege@gmail.com"><strong>rambahadursinghcollege@gmail.com</strong></a>
                                </td>
                                <td width="145"><a
                                        href="http://www.rambahadursinghcollegeandaur.com/"><strong>www.rambahadursinghcollegeandaur.com</strong></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>07</strong></td>
                                <td width="228">R. B. College, Dalsinghsarai, Samastipur</td>
                                <td width="144"><strong>Dr. Mahesh Chandra Chourasia</strong></td>
                                <td width="72"><strong>06278-233451</strong></td>
                                <td width="90"><strong>82986223031</strong></td>
                                <td width="252"><a
                                        href="mailto:rbcdalsin@gmail.com"><strong>rbcdalsin@gmail.com</strong></a>

                                    <a href="mailto:jha.dss@gmail.com"><strong>jha.dss@gmail.com</strong></a>
                                </td>
                                <td width="145"><a
                                        href="http://www.rbcollege.ac.in/"><strong>www.rbcollege.ac.in</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>08</strong></td>
                                <td width="228">U. P. College, Pusa, Samastipur</td>
                                <td width="144"><strong>Dr. Birendra Kumar Choudhary</strong></td>
                                <td width="72"><strong>06275- 222226</strong></td>
                                <td width="90"><strong>9931470706</strong></td>
                                <td width="252"><a
                                        href="mailto:principal@upcollege.org.in"><strong>principal@upcollege.org.in</strong></a>
                                </td>
                                <td width="145"><strong><a
                                            href="http://www.umapandeycollege.org.in/">www.umapandeycollege.org.in</a>&nbsp;</strong>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>09</strong></td>
                                <td width="228">U. R. College, Rosera, Samastipur</td>
                                <td width="144"><strong>DR. Shamim Ahmad </strong></td>
                                <td width="72"><strong>&nbsp;</strong></td>
                                <td width="90"><strong>9431807022</strong></td>
                                <td width="252"> <a
                                        href="mailto:urcollagerosera@gmail.com"><strong>urcollagerosera@gmail.com</strong></a>
                                </td>
                                <td width="145"><a
                                        href="http://www.urcollege.co.in"><strong>www.urcollege.co.in</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>10</strong></td>
                                <td width="228">D. B. K. N. College, Narhan, Samastipur</td>
                                <td width="144"><strong>Dr. Arvind Kumar Jha</strong></td>
                                <!--<td width="72"><strong>06275-260257</strong></td>-->
                                <td width="72"><strong>06275-260257</strong></td>
                                <td width="90"><strong> 9931804094</strong></td>
                                <td width="252"><a
                                        href="mailto:principaldbkn@gmail.com"><strong>principaldbkn@gmail.com</strong></a>
                                </td>
                                <td width="145"><a
                                        href="http://www.dbkncollege.co.in"><strong>www.dbkncollege.co.in</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>11</strong></td>
                                <td width="228">Dr. L. K. V. D. College, Tajpur, Samastipur</td>
                                <td width="144"><strong>Dr. Prabhat Ranjan Karn</strong></td>
                                <td width="72"><strong>&nbsp;</strong></td>
                                <td width="90"><strong>9430049542</strong></td>
                                <td width="252"><a
                                        href="mailto:dr.lkvdcollegetajpur@gmail.com"><strong>dr.lkvdcollegetajpur@gmail.com</strong></a>
                                </td>
                                <td width="145"><strong><a
                                            href="http://www.drlkvdcollege.in/">www.drlkvdcollege.in</a>&nbsp;</strong>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>12</strong></td>
                                <td width="228">G. M. R. D. College, Mohanpur, Samastipur</td>
                                <td width="144"><strong>Dr. Ramesh Yadav</strong></td>
                                <td width="72"><strong>&nbsp;</strong></td>
                                <td width="90"><strong>9472015655<br>
                                        9570844366</strong></td>
                                <td width="252"><a href="mailto:gmrdcollegemohanpur@gmail.com"><strong>
                                            gmrdcollegemohanpur@gmail.com</strong></a></td>
                                <td width="145"><a href="http://www.gmrdcollege.org/"
                                        target="_blank"><strong>www.gmrdcollege.org</strong></a></td>
                            </tr>
                        </tbody>
                    </table>
                    &nbsp;

                    <strong>&nbsp;</strong>
                    <p style="text-align: center;"><strong>Begusarai District</strong></p>

                    <table border="2" width="100%">
                        <tbody>
                            <tr>
                                <td width="43"><strong>Sl. No.</strong></td>
                                <td width="228"><strong>Name of the College</strong></td>
                                <td width="144"><strong>Principal</strong></td>
                                <td width="72"><strong>Phone</strong></td>
                                <td width="90"><strong>Mobile</strong></td>
                                <td width="252"><strong>E-mail Id</strong></td>
                                <td width="184"><strong>Website</strong></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>01</strong></td>
                                <td width="228">G. D. College, Begusarai</td>
                                <td width="144"><strong>Dr. Ram Awadhesh Kumar</strong></td>
                                <td width="72"><strong>06243- 222007</strong></td>
                                <td width="90"><strong>9471455578</strong></td>
                                <td width="252"><a
                                        href="mailto:gdcollegebegusarai2@gmail.com"><strong>gdcollegebegusarai2@gmail.com</strong></a>
                                </td>
                                <td width="184"><a
                                        href="http://www.gdcollegebegusarai.com"><strong>www.gdcollegebegusarai.com</strong></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>02</strong></td>
                                <td width="228">S. B. S. S. College, Begusarai</td>
                                <td width="144"><strong>Dr. Awdhesh Kumar Singh</strong></td>
                                <td width="72"><strong>06243-222587</strong></td>
                                <td width="90">9431861501<strong> </strong></td>
                                <td width="252"><a
                                        href="mailto:sbsscollegebegusarai@gmail.com"><strong>sbsscollegebegusarai@gmail.com</strong></a>
                                </td>
                                <td width="184"><a
                                        href="http://www.sbsscollegebegusarai.com"><strong>www.sbsscollegebegusarai.com</strong></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>03</strong></td>
                                <td width="228">S. K. M. College, Begusarai</td>
                                <td width="144"><strong>Dr. Bimal Kumar</strong></td>
                                <td width="72"><strong>06243-222163</strong></td>
                                <td width="90"><strong>9431862444 </strong></td>
                                <td width="252"><a
                                        href="mailto:skmahilacollege@gmail.com"><strong>skmahilacollege@gmail.com</strong></a>
                                </td>
                                <td width="184"><a
                                        href="http://www.skmcollege.co.in/"><strong>www.skmcollege.co.in</strong></a></td>
                            </tr>
                            <tr>
                                <td width="43"><strong>04</strong></td>
                                <td width="228">A. P. S. M. College, Barauni, Begusarai</td>
                                <td width="144"><strong>Dr. Mukesh Kumar</strong></td>
                                <td width="72"><strong>&nbsp;</strong></td>
                                <td width="90"><strong>9472322249</strong></td>
                                <td width="252"><a
                                        href="mailto:apsmcollege@gmail.com"><strong>apsmcollege@gmail.com</strong></a></td>
                                <td width="184"><a
                                        href="http://www.apsmcollege.ac.in "><strong>www.apsmcollege.ac.in</strong></a>
                                </td>
                            </tr>
                            <tr>
                                <td width="43"><strong>05</strong></td>
                                <td width="228">R. C. S. College, Manjhaul, Begusarai</td>
                                <td width="144"><strong>Dr. Satya Narayan Paswan</strong></td>
                                <td width="72"><strong>06243-286975</strong></td>
                                <td width="90"><strong> 7366822631</strong></td>
                                <td width="252"><a
                                        href="mailto:principalrcscollege@gmail.com"><strong>principalrcscollege@gmail.com</strong></a>
                                </td>
                                <td width="184"><a
                                        href="http://www.rcscollegemanjhaul.org"><strong>www.rcscollegemanjhaul.org</strong></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <strong>&nbsp;</strong>

                    &nbsp;
                </section>

                {{-- <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Sr.No.</th>
                                <th>Name of the college</th>
                                <th>Principal</th>
                                <th>Phone</th>
                                <th>Mobile</th>
                                <th>Email Id</th>
                                <th>Website</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>C. M. College, Darbhanga</td>
                                <td>Dr. Anil Kumar Mandal</td>
                                <td>06272-222264</td>
                                <td>8544513309</td>
                                <td>principalcmcollege@yahoo.com</td>
                                <td>www.cmclnmu.ac.in</td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td>C. M. College, Darbhanga</td>
                                <td>Dr. Anil Kumar Mandal</td>
                                <td>06272-222264</td>
                                <td>8544513309</td>
                                <td>principalcmcollege@yahoo.com</td>
                                <td>www.cmclnmu.ac.in</td>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td>C. M. College, Darbhanga</td>
                                <td>Dr. Anil Kumar Mandal</td>
                                <td>06272-222264</td>
                                <td>8544513309</td>
                                <td>principalcmcollege@yahoo.com</td>
                                <td>www.cmclnmu.ac.in</td>

                            </tr>
                        </tbody>
                    </table>
                </div> --}}
            </main>
        </div>
    </div>
@endsection
