@extends('Frontend.includes.layout')

@section('content')
    <!-- slider starts here -->

    <div class="container-fluid"
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;margin-bottom:40px;">
        <p class="text-center">PG Department of Maithili</p>
    </div>
    <!-- slider ends here -->


    <div class="container">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-4 col-sm-4">
                <div class="pic">
                    <img src="{{ asset('Frontend/images/department/mithila.jpg') }}">

                </div>
            </div>
            <main class="col-md-8 col-sm-8">
                <div class="col-md-12" id="content_main">
                    <h2><strong>About the Department</strong></h2>
                    <p style="text-align: justify;font-size:13px;">The department of Maithili was established in the University to propagate Maithili literature and culture. This University is in central place of Mithila region were Maithili language occupies prominent place. For this purpose the department is dedicated to promote loccal language.</p>
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
                                    <h4 class="title ">Former <span>HoD's</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email Id</th>
                                        <th>Period</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Prof. Ramnath Jha</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>1962-1962</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Prof. Surendra Jha ‘Suman’</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>1969-1973</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Shailendra Mohan Jha</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>1973-31.01.1991</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr. Navin Chandra Mishra</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>01.02.1991-06.02.1993</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Dr. Amar Nath Jha</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>07.02.1993-31.01.1997</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Dr. Nand Nandan Jha</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>01.02.1997-28.02.1997</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Dr. Shiv Shankar Jha ‘Kant’</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>01.03.1997-03.10.1999</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Dr. Laxman Chaudhary ‘Lalit’</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>04.10.1999-31.10.2005</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Dr. Neeta Jha</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>01.11.2005-07.11.2008</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Dr. Bhupendra Kumar Chaudhary</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>08.11.2008-31.08.2009</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Dr. Kuldhari Singh</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>01.09.2009-30.09.2009</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Dr. Jateshwar Jha ‘Jatil’</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>01.10.2009-31.01.2010</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Prof. (Dr.) Bina Thakur</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>01.02.2010-31.01.2013</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Prof. (Dr.) Dhirendra Nath Mishra</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>01.02.2013-31.01.2016</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Prof. (Dr.) Raman Jha</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>01.02.2016-31-01-2019</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Prof . (Dr.) Pritti  Jha</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>01.02.2019-30.04.2021</td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <td>Dr. Ramesh Jha</td>
                                        <td>Professor & Head</td>
                                        <td>9473107251</td>
                                        <td>hodmaithili@lnmu.ac.in</td>
                                        <td>
                                            <div class="user_icon">
                                                <img src="{{ asset('Frontend/images/faculty/Ramesh.jpg') }}"
                                                    alt="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Prof. (Dr)Raman Jha</td>
                                        <td>Professor</td>
                                        <td>8917358049<br><br>9431086290</td>
                                        <td>ramanmaithili@yahoo.com</td>
                                        <td>
                                            <div class="user_icon">
                                                <img src="{{ asset('Frontend/images/faculty/Prof.Raman Kumar.jpg') }}"
                                                    alt="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dr. Daman Kumar Jha</td>
                                        <td>Professor</td>
                                        <td>7004760408</td>
                                        <td>jhadaman32@gmail.com</td>
                                        <td>
                                            <div class="user_icon">
                                                <img src="{{ asset('Frontend/images/user.png') }}"
                                                    alt="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dr. Ashok Kumar Mehta</td>
                                        <td>Professor</td>
                                        <td>9430827941</td>
                                        <td>ashokmehta1996@gmail.com</td>
                                        <td>
                                            <div class="user_icon">
                                                <img src="{{ asset('Frontend/images/user.png') }}"
                                                    alt="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Dr. Narayan Jha</td>
                                        <td>Professor</td>
                                        <td>9431421457<br><br>8969789133</td>
                                        <td>vipul.snehi9@gmail.com</td>
                                        <td>
                                            <div class="user_icon">
                                                <img src="{{ asset('Frontend/images/faculty/Dr, Narayan Jha.jpg') }}"
                                                    alt="">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class=" col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-sm-7 col-xs-12">
                                    <h4 class="title">Achievements of <span>Faculty </span><span>Members</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                        <ul>
    <li><strong>Ramesh Jha:-</strong>Attended National Seminar. Published one book.</li>
    <li><strong> Raman Jha:- </strong>Attended several National seminars and resource person in several refresher courses (UGC), guide &amp; supervisor of several Ph.D. holders. More than  a dozen books published.</li>
    <li><strong>Daman Kumar Jha:-</strong>Attended National & international Seminar, Workshop, Symposium, eninent writer of Maiyhili, There research books writes & Sveral books edited. Guide & Supervisor of Several Ph.D research Scholers.</li>
    <li><strong>Ashok Kumar Mehta:-</strong>Attended National & international Seminar, Workshop, Symposium, eninent writer of Maiyhili, There research books writes & Sveral books edited. Guide & Supervisor of Several Ph.D research Scholers.</li>
    <li><strong>Narayan Jha:-</strong>Guide & Supervisor of Several Ph.D holder, many research paper published altended several National Seminar.</li>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class=" col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-sm-5 col-xs-12">
                                    <h4 class="title">Student <span>Statistics</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover width="100%">
                            
<thead>
<tr>
<td rowspan="2" width="271">Name of the Course</td>
<td rowspan="2" width="162"><strong>Applications received</strong></td>
<td colspan="2" width="168"><strong>Selected</strong></td>
<td colspan="2" width="236"><strong>Pass Percentage</strong></td>
</tr>
<tr>
<td width="90"><strong>Male</strong></td>
<td width="78"><strong>Female</strong></td>
<td width="119"><strong>Male</strong></td>
<td width="117"><strong>Female</strong></td>
</tr>
</thead>
<tr>
<td>2009-11 P.G. Maithili</td>
<td>15</td>
<td>4</td>
<td>5</td>
<td>100%</td>
<td>100%</td>
</tr>
<tr>
<td>2010-12</td>
<td>35</td>
<td>21</td>
<td>7</td>
<td>100%</td>
<td>100%</td>
</tr>
<tr>
<td>2011-13</td>
<td>33</td>
<td>17</td>
<td>10</td>
<td>100%</td>
<td>100%</td>
</tr>
<tr>
<td>2012-14</td>
<td>40</td>
<td>19</td>
<td>17</td>
<td>92%</td>
<td>100%</td>
</tr>
<tr>
<td>2014-16</td>
<td>23</td>
<td>15</td>
<td>08</td>
<td>100%</td>
<td>80%</td>
</tr>
<tr>
<td>2015-17</td>
<td>09</td>
<td>04</td>
<td>05</td>
<td>75%</td>
<td>100%</td>
</tr>
<tr>
<td>2016-18</td>
<td>03</td>
<td>02</td>
<td>01</td>
<td>100%</td>
<td>100%</td>
</tr>
<tr>
<td>2017-19</td>
<td>05</td>
<td>01</td>
<td>04</td>
<td>100%</td>
<td>100%</td>
</tr>
<tr>
<td>2018-20</td>
<td >10</td>
<td>05</td>
<td>05</td>
<td>100%</td>
<td>100%</td>
</tr>
<tr>
<td>2019-21</td>
<td>08</td>
<td>03</td>
<td>05</td>
<td>100%</td>
<td>100%</td>
</tr>
</tbody>
</table>
                        </div>
                    </div>
                </div>
            </div> 
        </div>


        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class=" col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-sm-7 col-xs-12">
                                    <h4 class="title">Achievements of <span>Students</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                        <ul>
   <p>Content to be uploaded soon:</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class=" col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-sm-5 col-xs-12">
                                    <h4 class="title">Research  <span>Scholars</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Name</th>
                                        <th>Supervisor</th>
                                        <th>Mobile</th>
                                        <th>Email Id</th>
                                        <th>Works</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Bandana Kumari</td>
                                        <td>Prof. (Dr.) Ptiti Jha</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>
                                        मैथिली साहित्य मे सुधांशु शेखर चौधरी के योगदान 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Roshan Kumar</td>
                                        <td>Prof. (Dr.) Narayan Jha</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>
                                        मधुकांत झाक मैथिलि साहित्यमे अवदानक विश्लेषण
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Satyanarayan Prasad Yadav</td>
                                        <td>Prof. (Dr.) Ashok Kumar Mehta</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>
                                        मैथिली कथा साहित्यमे पुनर्जागरणक स्वर
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Bibha Kumari</td>
                                        <td>Prof. (Dr.) Ptiti Jha</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>
                                        मैथिली साहित्यमे  रमानन्द रेणुक योगदान
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Bhogendra Prasad Singh</td>
                                        <td>Prof. (Dr.) Ptiti Jha</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>
                                        मैथिली  साहित्यमे  उपेन्द्र दोशीक योगदान
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Shiv Kumar Paswan</td>
                                        <td>Dr. Binod Kumar choudhary</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>
                                        मैथिली साहित्य विकासमे  गजेंद्र ठाकुरक योगदान
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   


        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class=" col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-sm-5 col-xs-12">
                                    <h4 class="title">Student <span> Progression</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover" border=1>
                                <thead>
                                    <tr>
                                        <td>Student Progression</td>
                                        <td>Percentage against enrolled</td>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                     <td>PG to Ph.D</td>
                      <td>Already mentioned</td>
                      
                                    </tr>
                                    <tr>
                      <td>Ph.D. to Post-Doctoral</td>
                      <td>Dr. Bina Thakur<br><br> Dr. Neeta Jha</td>
                      
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>            
        </div>



       
        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class=" col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-sm-7 col-xs-12">
                                    <h4 class="title"><span>Seminar/</span><span> Conference/</span><span>Workshop</span><span> Organized</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                        <ul>
                        <li>CIIL (Collaboration) Mysore &amp; Univ. Dept. of Maithili (Seminar) – 2011</li>
    <li>UGC sponsored 2 day Seminar with Univ. Dept. of Maithili – 3-4 Dec. 2014</li>
    <li>Workshop (translation work in Political Science &amp; Philosophy Dept., L.N.M.U., Darbhanga) – 2011</li>
    <li>2 day Translator’s orientation programme (NTM CIIL, Mysore) – 2011</li>
    <li>Participation in several seminar and workshop at different place all over the India (Mentioned in teachers profile)</li>
    <li>UGC seminar December, 2016</li>
    <li>Matribhasha Divas – 21 February 2017</li></ul>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class=" col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-sm-5 col-xs-12">
                                    <h4 class="title">Records</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover" border=1>
                                <thead>
                                    <tr>
                                        <td>Sr.No</td>
                                        <td>Name of the Programme</td>
                                        <td>Resource Person</td>
                                        <td>No. of Beneficeries</td>
                                        <td>Period</td>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                      <td>1.</td>
                      <td>Deliver Lecture</td>
                      <td>Dr. B. Jha ‘Vidit’ HOD Maithili S. K. University Dumka</td>
                      <td>P. G. Students &amp; Research Scholars Jharkhand</td>   
                      <td rowspan="2">2013-14</td>               
                                    </tr>
                                    <tr>
                      <td>2.</td>
                      <td>Deliver Lecture</td>
                      <td>Dr. D. Jha Ex-Head, Maithili B. R. A. Bihar University,Muzaffarpurrsity Dumka</td>
                      <td>P. G. Students &amp; Research Scholars</td>   
                                  
                                    </tr>
                                    <tr>
                      <td>3.</td>
                      <td>Deliver Lecture</td>
                      <td>Dr. Keshkar Thakur HOD, Maithili T. M. B. University,Bhagalpur</td>
                      <td>P. G. Students &amp; Research Scholars Jharkhand</td>   
                      <td>2012-13</td>               
                                    </tr>
                                   <tr>
                      <td>4.</td>
                      <td>Deliver Lecture</td>
                      <td>Dr. C. Jha Retd. Professor of Maithili Patna University</td>
                      <td>P. G. Students &amp; Research Scholars</td>   
                      <td>2013-14</td>               
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
        </div>


        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class=" col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-sm-5 col-xs-12">
                                    <h4 class="title">Infrastructural <span>Facilities</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                        <ul>
                        <li>Library (No. Inf.,S.f.) but 21,098 books including Thesis, Journals &amp; Magazines are available in the department.</li>
<li>Internet facilities for staff and students  :  No</li>
<li>Total number  of class rooms  :  02</li>
<li>Class rooms with ICT facility : Yes</li>
<li>Students&#8217; laboratories  : x</li>
<li>Research laboratories  : x</li>
<li>Wash rooms  : No</li>
<li>Girls Common room   :   x</li>
<li>Facilities for Women   :  No</li>
  </ul>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class=" col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-sm-5 col-xs-12">
                                    <h4 class="title">Supporting <span>staff</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover" border=1>
                                <thead>
                                    <tr>
                                        <td>Sl. No</td>
                                        <td>Name</td>
                                        <td>Designation</td>
                                        <td>Mobile</td>
                                        <td>E-mail id</td>
                                        <td>Photo</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                      <td>1</td>
                      <td>Anil Kumar</td>
                      <td>R.C.</td>
                      <td>9122640554</td>
                      <td>N/A</td>
                      <td>N/A</td>
                         </tr>
                         <tr>
                      <td>2</td>
                      <td>Khagendra Nath Jha</td>
                      <td>Machine Man</td>
                      <td>9709775096</td>
                      <td>N/A</td>
                      <td>N/A</td>
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
