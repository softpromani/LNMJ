@extends('Frontend.includes.layout')
@section('content')
     <!-- slider starts here -->
     <section id="yt_spotlight1" class="block mb30">
        <div class="container">
            <div class="row">
            <div id="slideshow" class="col-sm-12">
                <div id="sj_k2slickslider346" class="sj-k2slickslider slide slickslider-right" data-interval="5000" data-pause="hover">
                    <!-- Carousel items -->
                    <div class="slickslider-items bg-style1">
                        <div class="slickslider-item item clearfix active">
                            <div class="images-slideshow"><img alt="" src="{{asset('Frontend/images/internal%20banners/banner119.jpg')}}"/></div>
                            <div class="item-content">
                                <div class="item-content-inner">
                                    <h5 class="item-title" >
                                        <a href="#" style="color:#7C0000" title="" >Home</a> | <a href="#" style="color:#7C0000" title="" >Criteria</a>
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
            <div class="col-md-3 float-left col-1 pl-0 pr-0  width" id="sidebar">
                @include('Frontend.includes.sidebar.iqac_menu')
            </div>
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">AQAR 2020-21</h2>
                </div>



                <div class="row">
                    <div class="col-md-12">
                        <div class="tab" role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#Section1" aria-controls="home"
                                        role="tab" data-toggle="tab">Criteria 1</a></li>
                                <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab"
                                        data-toggle="tab">Criteria 2</a></li>
                                <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab"
                                        data-toggle="tab">Criteria 3</a></li>
                                <li role="presentation"><a href="#Section4" aria-controls="home" role="tab"
                                        data-toggle="tab">Criteria 4</a></li>
                                <li role="presentation"><a href="#Section5" aria-controls="profile" role="tab"
                                        data-toggle="tab">Criteria 5</a></li>
                                <li role="presentation"><a href="#Section6" aria-controls="messages" role="tab"
                                        data-toggle="tab">Criteria 6</a></li>
                                <li role="presentation"><a href="#Section7" aria-controls="messages" role="tab"
                                        data-toggle="tab">Criteria 7</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                                <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseOne"
                                                                aria-expanded="false" aria-controls="collapseOne">
                                                                Curricular Aspects
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingOne">
                                                        <div class="panel-body text-justify">
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse1" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.1. Number of new courses introduced of the total number of courses across all programs offered. </a>
                                                            <div class="collapse" id="Collapse1">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse2" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.2. Number of Programmes where syllabus revision was carried out. </a>
                                                            <div class="collapse" id="Collapse2">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>


                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse4" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.3.1: Number of courses having focus on employability skill development. </a>
                                                            <div class="collapse" id="Collapse4">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse5" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.3. Total number of courses having focus on employability skill development offered by the University. </a>
                                                            <div class="collapse" id="Collapse5">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse6" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.1. Number of new courses introduced of the total number of courses across all programs offered. </a>
                                                            <div class="collapse" id="Collapse6">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse7" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.2. Number of Programmes in which (CBCS)/elective course system has been implemented. </a>
                                                            <div class="collapse" id="Collapse7">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Number of students undertaking field projects / research projects / internships </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse9" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4.structure feedback for design and review of syllabus-semester wise/is received. </a>
                                                            <div class="collapse" id="Collapse9">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse10" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Number of value-added courses for imparting transferable and life skills offered.1..3.<br/>Total number of students enrolled in the courses under 1.3.2 above. </a>
                                                            <div class="collapse" id="Collapse10">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse3" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.4.2. Feedback processes of the institution </a>
                                                            <div class="collapse" id="Collapse3">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="Section2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                Teaching-Learning and Evaluation
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingTwo">
                                                        <div class="panel-body text-justify">
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse1" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.1. Demand ratio. </a>
                                                            <div class="collapse" id="Collapse1">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div><br/>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse2" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.2. Total number of seats filled against reserved categories. </a>
                                                            <div class="collapse" id="Collapse2">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div><br/>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse3" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.4.2.student-Full time teacher ratio </a>
                                                            <div class="collapse" id="Collapse3">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse4" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.3.1:Ratio of students to mentor for academic and other related issues. </a>
                                                            <div class="collapse" id="Collapse4">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse5" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.3.Total number of full time teachers against sanchioned posts . </a>
                                                            <div class="collapse" id="Collapse5">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse6" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.1.Total numbers of full time teachers with Ph.D./D.M/M.Ch./D.N.B super speciality/D.Sc./D.lit. </a>
                                                            <div class="collapse" id="Collapse6">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse7" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.2.Total teaching experience of full time teachers in the same institution. </a>
                                                            <div class="collapse" id="Collapse7">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Total number of full time teachers who recieved awards,recognition,fellowship </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>


                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Number of days from the date of last semester-end/year-end examination till the declaration of results </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>


                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4.Total number of student complaints/grievances about evalution against total number appeared in the examinations. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>


                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4.status of automations of examination division along with approved Examination manual </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>


                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Number of students passed. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div><br/>


                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4.Students satisfaction survey. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="Section3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseThree"
                                                                aria-expanded="false" aria-controls="collapseThree">
                                                               Research,Innovations and Extension
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingThree">
                                                        <div class="panel-body text-justify">
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse1" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.1.The institution provides seed money to its teachers for research{amount INR in lakhs}. </a>
                                                            <div class="collapse" id="Collapse1">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse2" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.2.Number of teachers receiving national/international fellowship/financial support by various agencies <br/>advanced studies/research. </a>
                                                            <div class="collapse" id="Collapse2">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse3" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.4.2.Number of JRFs,SRFs,Post-Doctoral Fellows.Research Associates and other research fellows enrolled  <br/> in the insititution </a>
                                                            <div class="collapse" id="Collapse3">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse4" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.3.1:Institution has the following facilities to support research. </a>
                                                            <div class="collapse" id="Collapse4">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse5" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.3.Number of departments with UGC-SAP,CAS,DST-FIST,DBT,ICSSR and other recognitions by national and <br/> international agencies. </a>
                                                            <div class="collapse" id="Collapse5">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse6" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.1. Extramural funding for Research{INR in Lakhs}. </a>
                                                            <div class="collapse" id="Collapse6">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse7" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.2.Grants for research projects sponsored by the government agencies{INR in Lakhs}. </a>
                                                            <div class="collapse" id="Collapse7">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Number of research projects funded by government and non-government agencies </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4.Numbers of workshops/seminars conducted on Research methodology,Intellectual property Right {IPR},<br/>enterpreneurship,skill development. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4.Number of awards/recognitions received for research/innovations by the institution/teachers/research scolars/students </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4.The institution provides incentives to teachers who receive state,national and internatinal recognitions/awards. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. The institutions ensures implementation of its stated code of Ethics for reaserch. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Number of patents published/awarded. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4.Number of Ph.Ds awarded.3.4.4.1:How many Ph.Ds are awarded during the year?3.4.4.2:Number of <br/> teachers recognized as guides. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4.Number of research pagers in the journals notified on UGC websites. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4.Number of books and chapters in edited volumes published. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. E-content is developed by teachers. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4.Bibliometrics of the publications during the year based on average citation Index in Scopus/web of Science/pubmed. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Bibliometrics of the publications during the year based on scopus/web of science-h-Index of the University. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Revenue generated from consultancy and corporate training {INR in Lakhs}. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4.Number of awards received by the institution,its teachers and students. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Number of extension and outreach programs conducted bt the institution. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4.Total number of students participating extension activities listed at 3.6.3 above. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Number of collaborative activities with other institutions/reseach establishment/industry for research  <br/>and academic development. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Number of functional MoUs with institutions/industries in india and abroad. </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="Section4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingFour">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseFour"
                                                                aria-expanded="false" aria-controls="collapseFour">
                                                                Curricular Aspects
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingFour">
                                                        <div class="panel-body text-justify">
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse1" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.1. Number of new courses introduced of the total number of courses across all programs offered. </a>
                                                            <div class="collapse" id="Collapse1">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse2" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.2. Number of Programmes where syllabus revision was carried out. </a>
                                                            <div class="collapse" id="Collapse2">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse3" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.4.2. Feedback processes of the institution </a>
                                                            <div class="collapse" id="Collapse3">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse4" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.3.1: Number of courses having focus on employability skill development. </a>
                                                            <div class="collapse" id="Collapse4">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse5" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.3. Total number of courses having focus on employability skill development offered by the University. </a>
                                                            <div class="collapse" id="Collapse5">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse6" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.1. Number of new courses introduced of the total number of courses across all programs offered. </a>
                                                            <div class="collapse" id="Collapse6">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse7" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.2. Number of Programmes in which (CBCS)/elective course system has been implemented. </a>
                                                            <div class="collapse" id="Collapse7">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Number of students undertaking field projects / research projects / internships </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="Section5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingfive">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapsefive"
                                                                aria-expanded="false" aria-controls="collapseFive">
                                                                Curricular Aspects
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingFive">
                                                        <div class="panel-body text-justify">
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse1" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.1. Number of new courses introduced of the total number of courses across all programs offered. </a>
                                                            <div class="collapse" id="Collapse1">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse2" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.2. Number of Programmes where syllabus revision was carried out. </a>
                                                            <div class="collapse" id="Collapse2">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse3" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.4.2. Feedback processes of the institution </a>
                                                            <div class="collapse" id="Collapse3">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse4" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.3.1: Number of courses having focus on employability skill development. </a>
                                                            <div class="collapse" id="Collapse4">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse5" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.3. Total number of courses having focus on employability skill development offered by the University. </a>
                                                            <div class="collapse" id="Collapse5">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse6" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.1. Number of new courses introduced of the total number of courses across all programs offered. </a>
                                                            <div class="collapse" id="Collapse6">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse7" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.2. Number of Programmes in which (CBCS)/elective course system has been implemented. </a>
                                                            <div class="collapse" id="Collapse7">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Number of students undertaking field projects / research projects / internships </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="Section6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingsix">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapsesix"
                                                                aria-expanded="false" aria-controls="collapsesix">
                                                                Curricular Aspects
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingsix">
                                                        <div class="panel-body text-justify">
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse1" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.1. Number of new courses introduced of the total number of courses across all programs offered. </a>
                                                            <div class="collapse" id="Collapse1">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse2" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.2. Number of Programmes where syllabus revision was carried out. </a>
                                                            <div class="collapse" id="Collapse2">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse3" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.4.2. Feedback processes of the institution </a>
                                                            <div class="collapse" id="Collapse3">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse4" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.3.1: Number of courses having focus on employability skill development. </a>
                                                            <div class="collapse" id="Collapse4">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse5" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.3. Total number of courses having focus on employability skill development offered by the University. </a>
                                                            <div class="collapse" id="Collapse5">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse6" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.1. Number of new courses introduced of the total number of courses across all programs offered. </a>
                                                            <div class="collapse" id="Collapse6">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse7" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.2. Number of Programmes in which (CBCS)/elective course system has been implemented. </a>
                                                            <div class="collapse" id="Collapse7">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Number of students undertaking field projects / research projects / internships </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="Section7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingseven">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseseven"
                                                                aria-expanded="false" aria-controls="collapseseven">
                                                                Curricular Aspects
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseseven" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="heading">
                                                        <div class="panel-body text-justify">
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse1" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.1. Number of new courses introduced of the total number of courses across all programs offered. </a>
                                                            <div class="collapse" id="Collapse1">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse2" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.2. Number of Programmes where syllabus revision was carried out. </a>
                                                            <div class="collapse" id="Collapse2">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse3" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.4.2. Feedback processes of the institution </a>
                                                            <div class="collapse" id="Collapse3">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse4" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.3.1: Number of courses having focus on employability skill development. </a>
                                                            <div class="collapse" id="Collapse4">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse5" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.1.3. Total number of courses having focus on employability skill development offered by the University. </a>
                                                            <div class="collapse" id="Collapse5">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse6" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.1. Number of new courses introduced of the total number of courses across all programs offered. </a>
                                                            <div class="collapse" id="Collapse6">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse7" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.2.2. Number of Programmes in which (CBCS)/elective course system has been implemented. </a>
                                                            <div class="collapse" id="Collapse7">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse" href="#Collapse8" role="button" aria-expanded="false" aria-controls="myCollapseExample" style="margin-bottom: 12px;">1.3.4. Number of students undertaking field projects / research projects / internships </a>
                                                            <div class="collapse" id="Collapse8">
                                                               <div class="card card-body">
                                                                  No data uploaded
                                                               </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
