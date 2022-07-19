@extends('Frontend.includes.layout')

@section('content')
    <!-- slider starts here -->

    <div class="container-fluid"
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;margin-bottom:40px;">
        <p class="text-center">Department of Economics</p>
    </div>
    <!-- slider ends here -->


    <div class="container">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-4 col-sm-4">
                <div class="pic">
                    <img src="{{ asset('Frontend/images/department/economics.jpg') }}">

                </div>
            </div>
            <main class="col-md-8 col-sm-8">
                <div class="col-md-12" id="content_main">
                    <h2><strong>About the Economics</strong></h2>
                    <p style="text-align: justify;font-size:13px;">The University Department of Economics, L. N. Mithila University Darbhanga is distinguished on the national map of Economics teaching and research since establishment of the University in 1972.
                    </p>
                    <p style="text-align: justify;font-size:13px;">
                        The University Department of Economics, L. N. Mithila University, Darbhanga originated as the P.G. Department of Economics as an extension of the University Department of Economics, Bihar University Muzaffarpur in 1962. Initially, it was sheltered in the C. M. Science College, Darbhanga and later shifted to C. M. College, Darbhanga with the establishment of the L. N. Mithila University, Darbhanga in 1972. The same Department emerged as the University Department of Economics, & is maturing since as such in the 100 years old Nargauna Palace of Raj Darbhanga, During the period of about 60 years of its existence this Department has prospered distinguished on the national and international map of economic teaching and research. The Hon'ble former President of India Dr. Pranab Mukherjee graced by his lecture in the seminar of this Department during his tenure as Deputy-Chairman-Planning Commission, Govt. of India.</p>
                </div>
            </main>
        </div>

        <div class="row d-flex d-md-block flex-nowrap wrapper" style="margin-top: 40px;">
            <main class="col-md-8 col-sm-8">
                <div class="col-md-12" id="content_main">

                        <p style="text-align: justify;font-size:13px;">The Department has trained vast number of economists who are contributing in the all-round socio-economic development of India. The reputation of the Department is increasing day by day. Under the dynamic leadership of Prof (Dr.) Vijay Kumar Yadav the department is spreading its wings to the new domains of economics. The major fields of research have been Rural Economics, Agriculture Economics, Monetary Economics, Environmental Economics, International Trade, Health Economics, Tourism, Welfare programmes etc

                            Currently the department offers 2-year MA Economics programme.</p>


                </div>
            </main>
            <div class="col-md-4 col-sm-4">
                <div class="pic">
                    <img src="{{ asset('Frontend/images/department/economics1.jpg') }}">

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
                                        <td> Prof. (Dr.) Bachaspati Thakur</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td> Prof. (Dr.) A. K. Jha</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Prof. (Dr.) P. K. Jha</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td> Prof. (Dr.) Madaneshwar Mishra</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Prof. (Dr.) P. K. Jha</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Prof. (Dr.) P. K. Jha</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Prof. (Dr.) Ramanand Thakur</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Prof. (Dr.) Raj Kishor Jha</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--

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
                                        <td>Dr. Rajendra Sah</td>
                                        <td>Professor & Head</td>
                                        <td>9430441508,<br>6201673282</td>
                                        <td>profrajendrasah@gmail.com,<br>
                                            hodhindi@lnmu.ac.in</td>
                                        <td>
                                            <div class="user_icon">
                                                <img src="{{ asset('Frontend/images/faculty/Dr. Rajendra.jpg') }}"
                                                    alt="">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr. Chandra Bhanu<br>Prasad Singh</td>
                                        <td>Professor & Ex-<br>H.O.D</td>
                                        <td>9572386088</td>
                                        <td>cbpsinghlmnu@gmail.com</td>
                                        <td>
                                            <div class="user_icon">
                                                <img src="{{ asset('Frontend/images/faculty/Dr. Chandra.jpg') }}"
                                                    alt="">
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Dr. S.P.Suman</td>
                                                        <td>Associate Professor</td>
                                                        <td>9430046669</td>
                                                        <td>spsuman.chunauti@gmail.com</td>
                                                        <td>
                                                            <div class="user_icon">
                                                                <img src="{{ asset('Frontend/images/faculty/Dr. S. P. Suman.jpg') }}"
                                                                    alt="">
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td>Dr. A.P Gupta</td>
                                                                        <td>Associate Professor</td>
                                                                        <td>9934772247</td>
                                                                        <td>dranandprakashgupta@gmail.com</td>
                                                                        <td>
                                                                            <div class="user_icon">
                                                                                <img src="{{ asset('Frontend/images/faculty/Dr A. P. Gupta.jpg') }}"
                                                                                    alt="">
                                                                                    <tr>
                                                                                        <td>5</td>
                                                                                        <td>Dr. Akhilesh Kumar</td>
                                                                                        <td>Assistant Professor</td>
                                                                                        <td>9122804710</td>
                                                                                        <td>a.k.akela10@gmail.com</td>
                                                                                        <td>
                                                                                            <div class="user_icon">
                                                                                                <img src="{{ asset('Frontend/images/faculty/Akhilesh Kumar.jpg') }}"
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
                                <div class="col col-sm-5 col-xs-12">
                                    <h4 class="title">Student <span>Statistics</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover width="100%">

<thead>
<tr>
    <td>Sr.No</td>
<td>Name of the Course</td>
<td><strong>Applications received</strong></td>
<td>Years</td>
</tr>
</thead>
<tr>
    <td>1</td>
<td>M.A <br>Journalism</td>
<td>27<br>22</td>
<td>2015-16 </td>
</tr>

<tr>
    <td>2</td>
<td>M.A <br>Journalism</td>
<td>21<br>23</td>
<td>2016-17 </td>
</tr>
<tr>
    <td>3</td>
<td>M.A <br>Journalism</td>
<td>18<br>14</td>
<td>2017-18 </td>
</tr>
<tr>
    <td>4</td>
<td>M.A <br>Journalism</td>
<td>35<br>18</td>
<td>2018-19 </td>
</tr>
<tr>
    <td>5</td>
<td>M.A <br>Journalism</td>
<td>26<br>26</td>
<td>2019-20 </td>
</tr>
<tr>
    <td>6</td>
<td>M.A <br>Journalism</td>
<td>93<br>15</td>
<td>2020-21 </td>
</tr>
<tr>
    <td>7</td>
<td>M.A <br>Journalism</td>
<td>83<br>23</td>
<td>2021-22 </td>
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
                        <li>Rang Nath Choudhary – Bihar Civil Service</li>
    <li>S.S. Singh – R. D. IGNOU</li>
    <li>B.P. Kariyee – Professor</li>
    <li>R.C. Thakur – Professor</li>
    <li>Umesh Kumar Sharma – Guest Teacher LNMU Darbhanga</li>
    <li>Shrav Sumi Kumari-Assistant Prof. LNMU Darbhanga</li>
    <li>Kshama Kumari – Assist Prof. J.P.U Chapra</li>
    <li>Ashish Kumari Kanta - Guest Teacher, K.S.D.S.U</li>
    <li>Santosh Kumar-Assistant Prof. LNMU Darbhanga</li>
    <li>Harun Shailendra- Asso. Prof, J.P.U Chapra</li>
    <li>Jyotivavdhan, Asso- Prof. B.N.M.U, Madhepura</li>
    <li>Jiyaur Rahman Zafari Assist Frofessor,Maghadh University, Both Gaya</li>
    <li>Priya kumari ,Bihar Civil Service</li>
    <li>Shishir Karn- AIR Darbhanga</li>
    <li>Ajay Mishra- U.R Higher Education Serria</li>
    <li>Mukesh Kumar Jha- U.R Higher Education Serria</li>
    <li>Pradeep Mahto – Guest Teacher, K.S.D.S.U Darbhanga</li>
    <li>Hemant Kr. Jha – Asso. Prof. P.P.U Patna</li>
    <li>Sangeeta Kumari- Guest Teacher  B.R.A. B.U</li>
    <li>Snehlata Kumari – Assistant Prof. LNMU Darbhanga</li>
    <li>Anju Kumari - Guest Teacher  B.R.A. B.U</li>
    <li>Varun Kr. Thakur - Guest Teacher  B.R.A. B.U</li>
    <li>Balram Kumar - Guest Teacher  LNMU darbhanga</li>
    <li>Rashmi Sharma – Assistant Prof. LNMU Darbhanga</li>
    <li>Anju Kumari – Guest Teacher, LNMU</li>
    <li>Richa Kumari – JRF</li>
    <li>Niyati Kumari – Guest Teacher, KSDSU, Darbhnaga</li>
    <li>Chandir Paswan – NET</li>
    <li>Shashi Bhushan – NET</li>
    <li>Indra Bhushan – NET</li>
    <li>Inu Kumari – NET</li>
    <li>Shobha Kumari – NET</li>
    <li>Abhilasha Kumari – NET</li>
    <li>Amit Kumar – NET</li>
    <li>Puja Kumari – NET</li>
    <li>Raushan Kumar Nayak – NET</li>
    <li>Panchdeo Prasad – NET</li>
    <li>Ram Lakhan Kumar – NET</li>
    <li>Abhishek Kumar Sinha – NET</li>
    <li>Anigdha Srivastava- NET</li>
    <li>Siya Ram Mukhiya - JRF</li>
    <li>Sarita kumari - JRF</li>
    <li>kHusbu kumari- NET</li>
    <li>Durganand Thakur - NET</li>
    <li>Jyoti kumari - NET</li>
                        </ul>
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
                                    <h4 class="title">P.G .Gold Medalist</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                        <ol>
                        <ol>
<li>Shikha Kumari – 2010-12</li>
<li>Niyati Kumati – 2013-15</li>
<li>Anigdha Srivastava – 2014-16</li>
<li>Priyanka Kumari – 2015-17</li>
<li>Siyaram Mukhiya – 2016-18</li>
<li>Pappu kumar Thakur -2017-19</li>
<li>Anuradha kumari-2018-2020</li>
</ol>
                        </ol>
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
<td width="67"><strong>Sl. No.</strong></td>
<td width="168"><strong>Name</strong></td>
<td width="528"><strong>Title of Work</strong></td>
<td width="258"><strong>Supervisor</strong></td>
</tr
                                </thead>
                                <tbody>
                                <tr>
<td width="67"><strong>01</strong></td>
<td width="168">कृष्ण अनुराग</td>
<td width="528">२१ वी सदी के हिन्दी उपन्यासों में कश्मीर त्रासदी</td>
<td width="258">डॉ  राजेन्द्र साह</td>
</tr>
<tr>
<td width="67"><strong>02</strong></td>
<td width="168">धर्मेन्द्र दास</td>
<td width="528">राधा कृष्ण के साहित्य में वर्गीय चेतना</td>
<td width="258">डॉ शशि भूषण शशि</td>
</tr>
<tr>
<td width="67"><strong>03</strong></td>
<td width="168">अभिषेक कुमार सिन्हा</td>
<td width="528">नरेन्द्र कोहली के उपन्यासों में दार्शनिक चेतना</td>
<td width="258">डॉ विजय कुमार</td>
</tr>
<tr>
<td width="67"><strong>04</strong></td>
<td width="168">सरोजनी गौतम</td>
<td width="528">रमणिका गुप्ता के चिंतन में आदिवासी जीवन</td>
<td width="258">डॉ॰ आनन्द प्रकाश गुप्ता</td>
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
<td width="67"><strong>Sl. No.</strong></td>
<td width="211"><strong>Name of the Programme</strong></td>
<td width="389"><strong>Topic</strong></td>
<td width="354"><strong>Resource Person</strong></td>
</tr>
                                </thead>
                                <tbody>
                                <tr>
<td width="67">1</td>
<td width="211">Seminar

(28.03.2014)</td>
<td width="389">Bhartiya Sahitya Ki Parampara</td>
<td width="354">Dr. Sri Bhagwan Singh, T.M.B. University, Bhagalpur</td>
</tr>
<tr>
<td width="67">2</td>
<td width="211">Seminar

(09.05.2014)</td>
<td width="389">Bhartiya Sahitya Mein Bhakti Andolan</td>
<td width="354">Dr. Prabhakr Pathak, L.N.M.U. Darbhanga</td>
</tr>
<tr>
<td width="67">3</td>
<td width="211">Seminar

(10.05.2014)</td>
<td width="389">Pragativad</td>
<td width="354">Dr. Prabhakar Pathak, L.N.M.U., Darbhanga</td>
</tr>
<tr>
<td width="67">4</td>
<td width="211">Seminar
(16.05.2014)</td>
<td width="389">Vikhandanvad</td>
<td width="354">Dr. C. B. P. Singh, L.N.M.U., Darbhanga</td>
</tr>
<tr>
<td width="67">5</td>
<td width="211">Seminar
(17.05.2014)</td>
<td width="389">Alankar Siddhanta</td>
<td width="354">Dr. R. C. Thakur, L.N.M.U., Darbhanga</td>
</tr>
<tr>
<td width="67">6</td>
<td width="211">Seminar
(29.05.2014)</td>
<td width="389">Research Methodoly</td>
<td width="354">Dr. Pramod Kumar Singh,  B. R. A. B. U., Muzaffarpur</td>
</tr>
<tr>
<td width="67">7</td>
<td width="211">Special Lecture</td>
<td width="389">Textual Criticism</td>
<td width="354">Dr. P. K. Singh,  B. R. A. B. U., Muzaffarpur</td>
</tr>
<tr>
<td width="67">8</td>
<td width="211">National Seminar
(25 &amp; 26.11.2014)</td>
<td width="389">Bhakti Kavya Ko Mithilanchal Kee Den</td>
<td width="354">Dr. Ajay Mishra, B.B.S.U., Jaunpur, (U.P.)
Dr. P. K. Singh, B.R.A.B.U. ,Muzaffarpur
Dr. K. N. Jha, C.U.B., Gaya.</td>
</tr>
<tr>
<td width="67">9</td>
<td width="211">International Hindi Day
(10.01.2015)</td>
<td width="389">Nae Paudh</td>
<td width="354">Sri Ravindra Kumar Diwakar,  Sr. Dy. Collector, Darbhanga</td>
</tr>
<tr>
<td width="67">10</td>
<td width="211">International Seminar
(24.02.2015)</td>
<td width="389">Tamil-Veda 'Tirukkular Evam Hindi Kee Niti-Kavya</td>
<td width="354">Dr. P. K. Balsubramanyan, Chennai
Dr. L. K. V. Sridharan, Chennai
Dr. Nirmala S. Maurya, Chennai
Dr. Sweta Deepti, Khatmandu</td>
</tr>
<tr>
<td width="67">11</td>
<td width="211">Special Lecture
02.07.2015)</td>
<td width="389">Murdahiya of Tulsi Ram</td>
<td width="354">Dr. Subodh Malakar, J.N.U., New Delhi</td>
</tr>
<tr>
<td width="67">12</td>
<td width="211">Special Lecture
(28.08.2015)</td>
<td width="389">Reeti Kavya Kee Gramya Chetna</td>
<td width="354">Dr. Sri Bhagwan Singh, T.M.B.U., Bhagalpur</td>
</tr>
<tr>
<td width="67">13</td>
<td width="211">Hindi Diwas
(14.09.2015)</td>
<td width="389">Rajbhasha Hindi – Dasha Aur Disha</td>
<td width="354">Sri Sohba Kant, Laheriasarai, Darbhanga</td>
</tr>
<tr>
<td width="67">14</td>
<td width="211">Special Lecture
(08.10.2015)</td>
<td width="389">Modernity and Modernism</td>
<td width="354">Dr. Ganga Prasad Vimal, J.N.U., New Delhi.</td>
</tr>
<tr>
<td width="67">15</td>
<td width="211">Special Lecture
(30.07.2016)</td>
<td width="389">Kavita Kee Sarvajaneenta</td>
<td width="354">Dr. Tarun Kumar, Patna University, Patna.</td>
</tr>
<tr>
<td width="67">16</td>
<td width="211">International Seminar
(18.10.2016)</td>
<td width="389">Hindi Sahitya Me Vridh-Vimarsh</td>
<td width="354">Dr. Sri Bhagwan Singh, T.M.B.U., Bhagalpur.
Dr. Tarun Kumar, Patna University, Patna
Dr. S. P. Pragya chakshu, D.I.G., Darbhanga
Dr. Sweta Deepti, Nepal
Dr. Jainendra Kumar Singh, Nepal</td>
</tr>
<tr>
<td width="67">17</td>
<td width="211">International Hindi Day
(10.01.2017)</td>
<td width="389">International Perspective of Hindi</td>
<td width="354">Dr. Ajit Kumar Verma, L.N.M.U., Darbhanga.</td>
</tr>
<tr>
<td width="67">18</td>
<td width="211">Special Lecture</td>
<td width="389">Rajkamal Kee Rachna Drishti</td>
<td width="354">Dr. Deo Shankar Navin, J.N.U., New Delhi.</td>
</tr>
<tr>
<td width="67">19</td>
<td width="211">Seminar
(31.07.2017)</td>
<td width="389">Relevance of Premchand</td>
<td width="354">Dr. C. B. P. Singh, L.N.M.U., Darbhanga
Dr. C. P. Singh, S. K. M. College, Begusarai
Dr. S. P. Mishra, G. D. College, Begusarai.</td>
</tr>
<tr>
<td width="67">20</td>
<td width="211">Special Lecture
(08.09.2017)</td>
<td width="389">Bhakti Kavya Kee Lokchetna</td>
<td width="354">Dr. Chauthi Ram Yadav, B.H.U., Varanasi.</td>
</tr>
<tr>
<td width="67">21</td>
<td width="211">National Seminar 15.03.2018-16.03.2018</td>
<td width="389">Muktibodh Trilochan janm shati Samaroh</td>
<td width="354">Prof. satyakam, Ignou New Delhi<br>
Prof. Pramod Kumar singh, Muzaffarpur<br>Prof. Rajeev Kumar Jha . Muzaffarpur</td>
</tr>
<tr>
<td width="67">22</td>
<td width="211">Special Lecture  13.04.2018</td>
<td width="389">Uttar adhuniktavad</td>
<td width="354">Prof. Dev Shankar Navin, JNU New Delhi</td>
</tr>
<tr>
<td width="67">23</td>
<td width="211">Special Lecture  15.05.2018</td>
<td width="389">Kandarpighat ka Yudh aur Veerkavya</td>
<td width="354">Dr. Rangnath Choudhary, Muzaffarpur</td>
</tr>
<tr>
<td width="67">24</td>
<td width="211">Special Lecture  21.07.2018</td>
<td width="389">Samkaleen Hindi kahani ka Paridishya</td>
<td width="354">Dr. Arvind Kumar, Bhagalpur</td>
</tr>
<tr>
<td width="67">25</td>
<td width="211">Special Lecture  31.07.2018</td>
<td width="389">Prem Chand Ki Katha Drishti</td>
<td width="354">Dr. Chandra Bhanu Prasad Singh<br>
Dr. Surendra Prasad Suman, LNMU</td>
</tr>
<tr>
<td width="67">26</td>
<td width="211">Special Lecture 06.08.2018</td>
<td width="389">Mahatma Gandhi ke nirman me Bhakti Kavya ki Bhumika</td>
<td width="354">Dr. Gopeshwar Singh , Delhi University</td>
</tr>
<tr>
<td width="67">27</td>
<td width="211">Special Lecture  11.08.2018</td>
<td width="389">Sahitya ka Prayojan</td>
<td width="354">Dr. Anil Kumar Roy ,Gorakhpur University</td>
</tr>
<tr>
<td width="67">28</td>
<td width="211">Special Lecture  2.08.2018</td>
<td width="389">Photo Patrakarita</td>
<td width="354">Dr. Prabhakar Pathak , LNMU</td>
</tr>
<tr>
<td width="67">29</td>
<td width="211">Special Lecture  08.09.2018</td>
<td width="389">Uttar Adhunikata</td>
<td width="354">Dr. Rajendra Kumar,  Allahabad</td>
</tr>
<tr>
<td width="67">30</td>
<td width="211">Special Lecture  14.09.2018</td>
<td width="389">Hindi Divas</td>
<td width="354">Dr. Ajit Kumar verma,  Ex-HOD</td>
</tr>
<tr>
<td width="67">31</td>
<td width="211">Special Lecture  03.10.2018</td>
<td width="389">Sahitya ki Bhartiy Parampara</td>
<td width="354">Dr. Sri Bhagwan Singh,  Bhagalpur</td>
</tr>
<tr>
<td width="67">32</td>
<td width="211">Special Lecture  24.01.2019</td>
<td width="389">Fake  News avm Media</td>
<td width="354">Sakib Eqwal Khan , Patna</td>
</tr>
<tr>
<td width="67">33</td>
<td width="211">Special Lecture  22.04.2019</td>
<td width="389">Shodh Ke Naye aayam</td>
<td width="354">Prof. Awdhesh Pradhan, varanasi</td>
</tr>
<tr>
<td width="67">34</td>
<td width="211">Special Lecture  06.05.2019</td>
<td width="389">Mahatma Gandhi ka Hindi sahitya par Prabhav</td>
<td width="354">Prof. Sri Bhagwan Singh, Bhagalpur</td>
</tr>
<tr>
<td width="67">35</td>
<td width="211">Special Lecture  07.05.2019</td>
<td width="389">Sodh kee Awdharna</td>
<td width="354">Prof. Pramod Kumar Singh, Muzaffarpur</td>
</tr>
<tr>
<td width="67">36</td>
<td width="211">Special Lecture  09.07.2019</td>
<td width="389">U.K Mai Hindi Lekhan</td>
<td width="354">Prof. Poonam Sinha,  Muzaffarpur</td>
</tr>
<tr>
<td width="67">37</td>
<td width="211">National Seminar 31.07.2019</td>
<td width="389">Bharat Ke Goan Ka Yatharth aur Prem Chand Ka Katha sahitya</td>
<td width="354">Dr. Shanbhu Sharan Singh, Ignou</td>
</tr>
<tr>
<td width="67">38</td>
<td width="211">International Seminar 14.09.2019</td>
<td width="389">Hindi –Urdu Mai Doha Lekhan Parampara</td>
<td width="354">Rafiuddin Raj , U.S.A<br>
Prof. ZafarHabib, LNMU<br>
Satish Kumar Singh, LNMU</td>
</tr>
<tr>
<td width="67">39</td>
<td width="211">Special Lecture  23.09.2019</td>
<td width="389">Dinkar Ki Kavita</td>
<td width="354">Prof. Prabhakar Pathak, LNMU</td>
</tr>
<tr>
<td width="67">40</td>
<td width="211">Special Lecture  10.10.2019</td>
<td width="389">Ram Bilas Sharma Ki Alochna- Dirishti</td>
<td width="354">Prof. Chandrabhanu Prasad Singh</td>
</tr>
<tr>
<td width="67">41</td>
<td width="211">International Seminar 19.10.2019</td>
<td width="389">Sakhi  aur Kedarnath Singh</td>
<td width="354">Prof. Awdhesh Pradhan, varanasi<br>
Prof. Sadanand Sahi,  varanasi</td>
</tr>
<tr>
<td width="67">42</td>
<td width="211">Special Lecture  20.12.2019</td>
<td width="389">Uttar Chhayawad aur Janki Ballav Shastri</td>
<td width="354">Prof. Gopeshwar Singh, Delhi</td>
</tr>
<tr>
<td width="67">43</td>
<td width="211">Special Lecture  11.02.2020</td>
<td width="389">Samkaleen  Hindi Kavita</td>
<td width="354">Prof. Dinesh Kushwaha Rewa</td>
</tr>
<tr>
<td width="67">44</td>
<td width="211">Special Lecture  04.03.2020</td>
<td width="389">Renu Kee  Katha Dirishti</td>
<td width="354">Prof. Vijay Kumar, LNMU</td>
</tr>
<tr>
<td width="67">45</td>
<td width="211">Special Lecture  14.09.2020</td>
<td width="389">Hindi kee Dasha Disha</td>
<td width="354">Prof. Rajendra sah, LNMU</td>
</tr>
<tr>
<td width="67">46</td>
<td width="211">Special Lecture  23.09.2020</td>
<td width="389">Manavtawadi Kavi Dinkar</td>
<td width="354">Prof. Chandrabhanu Prasad Singh, LNMU</td>
</tr>
<tr>
<td width="67">47</td>
<td width="211">Seminar 10.01.2021</td>
<td width="389">हिन्दी का वैश्विक परिदृश्य</td>
<td width="354">Prof. Prabhakar Pathak<br>
Prof. Chandrabhanu Prasad Singh</td>
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
                        <li>Deptt. Of Hindi is located in the Nargauna palace, Residential palace of Maharaja Darbhanga. Deptt.  has Two Class rooms, One Staff Room and One Office Room ,Two Desktop, One Laptop, Two Photo Copi machines , One Printer, One Flate T.V , One Fritze , One Water Purifier etc are available in the Department.High Speed WiFi Facility is also Provided to the Student, research Scholors and Teachers.</li>

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
                      <td>R.B. Bhagat</td>
                      <td>R.C.</td>
                      <td>6202182547</td>
                      <td>N/A</td>
                      <td><div class="user_icon">
                                                <img src="{{ asset('Frontend/images/faculty/R.B.Bhagat.jpg') }}"
                                                    alt="">
                                            </div></td>
                         </tr>
                         <tr>
                      <td>2</td>
                      <td>Brajkishor Thakur</td>
                      <td>4th grade</td>
                      <td>8651113683</td>
                      <td>N/A</td>
                      <td><div class="user_icon">
                                                <img src="{{ asset('Frontend/images/faculty/Brajkishor Thakur.jpg') }}"
                                                    alt="">
                                            </div></td>
                         </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}



    </div>
@endsection
