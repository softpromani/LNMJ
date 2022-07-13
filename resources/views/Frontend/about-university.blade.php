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
                                                href="#" style="color:#7C0000" title="">University at a
                                                Glance</a>
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
            @include('Frontend.includes.sidebar.about_menu')
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">University At A Glance</h2>
                </div>
                <div class="col-md-12" id="content_main">
                    <div id="system-message-container"></div>
                    <div id="yt_component">
                        <section class="alterna-col col-lg-12">
                            <p style="text-align: justify;">Lalit Narayan Mithila University Kameshwaranagar, Darbhanga is
                                an outcome of long cherished desire of the people of Mithila. Eminent academicians like Dr.
                                Amarnath Jha, Dr. R. C. Mazumdar, Dr. A. S. Altekar, Dr. Sunil Kumar Chatterjee and many
                                other had expressed their views in favour of the establishment of a modern University at
                                Darbhanga. The demand for establishing University was voiced time and again on the floors of
                                the state legislature and in the parliament. On the 27<sup>th</sup> January, 1947 (Vasant
                                Panchami Day) at a meeting of some of the leading citizens of Darbhanga and Laheriasarai,
                                after Darbhanga visit by Late Prof. Binodanand Jha, then the Health and L. S. G. Minister,
                                Government of Bihar sometime in January 1947 the Mithila University Committee was
                                constituted with Dr. Amarnath Jha as the President, Pandit Girindra Mohan Mishra and Pandit
                                Gangadhar Mishra, the Vice-Presidents, Pandit Harinath Mishra as the General Secretary,
                                Kumar Kalyan Lal and Professor Quasim Hussain Secretaries, and Late Shri Padmana Prasad as
                                the Treasurer including a few members such as Shri Jyoti Prasad Singh, the late Shri P. N.
                                Mishra and Principal B. M. K. Sinha.</p>
                            <p style="text-align: justify;">The year 1968 proved as a landmark year in the history of the
                                University when a U.G.C. team visited Darbhanga in order to explore the possibility of
                                establishing a multi-faculty University here. Subsequently the State Government set up a
                                committee to examine the administrative and academic structure of the modern University at
                                Darbhanga, following the recommendations made by the visiting team of the U.G.C.</p>
                            <p style="text-align: justify;">The Government of India constituted another committee consisting
                                of Shri T. P. Singh, Secretary, Minister of Education and Social Welfare, Shri R. K. Chabra,
                                Secretary U.G.C. and Shri N. D. J. Rao, Education Commissioner, Bihar to look into the
                                matters for establishing a University at Darbhanga. The committee submitted its report that
                                the establishment of a separate and independent University at Darbhanga could be considered
                                on merit basis.</p>
                            <p style="text-align: justify;">Consequent upon the report of the above mentioned committee and
                                considering the socio-economic background of the region, the Mithila University with its
                                headquarters at Darbhanga was established by an ordinance in 1972 carving out colleges of
                                Darbhanga and Kosi Divisions, from the then two Universities namely Bihar University,
                                Muzaffarpur and Bhagalpur University, Bhagalpur respectively.</p>
                            <p style="text-align: justify;">After the sad demise of Pt. Lalit Narayan Mishra in January,
                                1975, the name of Mithila University was amended as Lalit Narayan Mithila University. But it
                                was soon reversed to the original name through an ordinance. However, in 1980, the name
                                Lalit Narayan Mithila University was restored through an Ordinance.</p>
                            <p style="text-align: justify;">The colleges of Kosi Division which were initially attached to
                                this University in 1972, but were transferred to newly established B. N. Mandal University,
                                Laloo Nagar, Madhepura, with vertical separation of the assets and liabilities with effect
                                from 01.01.1992.</p>
                            <p><strong><u>BIRD’S EYE VIEW</u></strong></p>
                            <table border="1" width="100%">
                                <thead>
                                    <tr>
                                        <th width="73"><strong>Sl. No. </strong></th>
                                        <th width="240"><strong>Items </strong></th>
                                        <th width="251"><strong>Description </strong></th>
                                    </tr>
                                </thead>

                                    <tbody>
                                    <tr>
                                        <td width="73"><strong>1. </strong><strong> </strong></td>
                                        <td width="240"><strong>Established </strong></td>
                                        <td width="251"><strong>1972</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>2. </strong><strong> </strong></td>
                                        <td width="240"><strong>Type </strong></td>
                                        <td width="251"><strong>Public </strong></td>
                                    </tr>

                                    <tr>
                                        <td width="73"><strong>3. </strong><strong> </strong></td>
                                        <td width="240"><strong>H. Q. Location </strong>
                                            <p></p>
                                            <p><strong>Longitude </strong></p>
                                            <p><strong>Latitude</strong></p>
                                        </td>
                                        <td width="251"><strong>Darbhanga, Bihar (India)</strong>
                                            <p></p>
                                            <p><strong>26.1700<sup>o</sup>N</strong></p>
                                            <p><strong>85.9000<sup>o</sup>E</strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>4. </strong><strong> </strong></td>
                                        <td width="240"><strong>Campus</strong></td>
                                        <td width="251"><strong>Urban </strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>5. </strong><strong> </strong></td>
                                        <td width="240"><strong>Affiliation </strong></td>
                                        <td width="251"><strong>U.G.C.</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>6. </strong><strong> </strong></td>
                                        <td width="240"><strong>Total Area of Main Campus</strong></td>
                                        <td width="251"><strong>201 Acres </strong>
                                            <p></p>
                                            <p><strong>(0.91 Sq.KM. approx.)</strong></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>7. </strong><strong> </strong></td>
                                        <td width="240"><strong>No. of PG Departments</strong></td>
                                        <td width="251"><strong>21</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>8. </strong><strong> </strong></td>
                                        <td width="240"><strong>No. of Constituent Colleges</strong></td>
                                        <td width="251"><strong>43</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>9. </strong><strong> </strong></td>
                                        <td width="240"><strong>No. of Affiliated Colleges </strong></td>
                                        <td width="251"><strong>24</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>10. </strong><strong> </strong></td>
                                        <td width="240"><strong>No. of Dental Colleges </strong></td>
                                        <td width="251"><strong>03</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>11. </strong><strong> </strong></td>
                                        <td width="240"><strong>No. of B.Ed. Colleges </strong></td>
                                        <td width="251"><strong>23</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>12. </strong><strong> </strong></td>
                                        <td width="240"><strong>No. of Affiliated Law Colleges</strong></td>
                                        <td width="251"><strong>02</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>13. </strong><strong> </strong></td>
                                        <td width="240"><strong>No. of Self-Financing Institutions </strong></td>
                                        <td width="251"><strong>07</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>14. </strong><strong> </strong></td>
                                        <td width="240"><strong>Area of the University </strong></td>
                                        <td width="251"><strong>10592 Sq.KM.</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>15. </strong><strong> </strong></td>
                                        <td width="240"><strong>Height from Sea Level </strong></td>
                                        <td width="251"><strong>50 Mts.</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>16. </strong><strong> </strong></td>
                                        <td width="240"><strong>Population</strong>
                                            <p></p>
                                            <p><strong>(Catchment area)</strong></p>
                                        </td>
                                        <td width="251"><strong>1.56 lakh (as per Census of 2011)</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>17. </strong><strong> </strong></td>
                                        <td width="240"><strong>Commissionary </strong></td>
                                        <td width="251"><strong>02 (Darbhanga &amp; Munger)</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>18. </strong><strong> </strong></td>
                                        <td width="240"><strong>District </strong></td>
                                        <td width="251"><strong>04 (Darbhnaga, Madhubani, Samastipur &amp;
                                                Begusarai)</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>19. </strong><strong> </strong></td>
                                        <td width="240"><strong>Feeder Area </strong></td>
                                        <td width="251"><strong>Nepal Border, Sitamarhi, Vaishali, Muzaffarpur, Saharsa,
                                                Purnia, Khagaria, Katihar</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>20. </strong><strong> </strong></td>
                                        <td width="240"><strong>Total No. of Trees and Plant</strong></td>
                                        <td width="251"><strong>1830</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>21. </strong><strong> </strong></td>
                                        <td width="240"><strong>No. of Rare plants in the University</strong></td>
                                        <td width="251"><strong>19</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>22 </strong><strong> </strong></td>
                                        <td width="240"><strong>Ponds and Nahar </strong></td>
                                        <td width="251"><strong>13</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="73"><strong>23. </strong></td>
                                        <td width="240"><strong>Valuable Trees </strong>
                                            <p></p>
                                            <p>1. Chandan</p>
                                            <p>2. Mayurpankhi</p>
                                            <p>3. Mohogni</p>
                                            <p>4. Aam</p>
                                            <p>5. Bhojpatra</p>
                                        </td>
                                        <td width="251">
                                            <p><strong>11</strong></p>
                                            <p><strong>08</strong></p>
                                            <p><strong>52</strong></p>
                                            <p><strong>637</strong></p>
                                            <p><strong>02</strong></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>&nbsp;</p>
                        </section>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
