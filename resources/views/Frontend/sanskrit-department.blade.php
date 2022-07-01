@extends('Frontend.includes.layout')

@section('content')
    <!-- slider starts here -->

    <div class="container-fluid"
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;margin-bottom:40px;">
        <p class="text-center">PG Department of Sanskrit</p>
    </div>
    <!-- slider ends here -->


    <div class="container">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-4 col-sm-4">
                <div class="pic">
                    <img src="{{ asset('Frontend/images/department/sanskrit.jpg') }}">

                </div>
            </div>
            <main class="col-md-8 col-sm-8">
                <div class="col-md-12" id="content_main">
                    <h2><strong>About the Department</strong></h2>
                    <p style="text-align: justify;font-size:13px;">Established in 1979 with Late Dr. Trilok Nath Jha as head and two other faculty members. The department has been rendering valuable contribution in the field of oriental learning by producing quality research output and alumni.</p>
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
                                    <h4 class="title ">Programmes <span>organized</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
<th width="115">Session</th>
<th width="112">Dated</th>
<th width="113">Name of Programme</th>
<th width="112">Resource Person with Name</th>
<th width="113">No. of Beneficiaries</th>
<th width="123">Outcome</th>
</tr>
                                </thead>
                                <tbody>
                                <tr>
<td width="115">2015-16</td>
<td width="113">29.08.2015</td>
<td width="112">UGC Sminar on "संस्कृतवाधभय नीतित्त्वम "</td>
<td width="113">02</td>
<td width="123">75</td>
<td width="123">Most Inspiring</td>
</tr>
<tr>
<td width="115">N/A</td>
<td width="113">12,13 Jan 2016</td>
<td width="112">विवेकानंद जयन्ती समारोह</td>
<td width="113">05</td>
<td width="123">150</td>
<td width="123">Highly Motivating</td>
</tr>
<tr>
<td width="115">N/A</td>
<td width="113">14.03.2016</td>
<td width="112">:याज्ञवल्भ्य के प्रति हमारा कर्तव्य एक विमर्श "</td>
<td width="113">04</td>
<td width="123">95</td>
<td width="112">Cuttural Bridge between Bihar & Karnatka</td>
</tr>
<tr>
<td width="115">N/A</td>
<td width="113">19.04.2016</td>
<td width="112">सेवा परमो धर्मः एक दिवसीय राष्ट्रय संगोश्ठी</td>
<td width="113">02</td>
<td width="123">92</td>
<td width="112">Encouraging Philanthropic Values</td>
</tr>
<tr>
<td width="115">2016-17</td>
<td width="113">16,17 July 2016</td>
<td width="112">दिउ दिवसीय राष्ट्रीय संगोष्ठी विषय- In the contribution of Sri Anandmurti Oranised by P.G. Department of Sanskrit. In Collaboration with Renaissance Universal (RU) Kolkata.</td>
<td width="113">1. Dr. A.K. Bhaskar Dept. Of Philosophy Magadh University <br>2. Dr. Ram Nath Jha J.N.U.New Delhi </td>
<td width="123">68</td>
<td width="112">Excellent</td>
</tr>
<tr>
<td width="115">N/A</td>
<td width="112">18.08.2016</td>
<td width="113">संस्कृत दिवस समारोह</td>
<td width="123">डॉ  उपेन्द्र झा वैदिक वेद बिभागध्यक्ष का सिद्ध स वि. वि दरभंगा</td>
<td width="112">70</td>
<td width="112">Encouraging </td>
</tr>
<tr>
<td width="115">N/A</td>
<td width="113">12.01.2017</td>
<td width="112">स्वामी विवेकानन्द जयन्ती</td>
<td width="113">प्रो.साकेत कुशवाहा कुलपति ल ना  डॉ. विनय कुमार मिश्रा वेद विभाग</td>
<td width="123">75</td>
<td width="112">Excellent</td>
</tr>
<tr>
<td width="115">N/A</td>
<td width="113">24.01.2017</td>
<td width="112">UGC Sponsored International Seminar on "संस्कृते वैज्ञानिक वाङ्मयसय विवेचनम"</td>
<td width="113">Chair Person V.C Dr. Govind Chy. Nepal Sanskrit Unversity. <br>Dr. Anil Kumar jha Nepal Sanskrit University.<br> Dr. kailash Jha </td>
<td width="123">108</td>
<td width="112">Excellent</td>
</tr>
<tr>
<td width="115">2017-18</td>
<td width="113">07.08.2017</td>
<td width="112">संस्कृत दिवस समारोह</td>
<td width="113">President. V.C of L.N.M.U </td>
<td width="123">72</td>
<td width="112">Inspiring</td>
</tr>
<tr>
<td width="115">N/A</td>
<td width="113">28.03.2018</td>
<td width="112"> UGC Sponsored  National Seminar on "रसो वै सः"</td>
<td width="113">Prof. Chandra kant Shukla Ex.HOD. Sanskrit Ranchi University </td>
<td width="123">100</td>
<td width="112">Excellent</td>
</tr>
<tr>
<td width="115">2018-19</td>
<td width="113">25.08.2018</td>
<td width="112">डॉ प्रभात दास फाउंडेशन की सहभागिता से राष्ट्रीय सेमिनार (Sanskrit as a Universal Language )</td>
<td width="113">पो. देव नारायण झा <br>पो. श्रीपति त्रिपाठी K.S.D.S.U</td>
<td width="123">58</td>
<td width="112">Inspiring</td>
</tr>
<tr>
<td width="115">2018-19</td>
<td width="113">1-10 August 2019</td>
<td width="112">संस्कृत दिवस समारोह (लोक भाषा संस्कृत प्रचार समिति के सहयोग से )<br>(दस दिवसीय  संस्कृत सम्भाषण शिविर )</td>
<td width="113">पो देवनारायण झा K.S.D.S.U<br>
पो विनय कुमार मिश्रा K.S.D.S.U</td>
<td width="123">45</td>
<td width="112">Inspiring</td>
</tr>
<tr>
<td width="115">2019-20</td>
<td width="113">16.01.2020</td>
<td width="112">"कालिदास एवं विद्यापति  की रचनाओं में प्रेमतत्व " (राष्ट्रीय सेमिनार )</td>
<td width="113">पो. देवनारायण झा Ex V.C K.S.D.S.U <br>
पो. यू पी सिंह B.H.U वाराणसी</td>
<td width="123">80</td>
<td width="112">Excellent</td>
</tr>
<tr>
<td width="115">2019-20</td>
<td width="113">23.01.2020</td>
<td width="112">संस्कृत विभाग एवं मदन मोहन मलबीय मिशन के संयुक्त तत्वावधान में राष्ट्रीय / काशी-मिथिला की शिक्षा क्रांति  के अग्रदूत महाराजा रामेश्वर सिंह एवं पंडित मदन मोहन मालवीय "</td>
<td width="113">पो. सुरेंद्र कुमार सिंह L.N.M.U<br>
डॉ. जयशंकर झा</td>
<td width="123">60</td>
<td width="112">Excellent</td>
</tr>
<tr>
<td width="115">2019-20</td>
<td width="113">27.02.2020</td>
<td width="112">"शिक्षा ,शिक्षक और समाज "</td>
<td width="113">चित्रकूट दिव्यांका  विश्व विधालय सतना के आजीवन कुलपति रामभद्राचार्य </td>
<td width="123">90</td>
<td width="112">Excellent</td>
</tr>
<tr>
<td width="115">2021</td>
<td width="113">07-04-2021</td>
<td width="112">द्विदिवसीय अंतरराष्ट्रीय सेमिनार</td>
<td width="113">संवेदनशील समाज के निर्माण में संस्कृत की भूमिका</td>
<td width="123">N/A</td>
<td width="112">N/A</td>
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
                                        <td>Prof. J.N. Jha</td>
                                        <td>Professor & Head</td>
                                        <td>9934241993<br><br> 7004367982</td>
                                        <td>jeevanandjhanawani@gmail.com<br>hodsanskrit@lnmu.ac.in</td>
                                        <td><div class="user_icon">
                                                <img src="{{ asset('Frontend/images/user.png') }}"
                                                    alt="">
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Mamta Snehi </td>
                                        <td>Assistant Professor</td>
                                        <td>9747191097</td>
                                        <td>mamtasnehi111@gmail.com</td>
                                        <td><div class="user_icon">
                                                <img src="{{ asset('Frontend/images/user.png') }}"
                                                    alt="">
                                            </div></td>
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
                                    <h4 class="title">Name of <span>Ex-Heads </span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                        <li>Dr. Trilok Nath Jha</li>
<li>Dr. Parmanand Jha Shastri</li>
<li>Dr. Kalika Dutta Jha</li>
<li>Dr. Sandhya Dutta</li>
<li>Dr. Shrivardhan Thakur</li>
<li>Dr. Ramesh Jha</li>
<li>Dr. Kamal Nath Jha</li>
<li>Prof. Ram Nath Singh</li>
<li>Dr. K.C. Singh</li>
<li>Dr. Nirja Mishra</li>
<li>Prof. J.N. Jha (Present)</li></ul>
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
                                    <h4 class="title">Student <span>Profile</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover width="100%">
                            
<thead>
<tr>
<td rowspan="2" width="92"><strong>Name of the course</strong></td>
<td rowspan="2" width="103"><strong>Applications Received</strong></td>
<td style="text-align: center;" colspan="2" width="177"><strong>Selected</strong></td>
<td style="text-align: center;" colspan="2" width="180"><strong>Pass Percentage</strong></td>
</tr>
<tr>
<td width="90"><strong>Male</strong></td>
<td width="78"><strong>Female</strong></td>
<td width="119"><strong>Male</strong></td>
<td width="117"><strong>Female</strong></td>
</tr>
</thead>
<tr>
<td width="92">M.A</td>
<td width="103">66</td>
<td style="text-align: center;" width="94">37</td>
<td style="text-align: center;" width="82">29</td>
</tr>
<tr>
<td width="92">Ph. D.</td>
<td width="103">25</td>
<td style="text-align: center;" width="94">18</td>
<td style="text-align: center;" width="82">7</td>
<td style="text-align: center;" width="98">80%</td>
<td style="text-align: center;" width="82">20%</td>
</tr>
<tr>
<td width="92">D.Lit</td>
<td width="103">Nil</td>
<td style="text-align: center;" width="94">Nil</td>
<td style="text-align: center;" width="82">Nil</td>
<td style="text-align: center;" width="98"></td>
<td style="text-align: center;" width="82"></td>
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
                                    <h4 class="title">Student Progress</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                        <p>Student Achievement:</p>
                        <ul>
<li>NET-01</li>
<li>JRF-02</li>
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
                                    <h4 class="title">Infrastructural <span>Facilities</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                        <ul>
                        <li>Class Room &#8211; 04</li>
<li>Wash Room   &#8211; 01</li>
<li>Staffroom & Office &#8211; 01</li>
<li>Common Room &#8211; Nil </li>
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
                                <div class="col col-sm-7 col-xs-12">
                                    <h4 class="title">Ph.D. Produced in last 5 years</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                        <ul>
   <p>More than 76 scholars in last 5 years.<</p>
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
                      <td>Sri. Sachin Sharma</td>
                      <td>Assistant</td>
                      <td>8051227600</td>
                      <td>sachinbodhgaya@gmail.com</td>
                      <td><div class="user_icon">
                                                <img src="{{ asset('Frontend/images/faculty/sachin.jpg') }}"
                                                    alt="">
                                            </div></td>
                         </tr>
                         <tr>
                      <td>2</td>
                      <td>Sri. Uday Kumar Udesh</td>
                      <td>Computer Operator</td>
                      <td>9709450403</td>
                      <td>udaykkaran82@gmail.com</td>
                      <td><div class="user_icon">
                                                <img src="{{ asset('Frontend/images/faculty/uday.jpg') }}"
                                                    alt="">
                                            </div></td>
                         </tr>  
                         <tr>
                      <td>3</td>
                      <td>Sri Yogendra Paswan</td>
                      <td>IVth Grade</td>
                      <td>9386314506</td>
                      <td>N/A</td>
                      <td><div class="user_icon">
                                                <img src="{{ asset('Frontend/images/user.png') }}"
                                                    alt="">
                                            </div></td>
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
