@extends('Frontend.includes.layout')

@section('content')
<!-- slider starts here -->

<div class="container-fluid" style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;margin-bottom:40px;">
    <p class="text-center">PG Department of Philosophy</p>
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
                <p style="text-align: justify;font-size:13px;">The department of philosophy was started in 1979 with aim and objective to impart qualitative teaching and conduct research in Philosophy and allied subjects. The department is committed to bring out the best potential of its students to develop them as empowered and envisioned citizens of Indian Society. The department possesses a team of able and sensitive faculty members striving to promote among the prospective moralists with cultural understanding, social responsibility and true spiritual leader of the country.</p>
                <p style="text-align: justify; font-size:13px;">The department is known for its discipline and student-friendly environment providing excellent technological facilities, a rich library, regular seminars, and potent research experiences. The department has rich library with books and journals. It organizes extra- Mural Lectures, Refresher Courses, Special Lectures on world Philosophy Day, Conferences, Seminars and discussions on various Philosophical issues regularly.</p>

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
                                    <th width="40">S. No.</th>
                                    <th width="147">Name of the Programme</th>
                                    <th colspan="2" width="196">Resource Persons</th>
                                    <th width="109">No. of Beneficiaries</th>
                                    <th width="145">Outcome</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="40">1.</td>
                                    <td width="147">UGC sponsored</td>
                                    <td width="24">1.</td>
                                    <td width="172">Dr. Ramjee Singh</td>
                                    <td width="109">110</td>
                                    <td width="145">Emphasis on</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">National seminar</td>
                                    <td colspan="2" width="196">Eminent Gandhian</td>
                                    <td width="109"></td>
                                    <td width="145">Interdisciplinary</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">on ‘Philosophy of</td>
                                    <td colspan="2" width="196">thinker</td>
                                    <td width="109"></td>
                                    <td width="145">approach on job</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">Education’ (15-17</td>
                                    <td width="24">2.</td>
                                    <td width="172">Dr. C.B.Sharma,</td>
                                    <td width="109"></td>
                                    <td width="145">oriented education,</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">March 2012)</td>
                                    <td width="24"></td>
                                    <td width="172">IGNOU, New Delhi</td>
                                    <td width="109"></td>
                                    <td width="145">Role of ICT &amp; skill</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="24">3.</td>
                                    <td width="172">Dr. Anil Shukla</td>
                                    <td width="109"></td>
                                    <td width="145">development</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="24"></td>
                                    <td width="172">Lucknow University</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td colspan="2" width="196">4. Dr. S. K. Singh PVC,</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="24"></td>
                                    <td width="172">KSDSU</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="24">5.</td>
                                    <td width="172">Dr. A. Pandey VC,</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="24"></td>
                                    <td width="172">KSDSU</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr style="background-color:lightgrey;">
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td colspan="2" width="196"></td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40">2.</td>
                                    <td width="147">UGC sponsored</td>
                                    <td colspan="2" width="196">Dr. Rakesh Mishra</td>
                                    <td width="109">30</td>
                                    <td width="145">Spread of Buddhism</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">Lecture on</td>
                                    <td colspan="2" width="196">University of Jammu,</td>
                                    <td width="109"></td>
                                    <td width="145">in other countries</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">Buddhism</td>
                                    <td colspan="2" width="196">Jammu</td>
                                    <td width="109"></td>
                                    <td width="145">through commercial</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="24"></td>
                                    <td width="172"></td>
                                    <td width="109"></td>
                                    <td width="145">movement.</td>
                                </tr>
                                <tr style="background-color:lightgrey;">
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td colspan="2" width="196"></td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40">3.</td>
                                    <td width="147">Indian</td>
                                    <td colspan="2" width="196">Under the Presidentship</td>
                                    <td width="109">345</td>
                                    <td width="145">Reshaping of</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">Philosophical</td>
                                    <td colspan="2" width="196">of Prof. T.A. Ganpati,</td>
                                    <td width="109">delegates</td>
                                    <td width="145">Philosophical</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">Congress</td>
                                    <td colspan="2" width="196">Chennai</td>
                                    <td width="109">from all over</td>
                                    <td width="145">techniques,</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">87<sup>th</sup>session (Nov,</td>
                                    <td width="24"></td>
                                    <td width="172"></td>
                                    <td width="109">the country</td>
                                    <td width="145">emphasis on the</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">7-10, 2012)</td>
                                    <td width="24"></td>
                                    <td width="172"></td>
                                    <td width="109">and abroad</td>
                                    <td width="145">inclusion of relevant</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="24"></td>
                                    <td width="172"></td>
                                    <td width="109"></td>
                                    <td width="145">issue of philosophy</td>
                                </tr>
                                <tr style="background-color:lightgrey;">
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="24"></td>
                                    <td width="172"></td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40">4.</td>
                                    <td width="147">UGC sponsored</td>
                                    <td width="24"> 1.</td>
                                    <td width="172"> Dr. Janak M.</td>
                                    <td width="109">75</td>
                                    <td width="145">Transformation of</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">National seminar</td>
                                    <td width="24"></td>
                                    <td width="172">Dave, Delhi</td>
                                    <td width="109"></td>
                                    <td width="145">Gandhian Education</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">on Gandhian</td>
                                    <td width="24"> 2.</td>
                                    <td width="172"> Dr. R. C. Sinha,</td>
                                    <td width="109"></td>
                                    <td width="145">system from</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">philosophy of</td>
                                    <td width="48"></td>
                                    <td width="148">Patna</td>
                                    <td width="109"></td>
                                    <td width="145">traditional skill to</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">Education &amp; its</td>
                                    <td width="48"> 3.</td>
                                    <td width="148">Dr. D. N.Yadav,</td>
                                    <td width="109"></td>
                                    <td width="145">modern skill.</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">relevance to</td>
                                    <td width="48"></td>
                                    <td width="148">Gorakhpur</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">National</td>
                                    <td width="48"> 4.</td>
                                    <td width="148">Dr. K.C. Pandey,</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">Reconstruction</td>
                                    <td width="48"></td>
                                    <td width="148">Lucknow</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">(Nov 17-18,</td>
                                    <td width="48"></td>
                                    <td width="148"></td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">2014)</td>
                                    <td width="48"></td>
                                    <td width="148"></td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr style="background-color:lightgrey;">
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="24"></td>
                                    <td width="172"></td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40">5.</td>
                                    <td width="147">ICPR New Delhi</td>
                                    <td width="48">1.</td>
                                    <td width="148">Dr. Ramjee Singh,</td>
                                    <td width="109">50</td>
                                    <td width="145">Emergance of Global</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">sponsored World</td>
                                    <td width="48"></td>
                                    <td width="148">Patna</td>
                                    <td width="109"></td>
                                    <td width="145">Philosophy</td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">Philosophy Day</td>
                                    <td width="48">2.</td>
                                    <td width="148">Dr. R.C. Sinha</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">(Nov. 19, 2014)</td>
                                    <td width="48"></td>
                                    <td width="148">Patna</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="48">3.</td>
                                    <td width="148">Dr. Neelima Sinha</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="48"></td>
                                    <td width="148">PVC, KSDSU</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td colspan="2" width="196">4. Dr. S. K. Singh</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="48"></td>
                                    <td width="148">Patna</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr style="background-color:lightgrey;">
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="24"></td>
                                    <td width="172"></td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40">6.</td>
                                    <td width="147">National Seminar</td>
                                    <td width="48"></td>
                                    <td width="148"></td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147">(16th March 2021)</td>
                                    <td width="48"></td>
                                    <td width="148"></td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="48">1.</td>
                                    <td width="148"> Prof. Jata Shankar </td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="48"></td>
                                    <td width="148">Rtd. HOD, Deptt of Philosophy</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="48"></td>
                                    <td width="148">Allahabad University,Allahabad</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="48">2.</td>
                                    <td width="148"> Prof. Ramesh Chandra Sinha </td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="48"></td>
                                    <td width="148"> Chairman ICPR, New Delhi </td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="48">3.</td>
                                    <td width="148"> Dr. Tapti Chakravarti </td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="48"></td>
                                    <td width="148"> H.O.D Deptt of Art & Culture & Anozit </td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="48"></td>
                                    <td width="148">Prof. Deptt of Philosphy, B.B.M.K </td>
                                    <td width="109"></td>
                                    <td width="145"></td>
                                </tr>
                                <tr>
                                    <td width="40"></td>
                                    <td width="147"></td>
                                    <td width="48"></td>
                                    <td width="148"> University, Dhanbad.</td>
                                    <td width="109"></td>
                                    <td width="145"></td>
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
                                    <td>Dr. Rudra Kant "Amar"</td>
                                    <td>Professor & Head</td>
                                    <td>N/A</td>
                                    <td>hodphilosophy@lnmu.ac.in</td>
                                    <td>
                                        <div class="user_icon">
                                            <img src="{{ asset('Frontend/images/faculty/Dr. Rudra Kant philosophy.jpg') }}" alt="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dr. Rajiv Kumar</td>
                                    <td>Associate Professor</td>
                                    <td>9430063130</td>
                                    <td>dr.rajeevkr1763@gmail.com</td>
                                    <td>
                                    <div class="user_icon">
                                            <img src="{{ asset('Frontend/images/faculty/Rajiv Kumar.jpg') }}" alt="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dr. Satyen Kumar</td>
                                    <td>Associate Professor</td>
                                    <td>9835049381</td>
                                    <td>satyen15021972@gmail.com</td>
                                    <td>
                                    <div class="user_icon">
                                            <img src="{{ asset('Frontend/images/faculty/Dr. Satyen Kumar.jpg') }}" alt="">
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
                                    <h4 class="title">Achievements of <span>Students </span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                        <ul>
                        <li>Dr. Bharati Jha awarded ICPR Fellowship</li>
<li>Shri Prithvi Paswan awarded U.G.C. post-doctoral Fellowship.</li>
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
                        <ul>
                            <li>Prof. K. P. Verma</li>
                            <li>Prof. Raghubansh Jha</li>
                            <li>Prof. K P Verma</li>
                            <li>Prof. C Choubey</li>
                            <li>Prof. B K Sahay</li>
                            <li>Prof. R N Yadav</li>
                            <li>Prof. M K Jha</li>
                            <li>Prof. S C Mishra</li>
                            <li>Prof. M K Jha</li>
                            <li>Prof. A. N Jha</li>
                            <li>Prof. M.K.Jha</li>
                            <li>Prof. A.N.Jha</li>
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
                                <h4 class="title">Student <span>Profile</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-hover width=" 100%">

                            <thead>
                                <tr>
                                    <td rowspan="2" width="92"><strong>Name of the course</strong></td>
                                    <td rowspan="2" width="103"><strong>Applications Received</strong></td>
                                    <td style="text-align: center;" colspan="2" width="177"><strong>Selected</strong></td>
                                    <td style="text-align: center;" colspan="2" width="180"><strong>Pass Percentage</strong></td>
                                </tr>
                                <tr>
                                    <td width="90"><strong>Boys</strong></td>
                                    <td width="78"><strong>Girls</strong></td>
                                    <td width="119"><strong>Boys</strong></td>
                                    <td width="117"><strong>Girls</strong></td>
                                </tr>
                            </thead>
                            <tr>
<td width="208">MA (old course) 2009-11</td>
<td style="text-align: center;" width="120">05</td>
<td style="text-align: center;" width="84">4</td>
<td style="text-align: center;" width="84">01</td>
<td style="text-align: center;" width="91">100%</td>
<td style="text-align: center;" width="71">100%</td>
</tr>
<tr>
<td width="208">MA (old course) 2010-12</td>
<td style="text-align: center;" width="120">08</td>
<td style="text-align: center;" width="84">03</td>
<td style="text-align: center;" width="84">05</td>
<td style="text-align: center;" width="91">100%</td>
<td style="text-align: center;" width="71">100%</td>
</tr>
<tr>
<td width="208">MA (old course) 2011-13</td>
<td style="text-align: center;" width="120">16</td>
<td style="text-align: center;" width="84">10</td>
<td style="text-align: center;" width="84">06</td>
<td style="text-align: center;" width="91">100%</td>
<td style="text-align: center;" width="71">100%</td>
</tr>
<tr>
<td width="208">MA (Sem. System) 2013-15</td>
<td style="text-align: center;" width="120">20</td>
<td style="text-align: center;" width="84">11</td>
<td style="text-align: center;" width="84">09</td>
<td style="text-align: center;" colspan="2" width="162"></td>
</tr>
<tr>
<td width="208">MA (Sem. System) 2014-16</td>
<td style="text-align: center;" width="120">06</td>
<td style="text-align: center;" width="84">02</td>
<td style="text-align: center;" width="84">04</td>
<td style="text-align: center;" colspan="2" width="162"></td>
</tr>
<tr>
<td width="208">MA (Sem. System) 2015-17</td>
<td style="text-align: center;" width="120">10</td>
<td style="text-align: center;" width="84">06</td>
<td style="text-align: center;" width="84">04</td>
<td style="text-align: center;" width="91">100%</td>
<td style="text-align: center;" width="71">100%</td>
</tr>
<tr>
<td width="208">MA (Sem. System) 2016-18</td>
<td style="text-align: center;" width="120">03</td>
<td style="text-align: center;" width="84">03</td>
<td style="text-align: center;" width="84">00</td>
<td style="text-align: center;" width="91">33%</td>
<td style="text-align: center;" width="71"></td>
</tr>
<tr>
<td width="208">MA (Sem. System) 2017-19</td>
<td style="text-align: center;" width="120">04</td>
<td style="text-align: center;" width="84">02</td>
<td style="text-align: center;" width="84">02</td>
<td style="text-align: center;" width="91">100%</td>
<td style="text-align: center;" width="71">100%</td>
</tr>
<tr>
<td width="208">MA (Sem. System) 2018-20</td>
<td style="text-align: center;" width="120">08</td>
<td style="text-align: center;" width="84">05</td>
<td style="text-align: center;" width="84">03</td>
<td style="text-align: cener;" width="91">60%</td>
<td style="text-align: center;" width="71">100%</td>
</tr>
<tr>
<td width="208">M.A (Sem.System ) 2019-21</td>
<td style="text-align: center;" width="120">02</td>
<td style="text-align: center;" width="84">01</td>
<td style="text-align: center;" width="84">01</td>
<td style="text-align: center;" width="91">Awaited</td>
</tr>
<tr>
<td width="208">M.A (Sem.System ) 2020-22</td>
<td style="text-align: center;" width="120">07</td>
<td style="text-align: center;" width="84">03</td>
<td style="text-align: center;" width="84">03</td>
<td style="text-align: center;" width="91">Awaited</td>
</tr>
<tr>
<td width="208"><strong>Ph.-D. (Research Methodology)  Course</strong></td>
</tr>
<tr>
<td width="208">PAT - 2015</td>
<td style="text-align: center;" width="120">01</td>
<td style="text-align: center;" width="84">01</td>
<td style="text-align: center;" width="84"></td>
<td style="text-align: center;" width="91">100%</td>
<td style="text-align: center;" width="71"></td>
</tr>
<tr>
<td width="208">PAT - 2016</td>
<td style="text-align: center;" width="120">01</td>
<td style="text-align: center;" width="84"></td>
<td style="text-align: center;" width="84">01</td>
<td style="text-align: center;" width="91"></td>
<td style="text-align: center;" width="71">100%</td>
</tr>
<tr>
<td width="208">PAT - 2017</td>
<td style="text-align: center;" width="120">08</td>
<td style="text-align: center;" width="84">04</td>
<td style="text-align: center;" width="84">04</td>
<td style="text-align: center;" width="91">100%</td>
<td style="text-align: center;" width="71">100%</td>
</tr>
<tr>
<td width="208">PAT - 2018</td>
<td style="text-align: center;" width="120">02</td>
<td style="text-align: center;" width="84">01</td>
<td style="text-align: center;" width="84">01</td>
<td style="text-align: center;" width="91">100%</td>
<td style="text-align: center;" width="71">100%</td>
</tr>
<tr>
<td width="208">PAT - 2019</td>
<td style="text-align: center;" width="120">06</td>
<td style="text-align: center;" width="84">04</td>
<td style="text-align: center;" width="84">02</td>
<td style="text-align: center;" width="91">100%</td>
<td style="text-align: center;" width="71">100%</td>
</tr>
<tr>
<td width="208">PAT - 2020</td>
<td style="text-align: center;" width="120">12</td>
<td style="text-align: center;" width="84">04</td>
<td style="text-align: center;" width="84">06</td>
<td style="text-align: center;" width="91">90%</td>
<td style="text-align: center;" width="71">100%</td>
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
                     <td>PG to Ph.D.</td>
                      <td>24</td>
                      
                                    </tr>
                                    <tr>
                      <td>Ph.D. to Post-Doctoral</td>
                      <td>3%</td>
                      
                                    </tr>
                                    <tr style="background-color:lightgray;">
                                        <td>Employed</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Campus selection<br><br>
Other than campus recruitment</td>
<td>N/A<br><br>15%</td>
                                    </tr>
                                    <tr>
<td>Entrepreneurs</td>
<td>10%</td>
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
                            <table class="table table-hover" border=1>
                                <thead>
                                    <tr>
                                        <td>Student Progression</td>
                                        <td>Percentage against enrolled</td>
                                        <td>Status</td>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
<td>Seminar-Philosophy of Education<br>15-16 March 2012</td>
<td>UGC</td>
<td>National</td>
</tr>
<tr>
<td>Conference -Indian Philosophical Congress<br />
7-10 Nov. 2012</td>
<td>Self generated</td>
<td>National</td>
</tr>
<tr>
<td>Seminar- Gandhian Philosophy of  Education and its Relevance to National  Reconstruction<br />
Nov.17-18, 2014</td>
<td>UGC</td>
<td>National</td>
</tr>
<tr>
<td>Philosophy  and Science (on world  Philosophy Day)<br />
19 Nov. 2014)</td>
<td>ICPR, New Delhi</td>
<td>National</td>
</tr>
<tr>
<td>Sarva Dharm Sambhav Year 2017 10 th March</td>
<td>UGC</td>
<td>National</td>
</tr>
<tr>
<td>National Seminar Year 2021 16 th March</td>
<td>University/Deptt</td>
<td>National</td>
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
                            <li>Library : Rich Library</li>
                            <li>Internet facilities for staff and student : Yes</li>
                            <li>Total number of class rooms : 01</li>
                            <li>Class rooms with ICT facility : 00</li>
                            <li>Student&#8217;s laboratories : NA</li>
                            <li>Research laboratories : NA</li>
                            <li>Wash Rooms : Yes</li>
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
                                    <td>Sanjay Kumar</td>
                                    <td>LDC</td>
                                    <td>6206967816</td>
                                    <td>N/A</td>
                                    <td>
                                        <div class="user_icon">
                                            <img src="{{ asset('Frontend/images/user.png') }}" alt="">
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


</div>
@endsection