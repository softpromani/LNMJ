@extends('Frontend.includes.layout')

@section('content')
    <!-- slider starts here -->

    <div class="container-fluid"
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;margin-bottom:40px;">
        <p class="text-center">PG Department of English</p>
    </div>
    <!-- slider ends here -->


    <div class="container">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-4 col-sm-4">
                <div class="pic">
                    <img src="{{ asset('Frontend/images/department/english.jpg') }}">

                </div>
            </div>
            <main class="col-md-8 col-sm-8">
                <div class="col-md-12" id="content_main">
                    <h2><strong>About the Department</strong></h2>
                    <p style="text-align: justify;font-size:13px;">Established in 1972, the University Department of English, Lalit Narayan Mithila University, Darbhanga has been exalting its eminence for 28 years. The objective of the department is not only to impart quality education and foster research but also to nurture every student individually, instilling the confidence to achieve her/his best. With time, the Department of English has incorporated several new areas of specialisation as per the requirements of the changing world. The Department is situated in Nargauna Campus and functioning in Maharani Haveli. The "MA in English" programme offered by us incorporates the essentials of literature, criticism, literary theories, linguistics as well as recent developments in the discipline. The PhD scholars are provided with proper training in research and are supervised by academics whose research encompasses both the traditions of English literature and its latest innovations. More than a hundred doctoral students are registered with the Department. Their research projects encompass several aspects of English language and literature as well as interdisciplinary studies. Research activites, Seminars, Workshops and Debates are organized time to time in the department.
Apart from intensive classroom teachings and formal lectures there are tutorial sessions and informal discussion groups where faculty and students interact. ICT tools are used to provide online classes and study materials. Emphasis is laid on in-depth knowledge of English literature and communicative skills in English language. University Department of English prides its research-oriented teachers who work arduously to keep abreast of the recent advances in language, literature and culture. The faculty members are persuaded to undertake Major/Minor research projects and to attend Refresher/Orientation course, seminars, symposium and workshops etc. There are five teachers and two non-teaching staff in the Department. Several alumni from the Department have carved a nice for themselves in academia, government organizations, the private sector and financial institutions.On the whole, the department of English possesses all the qualities of a model department.The Department is committed to diversity and inclusion.</p>

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
                                        <td>Dr.Ashok Kumar Bachchan</td>
                                        <td>Professor & Head</td>
                                        <td>9430062532</td>
                                        <td>hodenglish@lnmu.ac.in</td>
                                        <td><div class="user_icon">
                                                <img src="{{ asset('Frontend/images/faculty/ak bachhan.jpg') }}"
                                                    alt="">
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Dr.Punita Jha</td>
                                        <td>Professor</td>
                                        <td>9110936161</td>
                                        <td>punitajhathakur@gmail.com</td>
                                        <td><div class="user_icon">
                                                <img src="{{ asset('Frontend/images/faculty/punita jah english.jpg') }}"
                                                    alt="">
                                            </div></td>
</tr>
<tr>
                                        <td>3</td>
                                        <td>Dr.Kulanand Yadav</td>
                                        <td>Professor</td>
                                        <td>9430469489</td>
                                        <td>kulanandyadav08@gmail.com</td>
                                        <td><div class="user_icon">
                                                <img src="{{ asset('Frontend/images/faculty/kulanand yadav english.jpg') }}"
                                                    alt="">
                                            </div></td>
</tr>
<tr>
                                        <td>4</td>
                                        <td>Dr.Akhileshwar Kumar Singh</td>
                                        <td>Associate Professor</td>
                                        <td>9199808951</td>
                                        <td>jncaks1960@gmail.com</td>
                                        <td><div class="user_icon">
                                                <img src="{{ asset('Frontend/images/faculty/akhilesh enlish.jpg') }}"
                                                    alt="">
                                            </div></td>
</tr>
<tr>
                                        <td>5</td>
                                        <td>Dr. Sanket Kumar Jha</td>
                                        <td>Assistant Professor</td>
                                        <td>9973735690</td>
                                        <td>sanketjha007@gmail.com</td>
                                        <td><div class="user_icon">
                                                <img src="{{ asset('Frontend/images/faculty/sanket english.jpg') }}"
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
                                    <h4 class="title">Achievements of Faculty Members</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                        <ol>
    <li><strong>Prof. (Dr.) Ashok Kumar Bachchan:-</strong> head of the department of English, is a reputed academician
and an experienced administrator. He has more than 40 years of teaching and research experience.
He has successfully supervised 25 Ph.D research scholars till date and currently 7 scholars' research
is in progress. He has authored one book and 35 of his articles have been published in reputed
national and international journals. He has presented around 33 papers at national and international
seminars and conferences. He has been the Subject Expert for Screening-cum-Selection Committees
at various universities. Prof. Bachchan has contributed to the growth and development of the
university. He has served as an elected member of the Syndicate, Senate, and Finance committees of
L.N.Mithila University. He has also been a member of other committees, including the Seniority
and Pay-fixation committee, the Building Committee, the NSS advisory committee, the Research
Board of LN Mithila University, and others. He has also been part of the development committees
of different colleges under L.N.Mithila University. Currently, Prof. Bachchan is the chairman of the
Association for English Studies of India (AESI). He is also the president of the ELT@I Mithila
chapter, Darbhanga. He is a member of the editorial boards of various journals- Akshara, Indian
Journal of English Studies, Anvil, The Interiors, Literaria-Linguistica, and several others. His areas
of interest are Indian English Literature, American English Literature, and Diaspora Literature</li>
<li><strong>Prof. (Dr.) Punita Jha:</strong> is a senior professor of English with over 30 years of teaching and research
experience. She is also serving as the Director of the Institute of Foreign Languages (IFL). She was
awarded a D.Litt degree in 2019. She has also completed one minor and one major project
sponsored by UGC. Prof. Jha has been the Subject Expert for Screening cum Selection Committees
at various universities. She has authored three books and 35 of her articles, poems, and book
chapters have been published in different national and international journals and anthologies. She
has presented 23 papers in national and international seminars and conferences and chaired sessions
at several of them. She has been a resource person at several seminars, conferences, and workshops.
She has successfully supervised 21 Ph.D research scholars and currently 6 scholars' research is in
progress. She is a life member of the Association for English Studies of India (AESI), the American
Research Centre (ASRC) Hyderabad, and the ELT@I Mithila chapter, Darbhanga. She is a member
of the editorial boards of various journals: Akshara, Anvil, Bioglobia-Literaria, and several others.
Her administrative experience includes her tenure as the hostel superientendant and NAAC coordinator at M.R.M. College, Darbhanga. Her areas of interest are Linguistics, Indian English
Literature, American English Literature, and ELT.</li>

<li><strong>Prof. (Dr.) Kulanand Yadav:</strong> has 25 years of teaching and research experience. His administrative
experience includes his tenure as the controller of the examinations of L.N.Mithila University from
August 2014 to September 2018, resource person of FAEA, New Delh, Bursar of R.K.College
Madhubani, and assistant co-cordinator of the IGNOU study centre at R.K.College Madhubani.
Prof. Yadav is a life member of the Association for English Studies of India (AESI) and the ELT@I
Mithila chapter, Darbhanga. He has authored one book, and 10 of his articles have been published
in different journals. He has presented five papers at national and international seminars and
conferences. He has successfully supervised 2 Ph.D research scholars and currently 8 scholars'
research is in progress. His areas of interest are linguistics and Indian English literature.</li>

<li><strong>Dr. Akhileshwar Kumar Singh:</strong> has 19 years of teaching, research, and administrative experience.
His administrative experience includes his tenure as the deputy Registrar of L.N.Mithila University
from 2017 to 2020, O.S.D, V.C Secretariat from April 2014 to July 2014. He has successfully
supervised five Ph.D research scholars and currently two scholars' research is in progress. He has
written one book and six of his articles have been published in national and international journals.
He has presented six papers at national and international seminars and conferences. His areas of
interest are 20th Century British Poetry and Indian English Literature.</li>

<li><strong>Dr. Sanket Kumar Jha:</strong> has five years of teaching and research experience. He has authored one
book and seven of his articles have been published in different national and international journals
till date. He has presented 10 papers at national and international seminars and conferences. He has
also been an invited resource person at seminars and conferences. Currently, 3 Ph.D. research
scholars are registered under his supervision. Prof. Jha has been the convenor of conferences,
workshops, and other academic activities organised by the department. He has been the resource
person for the Spoken Tutorial project run by IIT Bombay. He is the Chapter Head of the ELT@I
Mithila chapter, one of the founding members of the Research India Foundation and a life member
of the Association for English Studies of India (AESI). His areas of interest are Modern and PostModern Literature, Indian English Literature, Diaspora Literature, ELT, Literary Theory, and
Criticism.</li>
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
                                    <h4 class="title">Student <span>Statistics</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover width="100%">
                            
<thead>
<tr>
<td rowspan="2" width="271"><strong>Name of the Course</strong></td>
<td rowspan="2" width="162"><strong>Applications received</strong></td>
<td colspan="1" width="168"><strong>Selected</strong></td>
<td colspan="2" width="236"><strong>Pass Percentage</strong></td>
</tr>
</thead>
<tr>
<td width="271">M.A 2015-17 </td>
<td width="162">78</td>
<td width="78">60</td>
<td width="119">70%</td>
</tr>
<tr>
<td width="271">M.A 2016-18</td>
<td width="90">51</td>
<td width="78">50</td>
<td width="119">70%</td>

</tr>
<tr>
<td width="271">M.A 2017-19</td>
<td width="90">74</td>
<td width="78">59</td>
<td width="119">90.9%</td>

</tr>
<tr>
<td width="271">M.A 2018-20</td>
<td width="90">71</td>
<td width="78">64</td>
<td width="119">96.8%</td>

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
                                    <h4 class="title">PhD Degree Awarded</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover width="100%">
                            
<thead>
<tr>
<td width="61"> YEAR</td>
<td width="150">PhD Degree Awarded</td>
</tr>
</thead>
<tr>
<td width="61"> 2016</td>
<td width="192">16</td>
</tr>
<tr>
<td width="61"> 2017 </td>
<td width="192">29</td>
</tr>
<tr>
<td width="61"> 2018</td>
<td width="192">36</td>
</tr>
<tr>
<td width="61"> 2019</td>
<td width="192">31</td>
</tr>
<tr>
<td width="61"> 2020 </td>
<td width="192">41</td>
</tr>
<tr>
<td width="61"> 2021</td>
<td width="192">11</td>
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
                                    <h4 class="title">Major Achievements of our Students</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                        <ol>
    <li>  Every year good number of students from this Department qualify UGC NET.</li>
    <li>  Ms. Smriti Navin, IPS, Assistant Commissioner, Service Tax Il,  Commissionerate. Kolkata</li>
    <li> Nutan Kumari, Assistant Prof. in English, L.N. Mishra College of Business Management, Patna, Co-ordinator, Cambridge English language assessment (Cambridge University, U.K.) </li>
    <li> Dr. Prabha Mallik, Principal, Mahatma Gandhi Sikshan Sansthan, Darbhanga</li>
    <li>  Dr. Aprajita, Assistant Teacher, Town Inter College, Aurgangabad </li>
    <li>  Vivekanand Jha, Raddar officer„ Indian Air Force Gwalior</li>
    <li>  Dr. Upendra Gami, Dept. of English, Rameshwar Singh College, Muzaffarpur, B.R.B.A. Univ. Muzaffarpur</li>
    <li>  Dr. Veerendra Mishra , Asso. Prof., Banasthali University, Rajasthan</li>
    <li> Dr. Sanket Kumar Jha, Assist. Prof., University Department of English LNMU</li>
    <li>  Sh. Ashish Anand , Translator, Rajbhasha, Govt. of India, New Delhi</li>
    <li>Sh.Kumar Vaibhav, Assist, Prof., B.M.A. College, Rahika</li>
    <li> Sh. Sangeet Kumar Natwar, Assist, Prof, , L.N.M.U., Darbhanga</li>
    <li>Sh. Ritesh Kumar, P.O., Canara Bank, Hyderabad</li>
    <li>Sh. Aditya Kumar, P.o., S.B.I., Goa</li>
    <li>Khushboo Kumari  Translator Rajbhasha, Govt. of India, New Delhi</li>
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
                                <div class="col col-sm-7 col-xs-12">
                                    <h4 class="title"><span>Seminar/</span><span> Conference/</span><span>Workshop</span><span> Organized</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                        <ol>
            <li>International Conference on “The Short Story: Tradition and Experiment” -2017</li>
            <li>National E-Conference  on “Emerging Trends in Indian English Literature” -2020</li>
            <li>One Week Workshop on Research Writing - 2022</li>
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
                                    <h4 class="title">Infrastructural <span>Facilities</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                        <ul>
       <li>Total number of class rooms- 2</li>
       <li>Class rooms with ICT facility- 1</li>
       <li>Internet facilities for staff and students- Yes   </li>
       <li>Wash Room  - 1  </li>
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
                      <td>Mr. Bimlesh chaudhary</td>
                      <td>LDC</td>
                      <td>9430446600</td>
                      <td>bimlesh943044@gmail.com</td>
                      <td><div class="user_icon">
                                                <img src="{{ asset('Frontend/images/faculty/Bimlesh chy eeee.jpg') }}"
                                                    alt="">
                                            </div></td>
                         </tr>
                         <tr>
                      <td>2</td>
                      <td>Mr. Ashok Gupta</td>
                      <td>Peon</td>
                      <td>7700819502</td>
                      <td>udaykkaran82@gmail.com</td>
                      <td><div class="user_icon">
                                                <img src="{{ asset('Frontend/images/faculty/agupta eeee.jpg') }}"
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
