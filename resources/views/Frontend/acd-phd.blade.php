@extends('Frontend.includes.layout')

@section('content')
    <div class="container" style="margin-bottom: 50px; margin-top:50px;">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            @include('Frontend.includes.sidebar.academics_menu')
            <main class="col-md-9 float-left" >
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Ph.D.</h2>
                </div>
                <div class="col-md-12" id="content_main">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="box2">
                                <div class="box-top">
                                    DCE - I
                                </div>
                                <img src="{{ asset('Frontend/images/officers/coe.jpeg') }}"
                                    style="height: 300px;width:500px;">
                                <div class="box-content">
                                    <h3 class="title">Dr. Sanjeet Kumar Jha</h3>
                                    <span class="post"> 8544513263,dec1@lnmu.ac.in</span>
                                </div>

                            </div>
                        </div>



                        <div class="col-md-8 col-sm-12">
                            <ul style="list-style-type:none;font-size:15px;border-radius:5px;
                            box-shadow:0px 0px 15px 5px grey;padding:20px;">
                                <li><a href="lnmuacin.in/studentnotice/2019/SOCIAL%20SCIENCE.pdf" target="_blank"
                                        rel="noopener noreferrer">List of Research Scholars in the Faculty of Social Science
                                    </a>
                                    <div class="sendToPdfFiller"
                                        data-url="https://lnmu.ac.in/lnmuacin.in/studentnotice/2019/SOCIAL%20SCIENCE.pdf"
                                        style="position: static; width: 40px; display: inline-block; margin-left: 10px;"
                                        title="Open with pdfFiller"></div>
                                </li>


                                <li><a href="lnmuacin.in/studentnotice/2019/HUMANITIES.pdf" target="_blank"
                                        rel="noopener noreferrer">List of Research Scholars in the Faculty of Humanities
                                    </a>
                                    <div class="sendToPdfFiller"
                                        data-url="https://lnmu.ac.in/lnmuacin.in/studentnotice/2019/HUMANITIES.pdf"
                                        style="position: static; width: 40px; display: inline-block; margin-left: 10px;"
                                        title="Open with pdfFiller">
                                    </div>&nbsp;
                                </li>
                                <li><a href="lnmuacin.in/studentnotice/2019/SCIENCE.pdf" target="_blank"
                                        rel="noopener noreferrer">List of Research Scholars in the Faculty of Science </a>
                                    <div class="sendToPdfFiller"
                                        data-url="https://lnmu.ac.in/lnmuacin.in/studentnotice/2019/SCIENCE.pdf"
                                        style="position: static; width: 40px; display: inline-block; margin-left: 10px;"
                                        title="Open with pdfFiller"></div>&nbsp;
                                </li>
                                <li><a href="https://lnmuacin.in/studentnotice/phd/Ph%20D%20Regulations%20LNMU%20Darbhanga-min.pdf"
                                        target="_blank" rel="noopener noreferrer">Ph.D. Regulations 2012</a>
                                    <div class="sendToPdfFiller"
                                        data-url="https://lnmuacin.in/studentnotice/phd/Ph%20D%20Regulations%20LNMU%20Darbhanga-min.pdf"
                                        style="position: static; width: 40px; display: inline-block; margin-left: 10px;"
                                        title="Open with pdfFiller"></div>
                                </li>

                                <li><a href="https://lnmuacin.in/studentnotice/Administration%20related%20pdf/Regulation%20-2016-min.pdf"
                                        target="_blank" rel="noopener noreferrer">Ph.D. Regulations 2016</a>
                                    <div class="sendToPdfFiller"
                                        data-url="https://lnmuacin.in/studentnotice/Administration%20related%20pdf/Regulation%20-2016-min.pdf"
                                        style="position: static; width: 40px; display: inline-block; margin-left: 10px;"
                                        title="Open with pdfFiller"></div>
                                </li>
                                <li><a href="https://lnmuacin.in/studentnotice/2021/Ph.D Regulations  2017.pdf"
                                        target="_blank" rel="noopener noreferrer">Ph.D. Regulations 2017</a>
                                    <div class="sendToPdfFiller"
                                        data-url="https://lnmuacin.in/studentnotice/2021/Ph.D Regulations  2017.pdf"
                                        style="position: static; width: 40px; display: inline-block; margin-left: 10px;"
                                        title="Open with pdfFiller"></div>
                                </li>
                                <li><a href="https://lnmuacin.in/studentnotice/2021/Ph.D Regulations  2018.pdf"
                                        target="_blank" rel="noopener noreferrer">Ph.D. Regulations 2018</a>
                                    <div class="sendToPdfFiller"
                                        data-url="https://lnmuacin.in/studentnotice/2021/Ph.D Regulations  2018.pdf"
                                        style="position: static; width: 40px; display: inline-block; margin-left: 10px;"
                                        title="Open with pdfFiller"></div>
                                </li>

                                <li><a href="https://lnmuacin.in/studentnotice/2019/mathili%20department%20ph.d._19.pdf">Click
                                        here to view the details of Ph.D awarded by LNMU.</a>
                                    <div class="sendToPdfFiller"
                                        data-url="https://lnmuacin.in/studentnotice/2019/mathili%20department%20ph.d._19.pdf"
                                        style="position: static; width: 40px; display: inline-block; margin-left: 10px;"
                                        title="Open with pdfFiller"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
