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
                        <div class="itemListView gridview" id="k2Container">
                            <p>The University has a vision of developing, enhancing, and improving the quality of human
                                resources to meet the challenges of regional, national and global socio-economic changes.
                                It's mission is to achieve excellence in teaching and research and to create opportunities
                                for the students to contribute to the national and regional development.</p>
                            <h2>Accreditation:</h2>
                            <p>L.N.M University is re-accredited by the National Assessment and Accreditation Council (an
                                Autonomous Institution of the University Grants Commission) as 'B+' Grade University.</p>

                            <h2>The University with:</h2>
                            <table width="70%" border="1">
                                <tr>
                                    <td width="10%">12</td>
                                    <td>Faculties</td>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>Departments</td>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>Teaching staff</td>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>Non-Teaching staff</td>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>Teaching staff (Contract Basis)</td>
                                </tr>
                            </table>
                            <p></p>
                            <h2>The University offers:</h2>
                            <table width="70%" border="1">
                                <tr>
                                    <td width="10%">0</td>
                                    <td>UG Programmes</td>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>PG courses</td>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>PG Diplomas</td>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>Research Programmes at M.Phil. and Ph.D. levels</td>
                                </tr>
                                <tr>
                                    <td>0</td>
                                    <td>Certificate Programmes</td>
                                </tr>
                            </table>
                            <p></p>


                            <h2>Faculty and Staff Statistics:</h2>
                            <table width="70%" border="1">
                                <tr>
                                    <td>Professors </td>
                                    <td width="10%">0</td>
                                </tr>
                                <tr>
                                    <td>Emeritus Professors</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Associate Professors</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Assistant Professors</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Employees</td>
                                    <td>0</td>
                                </tr>
                            </table>
                            <p></p>
                            <h2>University Non-teaching Staff:</h2>
                            <table width="70%" border="1">
                                <tr>
                                    <td>Permanent</td>
                                    <td width="10%">0</td>
                                </tr>
                                <tr>
                                    <td>Temporary </td>
                                    <td>0</td>
                                </tr>
                            </table>
                            <p></p>
                            <h2>Total number of registered Ph.D Scholars:</h2>
                            <table width="70%" border="2">
                                <tr>
                                    <td>Faculty</td>
                                    <td width="10%">Total</td>
                                </tr>
                                <tr>
                                    <td>Arts</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Commerce</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Education</td>
                                    <td>0</td>
                                </tr>



                                <tr>
                                    <td>Management</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Oriental Languages</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Science</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>Social Sciences</td>
                                    <td>0</td>
                                </tr>

                            </table>

                            <p></p>
                            <h2>Number of Research papers / Books published by University teachers( previous academic year):
                            </h2>
                            <table width="70%" border="1">
                                <tr>
                                    <td>No. of Research Papers published</td>
                                    <td width="10%">0</td>
                                </tr>
                                <tr>
                                    <td>No. of Books published</td>
                                    <td>0</td>
                                </tr>
                            </table>
                            <p></p>
                            <h2>No. of ongoing Research projects in the University:</h2>
                            <table width="70%" border="1">
                                <tr>
                                    <td>Project outlay 2.0 lack and above</td>
                                    <td width="10%">0</td>
                                </tr>
                                <tr>
                                    <td>Project outlay below ` 2.0 lack</td>
                                    <td>62</td>
                                </tr>
                            </table>

                        </div>


                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
