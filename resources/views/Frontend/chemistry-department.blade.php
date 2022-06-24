@extends('Frontend.includes.layout')

@section('content')
    <!-- slider starts here -->

    <div class="container-fluid"
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;margin-bottom:40px;">
        <p class="text-center">PG Department of Chemistry</p>
    </div>
    <!-- slider ends here -->


    <div class="container">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-4 col-sm-4">
                <div class="pic">
                    <img src="{{ asset('Frontend/images/department/chemabt.png') }}">

                </div>
            </div>
            <main class="col-md-8 col-sm-8">
                <div class="col-md-12" id="content_main">
                    <h2><strong>About the Department</strong></h2>
                    <p style="text-align: justify;font-size:13px;">The Department of Chemistry has been established in the year 1974 in the C. M. Science College, Darbhanga and shifted to Raj Polytechnic Campus and finally in spacious new constructed building of its own, premises Narguna Campus of the University. The department was established with an objective of providing quality education in the convocational area of science and growing in to a centre of teaching and research with an aim to achieve prominent position in the academic map of Mithilanchal and particular in India. The department offers P.G. level advance courses in chemical science. The department is also offering Ph.D. programme in Chemistry. The Department offers major specialized course in Organic Chemistry, Inorganic Chemistry and Physical Chemistry. The students are monitored and evaluated by regular class tests, seminars, mid and end-semester examinations.
                    </p>
                </div>
            </main>
        </div>

        <div class="row d-flex d-md-block flex-nowrap wrapper" style="margin-top: 40px;">
            <main class="col-md-8 col-sm-8">
                <div class="col-md-12" id="content_main">
                    <p style="text-align: justify;font-size:13px;">                    <p style="text-align: justify;font-size:13px;">The Department has three laboratories for students and six labs for research which are well equipped with necessary chemical reagents, glass ware, lab-ware, gas Chromatography UV-vis spectrometer-219, Bomb calorimeter, Soxhlet extraction unit, magnetic balance, polarimeter, plasma refrigeration , Chemical analyser – SystronicsGoy’s balance, water and soil analysis kit, LCD projector and basic instruments for performing experiments in physical, organic and Inorganic chemistry and characterisation of different inorganic and organic compounds. The Departmental library fulfils the requirements of the faculty member and students. A number of reference books are also available. The department also publishes journal named Mithila journal of Chemistry with ISSN No-2455-0617. 
                    </p>
                    <p style="text-align: justify;font-size:13px;">The Faculty members are specialized in frontier areas of chemical sciences and they have contributed to scientific arena through scientific research and publications and are recipients of many distinguished national and International awards. A few faculty members are in the editorial board of journals as well as referees for both National and International Journals.</p>

                    </p>
                </div>
            </main>
            <div class="col-md-4 col-sm-4">
                <div class="pic">
                    <img src="{{ asset('Frontend/images/department/chemabt.png') }}">

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
                                        <th>Session</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    <tr>
                                    <td >01</td>
                                    <td>Prof. Y. Thakur</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                   10.10.1976 -
                                    31.03.1994</td>
                                    </tr>
                                    <tr>
                                    <td >02</td>
                                    <td>Prof. B. K. Choudhary</td>
                                    <td></td>
                                    <td></td>
                                    <td>01.04.1994 -
                                    22.05.1995</td>
                                    </tr>
                                    <tr>
                                    <td >03</td>
                                    <td>Prof. I. S. Jha</td>
                                    <td></td>
                                    <td></td>
                                    <td>23.05.1995 - 15.12.1996</td>
                                    </tr>
                                    <tr>
                                    <td >04</td>
                                    <td>Prof. R. B. Yadav</td>
                                    <td></td>
                                    <td></td>
                                    <td>16.21.1996 - 31.03.1998</td>
                                    </tr>
                                    <tr>
                                    <td >05</td>
                                    <td>Prof. I. S. Jha</td>
                                    <td></td>
                                    <td></td>
                                    <td>01.04.1988 - 04.09.2008</td>
                                    </tr>
                                    <tr>
                                    <td >06</td>
                                    <td>Prof. Lal Mohan Jha</td>
                                    <td></td>
                                    <td></td>
                                    <td>05.09.2008 - 04.09.2011</td>
                                    </tr>
                                    <tr>
                                    <td >07</td>
                                    <td>Prof. S. R. Kumar</td>
                                    <td></td>
                                    <td></td>
                                    <td>05.09.2011 - 04.09.2014</td>
                                    </tr>
                                    <tr>
                                    <td >08</td>
                                    <td>Prof. S. Jha</td>
                                    <td></td>
                                    <td></td>
                                    <td>05.09.2014 - 22.01.2016</td>
                                    </tr>
                                    <tr>
                                    <td >09</td>
                                    <td>Prof. A. K. Gupta</td>
                                    <td></td>
                                    <td></td>
                                    <td>23.01.2016  -	21.01.2019</td>
                                    </tr>
                                    <tr>
                                    <td >10</td>
                                    <td>  Prof.. K.K. Jha</td>
                                    <td></td>
                                    <td></td>
                                    <td>22.01.2019 - 30.11.2019</td>
                                    </tr>
                                    <tr>
                                    <td >11</td>
                                    <td><strong>Prof. R.K. Chy</strong></td>
                                    <td></td>
                                    <td></td>
                                    <td> 01.12.2019</td>
                                   
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
                               
                                    <!--<tr>
                                    <td width="44">1.</td>
                                    <td width="119"><strong><a href="prof-Ratan-Kumar-Choudhary-resume.php" target="_blank">Dr. R. K. Choudhary</a></strong></td>
                                    <td width="96"><strong>Professor & Head</strong><br><strong>Dean, faculty of Science</strong></br></td>
                                    <!--<td width="132"><strong>644906080218 9431415528</strong></td>
                                    <td width="96"><strong>9431050670</strong></td>
                                    <!--<td width="244"><a href="mailto:kumodkumarjha@gmail.com"><strong>hodchemistry@lnmu.ac.in </strong></a></td>
                                    <td width="244"><a href="mailto:hodchemistry@lnmu.ac.in"><strong>hodchemistry@lnmu.ac.in </strong></a></td>
                                    <td width="244"><img class="size-full wp-image-5033 aligncenter" src="http://lnmuacin.in/studentnotice/2019/Dr.R.K.Choudhary%20Professor.jpg" alt="" width="150" /></td>
                                    </tr>-->
                                    <tr>
                                    <td width="44">1.</td>
                                    <td width="119"><a  target="_blank">Dr. K. K. JHA</a></td>
                                    <td width="96"><strong>Professor &amp; Head</strong></td>
                                    <!--<td width="132">320356131570</td>-->
                                    <td width="96">9470644735</td>
                                    <td width="244"><a href="mailto:">hodchemistry@lnmu.ac.in<br>kumodkumarjha@gmail.com</a></td>
                                    <td width="244"><img class="size-full wp-image-5033 aligncenter" src="image/2022/Dr.K.K.Jha Professor &amp; Head che.jpg" alt="" width="150"></td>
                                    </tr>
                                    
                                    <!--<tr>-->
                                    <!--<td width="44">3.</td>-->
                                    <!--<td width="119"><a href="prof-Ashok-Kumar-Gupta.php" target="_blank">Dr. Ashok Kumar Gupta</a></td>-->
                                    <!--<td width="96">Professor</td>-->
                                    <!--<td width="132">826716762916</td>-->
                                    <!--<td width="96">9955413428</td>-->
                                    <!--<td width="244"><a href="mailto:ashokkumargupta80@gmail.com">ashokkumargupta80@gmail.com</a></td>-->
                                    <!--<td width="244"><img class="size-full wp-image-5033 aligncenter" src="http://lnmuacin.in/lnmuassets/img/default_pic.jpg" alt="" width="150" /></td>-->
                                    <!--</tr>-->
                                    
                                    <tr>
                                    <td width="44">2.</td>
                                    <td width="119"><a  target="_blank">Dr. A. Samad Ansari</a></td>
                                    <td width="96">Associate Professor</td>
                                    <!--<td width="132">315981984488</td>-->
                                    <td width="96">9334920687</td>
                                    <td width="244"><a href="mailto:asamadansari@gmail.com">asamadansari@gmail.com</a></td>
                                    <td width="244"><img class="size-full wp-image-5033 aligncenter" src="image/2022/Dr.A.Samad Ansari Associate professor che.jpg" alt="" width="150"></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="44">3.</td>
                                    <td width="119"><a  target="_blank">Dr. S. K. Choudhary</a></td>
                                    <td width="96">Professor</td>
                                    <!--<td width="132">998520831099</td>-->
                                    <td width="96">7549780312</td>
                                    <td width="244"><a >skc.cmsc@gmail.com</a></td>
                                    <td width="244"><img class="size-full wp-image-5033 aligncenter" src="image/2022/Dr.S.K.Choudhary Professor che.jpg" alt="" width="150"></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="44">4.</td>
                                    <td width="119"><a  target="_blank">Dr. Simant Kumar Srivastava</a></td>
                                    <td width="96">Assistant Professor</td>
                                    <!--<td width="132">998520831099</td>-->
                                    <td width="96">9205623886</td>
                                    <td width="244"><a >simant.iitk@gmail.com</a></td>
                                    <td width="244"><img class="size-full wp-image-5033 aligncenter" src="image/2022/Dr.Simant Kumar Srivastav Assistant Professor che.jpg" alt="" width="150"></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="44">5.</td>
                                    <td width="119"><a  target="_blank">Dr. Vikash Kumar Sonu</a></td>
                                    <td width="96">Assistant Professor</td>
                                    <!--<td width="132">998520831099</td>-->
                                    <td width="96">9402516667</td>
                                    <td width="244"><a >vikash9931@gmail.com</a></td>
                                    <td width="244"><img class="size-full wp-image-5033 aligncenter" src="image/2022/Dr.Vikash Kumar Sonu Assistant Professor che.jpg" alt="" width="150"></td>
                                    </tr>
                                    
                                    <tr>
                                    <td width="44">6.</td>
                                    <td width="119"><a target="_blank">Sri Shashi Shekhar Jha</a></td>
                                    <td width="96">Demonstrator</td>
                                    <!--<td width="132">404663818610</td>-->
                                    <td width="96">9470476675</td>
                                    <td width="244"><a >jhashekhar52@yahoo.com</a></td>
                                    <td width="244"><img class="size-full wp-image-5033 aligncenter" src="image/2022/Sri Shashi Shekhar jha demonstrator che.jpg" alt="" width="150"></td>
                                    </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <div class="container">
          
  &nbsp;
  <br>
  <h2>Achievement of the Faculty Members</h2>
  <ol>
  <li>Dr. S. R. Kumar attended Refresher course as resource person in BRA Bihar University, Muzaffarpur (2012-13) &amp; (2013-14).</li>
  <li>Prof . Ratan kr. Choudhary was IQAC. Coordinator of L.N.M.U. From 2017-2018.</li>
  <li>Prof. Ratan kumar Choudhary was member of course curriculum desin committee for PG Chemistry Syllabus Under CBCS organisad by Raj Bhawan Patna – 2017</li>
  <li>Prof. Ratan Kumar Choudhary was member of Educational board Journal of Indian Chemical Society, 2014-2016.</li>
  <li>Prof. Ratan Kumar Choudhary was Subject expert in the Appointment of teachers in Jawahar Navodaya Vidyalaya – 2016.</li>
  <li>Prof. Ratan Kumar Choudhary was Resource Person of one day ‘Induction Class-cum-CBCS workshop’ organized by C.M. Science College on 22.08.2019.</li>
  <li>Prof. Ratan Kumar Choudhary had participated in the “Work Shop on Innovations and good practices in institutional Governance of Higher Education” organized by Department of Educational Administration, NIEPA, New Delhi During February 28 march 02, 2019.</li>
  <li>Prof. Ratan Kumar Choudhary had Participated ‘NAAC Awarenes and Traning Workshop’ under the aegis  of Rajbhawan , Patna During April 04-05 2019.</li>
  <li>Prof. Ratan Kumar Choudhary was Resource Person for the review and presentation on Draft Ordinance and Regulators on CBCS at UG Level in LNMU held on January 31, 2020.</li>
  <li>Prof. Ratan Kumar Choydhary was resource person of one day seminar on ‘Chemical Science: From Mankind to plants’ organized by Department of Chemistry, K.V.Science College Madhubani on 01.02.2019.</li>
  <li>Prof. A.S. Ansari was Resource person of one day seminar on ‘Chemical Science : From Mankind to plants’ organized by Dept. of Chemistry, K.V.Science College Madhubani on 01.02.2019.</li>
  <li>Prof. Ratan Kumar Choudhary was DSW of L.N.M.U from 2018-2020.</li>
  <li>Dr. Simant Kumar Srivastav. Was Invited speaker in National Conference on ‘Recent trend and Advancements in Chemical Science organized by Department of Chemistry and Bhaskaracharya college of Applied Sciences, University of Delhi During 26-31 March 2019.</li>
  <li>Dr. Simant Kumar srivastav. Was invited speaker in 11th National Conference on solid state chemistry and allied areas organized by S.K.Parwal college of arts, Science &amp; Commerce, Nagpur During December 20-21, 2019.</li>
  <li>Dr. Simant Kr. Srivastava in reviewer of journal of Applied Physics Published by American Physical Society, USA, (I.F=2.5). (Impact Factor -2.5).</li>
  <li>Dr. Simant Kr. Srivastava in reviewer of Journal of Magnetism and magnetic material Published by Elsevier (I.F=3.1) .</li>
  <li>Dr. Simant kr. Srivastava in reviewer of Nanoscale (IF.=6.8) Published by Royal Society of Chemistry ,London.</li>
  <li>Dr. Simant Kr. Srivastav is reviewer of Journal of Materials Chemistry (I.F=4.1) Publication by Royal society of Chemistry, London.</li>
  <li>Dr. Simant Kr. Srivastav is reviewer of journal of Physical Chemistry (I.F=4.5) Published by American chemical society, USA.</li>
  <li>Prof. S. K. Chuodhary was member of selection committee for the Appointment of Assistant Professor (Guest) in Chemistry. Patliputra University Patna</li>
  </ol>
  <br>
  <br>
  <h2>Student Statistics</h2>
 <table class="table table-hover">
 <thead>
  <tr>
  <td width="151"><strong>Name of the course</strong></td>
  <td width="168"><strong>Application Received</strong></td>
  <td colspan="2" width="150"><strong>Selected</strong></td>
  <td colspan="2" width="150"><strong>Pass percentage</strong></td>
  </tr>
 </thead>
  <tbody>
  <tr>
  <td width="151"><strong>&nbsp;</strong></td>
  <td width="168"><strong>&nbsp;</strong></td>
  <td width="78"><strong>Male</strong></td>
  <td width="72"><strong>Female</strong></td>
  <td width="72"><strong>Male</strong></td>
  <td width="78"><strong>Female</strong></td>
  </tr>
  <tr>
  <td width="151">2009</td>
  <td width="168">36</td>
  <td width="78">17</td>
  <td width="72">02</td>
  <td width="72">100</td>
  <td width="78">100</td>
  </tr>
  <tr>
  <td width="151">2010</td>
  <td width="168">42</td>
  <td width="78">18</td>
  <td width="72">08</td>
  <td width="72">100</td>
  <td width="78">100</td>
  </tr>
  <tr>
  <td width="151">2011</td>
  <td width="168">60</td>
  <td width="78">22</td>
  <td width="72">14</td>
  <td width="72">73</td>
  <td width="78">100</td>
  </tr>
  <tr>
  <td width="151">2012</td>
  <td width="168">70</td>
  <td width="78">38</td>
  <td width="72">19</td>
  <td width="72">100</td>
  <td width="78">100</td>
  </tr>
  <tr>
  <td width="151">2012-14</td>
  <td width="168">81</td>
  <td width="78">36</td>
  <td width="72">25</td>
  <td width="72">74</td>
  <td width="78">84</td>
  </tr>
  <tr>
  <td width="151">2013-15</td>
  <td width="168">63</td>
  <td width="78">23</td>
  <td width="72">29</td>
  <td width="72">72</td>
  <td width="78">80</td>
  </tr>
  <tr>
  <td width="151">2014-16</td>
  <td width="168">65</td>
  <td width="78">41</td>
  <td width="72">11</td>
  <td width="72">81</td>
  <td width="78">85</td>
  </tr>
  <tr>
  <td width="151">2015-17</td>
  <td width="168">64</td>
  <td width="78">28</td>
  <td width="72">24</td>
  <td width="72">68</td>
  <td width="78">75</td>
  </tr>
  <tr>
  <td width="151">2016-18</td>
  <td width="168">44</td>
  <td width="78">17</td>
  <td width="72">14</td>
  <td width="72">100%</td>
  <td width="78">100%</td>
  </tr>
  <tr>
  <td width="151">2017-19</td>
  <td width="168"></td>
  <td width="78">32</td>
  <td width="72">26</td>
  <td width="72">100%</td>
  <td width="78">100%</td>
  </tr>
  <tr>
  <td width="151">2018-20</td>
  <td width="168"></td>
  <td width="78">33</td>
  <td width="72">22</td>
  <td width="72">100%</td>
  <td width="78">100%</td>
  </tr>
  <tr>
  <td width="151">2019-21</td>
  <td width="168"></td>
  <td width="78">39</td>
  <td width="72">30</td>
  <td width="72">100%</td>
  <td width="78">100%</td>
  </tr>
  </tbody>
  </table>
  <br>
  <br>
  <h2>Achievements of the Students:</h2>
  <ol>
    <li>Dr. Ratan Kumar Choudhary, Professor, Head, Dean of science, L.N.M.U</li>
    <li>Dr. Kumod Kr. Jha , Professor &amp; Ex- Head, Chemistry L.N.M.U</li>
    <li>Prof. Rameshwara Jha , Head , Chemistry R.K.College  Madhubani.</li>
    <li>Jayanti kant Jha, Associate Professor, Chemistry, R.K.College, Madhubani.</li>
    <li>Dr. Bhola Chourasia, Principal, R.N.A.R. College Samastipur</li>
    <li>Dr. Ashok Kumar Jha , Associate Professor, DSW, LNMU</li>
    <li>Dr. B.G. Thakur, Associate Professor. C.M.Science College , Darbhanga</li>
    <li>Prof. Dilip Choudhary (Ex-MLC.), Head, Chemistry, C.M.Science College, Darbhanga</li>
    <li>Dr. Prem Mohan Mishra, Prof. &amp; Head, Chemistry, M.L.S.M. College, Darbhanga.</li>
    <li>Dr. K. K. Jha Associate Prof, Deshbandhu College, New Delhi.</li>
    <li>Dr. Vivekanand Jha, Associate Prof. M.R.M College, Darbhanga.</li>
    <li>Dr. Kapileshwara Mishra , Associate Prof., M.L.S.M. College Darbhanga.</li>
    <li>Dr. Renuka Thakur , Associate Prof. M.L.S.M. College Darbhanga</li>
    <li>Dr. Lalita Kumari Mishra, Associate Prof, M.L.S.M. College Darbhanga</li>
    <li>Dr. S.N.Singh, , Associate Prof, G.D. College</li>
    <li>Dr. Manoranjan Singh, Principal, R.C.S. College Bitthat</li>
    <li>Dr. Uday Shankar Yadav , Principal, Kishanganj College Kishanganj</li>
    <li>Dr. Chandra kant Yadav , Ex-Head, &amp; Dean, B.N.Mandal University, Purnea  University.</li>
    <li>Dr. Yogendra Yadav, Ex-DSW,Ex-Controller of Examination, Ex-Proctor B.N.Maldal University, Madhupura.</li>
    <li>Dr. Yogendra Jha, Ex-Head, C.M.Science College.</li>
    <li>Dr. Naresh Kumar, Ex-Head,B.N.Mandal University, Madhepura.</li>
    <li>Debasis bashu, ISM Dhanbad.</li>
    <li>Alakh Niranjan Thakur, Scientist, NASA (USA)</li>
    <li>Dilip Kumar Mishra, S.P.Rail, Kathihar, Bihar</li>
    <li>Ganesh Kumar, Director, Alchemi Pharmaceutical Company, Faridabad.</li>
    <li>Prinkar Jha , Research Fellow, CDRI, Lucknow.</li>
    <li>S.K Gupta, Professor, Jiwaji University Gwallior.</li>
    <li>Atul Jha, Business Analyst, USA.</li>
    <li>Amerendra Bijay, Professor, I.I.T. Chennai.</li>
    <li>Dr. S.N.Singh, , Associate Prof, G.D. College</li>
  </ol>
  
  <br>
  <h2>Students Qualified NET/GATE</h2>
  <ol>
    <li>Miss Kavita – CSIR – JRF,2016</li>
    <li>Amit Kumar jha UGC-JRF-2014 GATE – 2014</li>
    <li>M.H. Khan UGC – NET-2018</li>
    <li>Miss Sadhna, UGC-NETR-2011</li>
    </ol>
  
  
  
  
  <br>
  <!--<h2>Research Scholars</h2>
  
  
 <table class="table table-hover">
  <tbody>
  <tr>
  <td width="61"><strong>Sl. No.</strong></td>
  <td width="180"><strong>Name</strong></td>
  <td width="306"><strong>Title of Work</strong></td>
  <td width="157"><strong>Supervisor</strong></td>
  </tr>
  <tr>
  <td width="61">01</td>
  <td width="180">Anand Mohan Jha</td>
  <td width="306"></td>
  <td width="157">Prof. K. K. Jha</td>
  </tr>
  <tr>
  <td width="61">02</td>
  <td width="180">Ram Vinay Thakur</td>
  <td width="306"></td>
  <td width="157">Prof. K. K. Jha</td>
  </tr>
  <tr>
  <td width="61">03</td>
  <td width="180">Navin Kumar Upadhyay</td>
  <td width="306"></td>
  <td width="157">Prof. K. K. Jha</td>
  </tr>
  <tr>
  <td width="61">04</td>
  <td width="180">Ram Eqbal</td>
  <td width="306"></td>
  <td width="157">Dr. A. S. Ansari</td>
  </tr>
  <tr>
  <td width="61">05</td>
  <td width="180">Sanjay Kumar</td>
  <td width="306"></td>
  <td width="157">Prof. S. R. Kumar</td>
  </tr>
  <tr>
  <td width="61">06</td>
  <td width="180">Rinki Kumari</td>
  <td width="306"></td>
  <td width="157">Prof. S. R. Kumar</td>
  </tr>
  </tbody>
  </table>-->
  <br>
  <br>
  <br>
  
  <h2>Research Scholars</h2>
  <p><strong>Ph.D/awarded : 76 (October 2014- December-2020</strong></p>
  <p><strong>Ph.D/Persuing/ Course Work Completed</strong></p>
  <ol>
    <li>Mrs. Madhu Sahu</li>
    <li>Mr. Pavan Kumar Sada</li>
    <li>Ms. Anupama</li>
    <li>Mrs. Nausheen</li>
    <li>Mr. Pratyoosh Kumar</li>
    <li>Mr. shashi Shekar Jha</li>
    <li>Mr. Akhilesh Kr. Singh</li>
    <li>Mr. Manoj Kumar</li>
    <li>Ms. Pooja Kumari</li>
    <li>Ms. Sandhya Kumari</li>
    <li>Ms. Sabina Perween</li>
    <li>Mr. Kundan Kumar Jha</li>
   
  </ol>
  <br>
  <br>
  <!--<h2>Syllabus</h2>
    <center><object width="800" height="700" data="http://lnmuacin.in/studentnotice/newdata/final%20syllabus%20-%20CBCS%20(Revised)%20-%20Chemistry-min.pdf"></object></center>
  <strong>Semester-I</strong>
  
  <strong> </strong>
 <table class="table table-hover">
  <tbody>
  <tr>
  <td width="129"><strong>PAPER</strong></td>
  <td width="182"><strong>SUBJECT</strong></td>
  <td width="123"><strong>MARKS ESE+CIA</strong></td>
  <td width="83"><strong>Cr. Hr. CR (T+P)</strong></td>
  <td width="130"><strong>PAPER</strong></td>
  </tr>
  <tr>
  <td width="129">Paper-I</td>
  <td width="182">Physical chemistry</td>
  <td width="123">70+30</td>
  <td width="83">4(5+0)</td>
  <td width="130">CHM 511</td>
  </tr>
  <tr>
  <td width="129">Paper-II</td>
  <td width="182">Inorganic Chemistry</td>
  <td width="123">70+30</td>
  <td width="83">5(5+0)</td>
  <td width="130">CHM 512</td>
  </tr>
  <tr>
  <td width="129">Paper-III</td>
  <td width="182">Organic Chemistry</td>
  <td width="123">70+30</td>
  <td width="83">5(5+0)</td>
  <td width="130">CHM 513</td>
  </tr>
  <tr>
  <td width="129">Paper-IV</td>
  <td width="182">Lab Course</td>
  <td width="123">50+50</td>
  <td width="83">6(0+6)</td>
  <td width="130">CHM 514</td>
  </tr>
  <tr>
  <td width="129"></td>
  <td width="182"><strong>TOTAL</strong></td>
  <td width="123"><strong>400</strong></td>
  <td width="83"><strong>20(14+6)</strong></td>
  <td width="130"></td>
  </tr>
  </tbody>
  </table>
  &nbsp;-->
  
  <!--<strong>Semester-II</strong>
 <table class="table table-hover">
  <tbody>
  <tr>
  <td width="111"><strong>PAPER</strong></td>
  <td width="201"><strong>SUBJECT</strong></td>
  <td width="123"><strong>MARKS ESE+CIA</strong></td>
  <td width="83"><strong>Cr. Hr. CR (T+P)</strong></td>
  <td width="130"><strong>PAPER</strong></td>
  </tr>
  <tr>
  <td width="111">Paper-V</td>
  <td width="201">Quantum chemistry</td>
  <td width="123">70+30</td>
  <td width="83">5(5+0)</td>
  <td width="130">CHM 521</td>
  </tr>
  <tr>
  <td width="111">Paper-VI</td>
  <td width="201">Coordination Chemistry</td>
  <td width="123">70+30</td>
  <td width="83">6(6+0)</td>
  <td width="130">CHM 522</td>
  </tr>
  <tr>
  <td width="111">Paper-VII</td>
  <td width="201">Chemistry of Bio molecules</td>
  <td width="123">70+30</td>
  <td width="83">5(5+0)</td>
  <td width="130">CHM 523</td>
  </tr>
  <tr>
  <td width="111">Paper-VIII</td>
  <td width="201">Lab Course</td>
  <td width="123">50+50</td>
  <td width="83">4(0+4)</td>
  <td width="130">CHM 524</td>
  </tr>
  <tr>
  <td width="111"></td>
  <td width="201"><strong>TOTAL</strong></td>
  <td width="123"><strong>400</strong></td>
  <td width="83"><strong>20(16+4)</strong></td>
  <td width="130"></td>
  </tr>
  </tbody>
  </table>
  &nbsp;-->
  
  <!--<strong>Semester-III</strong>
 <table class="table table-hover">
  <tbody>
  <tr>
  <td width="111"><strong>PAPER</strong></td>
  <td width="201"><strong>SUBJECT</strong></td>
  <td width="123"><strong>MARKS ESE+CIA</strong></td>
  <td width="83"><strong>Cr. Hr. CR (T+P)</strong></td>
  <td width="130"><strong>PAPER</strong></td>
  </tr>
  <tr>
  <td width="111">Paper- IX</td>
  <td width="201">Spectroscopy</td>
  <td width="123">70+30</td>
  <td width="83">5(5+0)</td>
  <td width="130">CHM 531</td>
  </tr>
  <tr>
  <td width="111">Paper- X</td>
  <td width="201">Bio-Chemistry</td>
  <td width="123">70+30</td>
  <td width="83">5(5+0)</td>
  <td width="130">CHM 532</td>
  </tr>
  <tr>
  <td width="111">Paper- XI</td>
  <td width="201">Environmental and analytical Chemistry</td>
  <td width="123">70+30</td>
  <td width="83">4(4+0)</td>
  <td width="130">CHM 533</td>
  </tr>
  <tr>
  <td width="111">Paper- XII</td>
  <td width="201">Lab Course</td>
  <td width="123">50+50</td>
  <td width="83">6(0+6)</td>
  <td width="130">CHM 534</td>
  </tr>
  <tr>
  <td width="111"></td>
  <td width="201"><strong>TOTAL</strong></td>
  <td width="123"><strong>400</strong></td>
  <td width="83"><strong>20(16+4)</strong></td>
  <td width="130"></td>
  </tr>
  </tbody>
  </table>
  &nbsp;-->
  
  <!--<strong>Semester-IV (Group A – Physical Special)</strong>
 <table class="table table-hover">
  <tbody>
  <tr>
  <td width="102"><strong>PAPER</strong></td>
  <td width="210"><strong>SUBJECT</strong></td>
  <td width="123"><strong>MARKS ESE+CIA</strong></td>
  <td width="83"><strong>Cr. Hr. CR (T+P)</strong></td>
  <td width="130"><strong>PAPER</strong></td>
  </tr>
  <tr>
  <td width="102">Paper- XIII</td>
  <td width="210">Advance Quantum Chemistry</td>
  <td width="123">70+30</td>
  <td width="83">5(5+0)</td>
  <td width="130">CHM 541</td>
  </tr>
  <tr>
  <td width="102">Paper- XIV</td>
  <td width="210">Molecular thermodynamics</td>
  <td width="123">70+30</td>
  <td width="83">5(5+0)</td>
  <td width="130">CHM 542</td>
  </tr>
  <tr>
  <td width="102">Paper- XV</td>
  <td width="210">Chemical Dynamics</td>
  <td width="123">70+30</td>
  <td width="83">4(4+0)</td>
  <td width="130">CHM 543</td>
  </tr>
  <tr>
  <td width="102">Paper- XVI</td>
  <td width="210">Physical Chemistry Lab</td>
  <td width="123">50+50</td>
  <td width="83">6(0+6)</td>
  <td width="130">CHM 544</td>
  </tr>
  <tr>
  <td width="102"></td>
  <td width="210"><strong>TOTAL</strong></td>
  <td width="123"><strong>400</strong></td>
  <td width="83"><strong>20(16+4)</strong></td>
  <td width="130"><strong> </strong></td>
  </tr>
  </tbody>
  </table>
  &nbsp;-->
  
  <!--<strong>Semester-IV (Group B – Inorganic Special)</strong>
 <table class="table table-hover">
  <tbody>
  <tr>
  <td width="102">PAPER</td>
  <td width="255">SUBJECT</td>
  <td width="95">MARKS ESE+CIA</td>
  <td width="85">Cr. Hr. CR (T+P)</td>
  <td width="111">PAPER</td>
  </tr>
  <tr>
  <td width="102">Paper- XIII</td>
  <td width="255">Ligand Field Theory</td>
  <td width="95">70+30</td>
  <td width="85">5(5+0)</td>
  <td width="111">CHM 541</td>
  </tr>
  <tr>
  <td width="102">Paper- XIV</td>
  <td width="255">Application of Group Theory</td>
  <td width="95">70+30</td>
  <td width="85">5(5+0)</td>
  <td width="111">CHM 542</td>
  </tr>
  <tr>
  <td width="102">Paper- XV</td>
  <td width="255">Organo Transition Metal Chemistry</td>
  <td width="95">70+30</td>
  <td width="85">4(4+0)</td>
  <td width="111">CHM 543</td>
  </tr>
  <tr>
  <td width="102">Paper- XVI</td>
  <td width="255">Inorganic Chemistry Lab</td>
  <td width="95">50+50</td>
  <td width="85">6(0+6)</td>
  <td width="111">CHM 544</td>
  </tr>
  <tr>
  <td width="102"></td>
  <td width="255"><strong>TOTAL</strong></td>
  <td width="95"><strong>400</strong></td>
  <td width="85"><strong>20(16+4)</strong></td>
  <td width="111"><strong> </strong></td>
  </tr>
  </tbody>
  </table>
  &nbsp;-->
  
  <!--<strong>Semester-IV (Group C – Organic Special)</strong>
 <table class="table table-hover">
  <tbody>
  <tr>
  <td width="102"><strong>PAPER</strong></td>
  <td width="274"><strong>SUBJECT</strong></td>
  <td width="85"><strong>MARKS ESE+CIA</strong></td>
  <td width="85"><strong>Cr. Hr. CR (T+P)</strong></td>
  <td width="102"><strong>PAPER</strong></td>
  </tr>
  <tr>
  <td width="102">Paper- XIII</td>
  <td width="274">Organic Synthesis</td>
  <td width="85">70+30</td>
  <td width="85">5(5+0)</td>
  <td width="102">CHM 541</td>
  </tr>
  <tr>
  <td width="102">Paper- XIV</td>
  <td width="274">Chemistry of Natural Products</td>
  <td width="85">70+30</td>
  <td width="85">5(5+0)</td>
  <td width="102">CHM 542</td>
  </tr>
  <tr>
  <td width="102">Paper- XV</td>
  <td width="274">Medicinal and Heterocyclic  Chemistry</td>
  <td width="85">70+30</td>
  <td width="85">4(4+0)</td>
  <td width="102">CHM 543</td>
  </tr>
  <tr>
  <td width="102">Paper- XVI</td>
  <td width="274">Organic Chemistry Lab</td>
  <td width="85">50+50</td>
  <td width="85">6(0+6)</td>
  <td width="102">CHM 544</td>
  </tr>
  <tr>
  <td width="102"></td>
  <td width="274"><strong>TOTAL</strong></td>
  <td width="85"><strong>400</strong></td>
  <td width="85"><strong>20(16+4)</strong></td>
  <td width="102"><strong> </strong></td>
  </tr>
  </tbody>
  </table>-->
  &nbsp;
  
  <!--<strong>The Following grading system has been used:</strong>
 <table class="table table-hover">
  <tbody>
  <tr>
  <td width="140"><strong>Letter Grade</strong></td>
  <td width="161"><strong>Percentage Range</strong></td>
  <td width="189"><strong>Numerical of Letter Grade</strong></td>
  <td width="170"><strong>Description of Grade</strong></td>
  </tr>
  <tr>
  <td width="140"><strong>A</strong></td>
  <td width="161">100-90</td>
  <td width="189">10</td>
  <td width="170">Outstanding</td>
  </tr>
  <tr>
  <td width="140"><strong>B</strong></td>
  <td width="161">80-89</td>
  <td width="189">9</td>
  <td width="170">Excellent</td>
  </tr>
  <tr>
  <td width="140"><strong>C</strong></td>
  <td width="161">70-79</td>
  <td width="189">8</td>
  <td width="170">Very Good</td>
  </tr>
  <tr>
  <td width="140"><strong>D</strong></td>
  <td width="161">60-69</td>
  <td width="189">7</td>
  <td width="170">Good</td>
  </tr>
  <tr>
  <td width="140"><strong>E</strong></td>
  <td width="161">50-59</td>
  <td width="189">6</td>
  <td width="170">Average</td>
  </tr>
  <tr>
  <td width="140"><strong>P</strong></td>
  <td width="161">45-49</td>
  <td width="189">5</td>
  <td width="170">Pass</td>
  </tr>
  <tr>
  <td width="140"><strong>F</strong></td>
  <td width="161">Less than 45</td>
  <td width="189">Less than 5</td>
  <td width="170">Fail</td>
  </tr>
  </tbody>
  </table>
  <p>&nbsp;</p>
  <h2>Student Progression</h2>
 <table class="table table-hover">
  <tbody>
  <tr>
  <td width="262"><strong>Student progression</strong></td>
  <td width="227"><strong>Percentage against enrolled</strong></td>
  </tr>
  <tr>
  <td width="262">PG to Ph.D.</td>
  <td width="227">15</td>
  </tr>
  <tr>
  <td width="262">Employed
  
  Campus Selection
  
  other than campus recruitment</td>
  <td width="227">43
  
  01(Ajim Premji Foundation)
  
  42</td>
  </tr>
  </tbody>
  </table>-->
  <br>
  <br>
  <h2>Seminars/ Conference / Workshop Organized</h2>
  <ol>
    <li>Workshop on Symmetry and group theory (one week) – 1988</li>
    <li>Workshop on Spectroscopy, 1988.</li>
    <li>Workshop on thermodynamics, 1998</li>
    <li>Workshop on Percyclic  reaction – 2012(March)</li>
    <li>Workshop on Recent trends in Chemistry – November 2014.</li>
    <li>Seminar on the Synthesis in green Chemistry 2017</li>
    <li>Debate on Merit and Demerit of E- Waste, 2017.</li>
    <li>Seminar on Allolopathy – 2018.</li>
    <li>Seminar on Medicinal Chemistry – 2018.</li>
    <li>Symposium on “water pollution: Course and Remedies‘ -2019.</li>
    <li>Science and Society in the 21st Century: Quest for Excellence- 2019.</li>
    <li>Seminar on ‘Microwave Processing of Inorganic Materials’ -2019</li>
    <li>International E- Conference on Multifunctional Materials and Environment ( E-ICMME - 21) 01-02 February 2021</li>
    <li>International E- Conference on Recent Advances in Chemical Sciences (E-ICRACS-21) Organized by: University Department of Chemistry Lalit Narayan Mithila University<br> July, 28 2021 </li>
    </ol>
  <br>
  <br>
  <h2>Journal Pulished by Department:</h2>
  <p><strong>Mithila Journal of Chemistry (Yearly)  ISSN NO 2455-0167</strong></p>
  <br>
  <br>
  
  
              <!-- <h2>Programmes Organized</h2>
 <table class="table table-hover">
  <tbody>
  <tr>
  <th width="20%">SI. No.</th>
  <th width="20%">Name of the Programme</th>
  <th width="20%">Resource Persons</th>
  <th width="20%">No. of Beneficiari</th>
  <th width="20%">Outcome</th>
  </tr>
  <tr>
  <td width="20%">1.</td>
  <td width="20%">Workshop in Pericylic Reactions(2012-13)</td>
  <td width="20%">1.Dr. Lallan Mishra, BHU<br />
  2. Dr. M. S. Singh, BHU</td>
  <td width="20%">215</td>
  <td width="20%">Enchancement of knowledge of students,scholars &amp; teachers</td>
  </tr>
  <tr>
  <td width="20%">2.</td>
  <td width="20%">Workshop on<br />
  recent trends in<br />
  chemistry (2014-<br />
  15)</td>
  <td width="20%">1.Dr. Lallan Mishra, BHU<br />
  2. Dr. Shekhar shrivastava, Allahabad</td>
  <td width="20%">246</td>
  <td width="20%">Enchancement of knowledge</td>
  </tr>
  </tbody>
  </table> -->
  <div class="row">
  
  
  <div class="col-md-12">
  <h2>Infrastructure Facilities</h2>
  <ul>
  <!--<li>Gas Chromatography</li>
    <li>UV Spectrophotometer</li>
    <li>Colorimeter, pH-meter, BOD</li>
    <li>Water Analyser</li>
    <li>Gas Chromatography.</li>-->
  </ul>
  <ol style="list-style-type: lower-alpha;">
  <li>Library : 01 (2377 Books + Old Volume of Journals )</li>
    <li>Internet facilities for staff and students : Yes</li>
    <li>Total number of Class Room : 04</li>
   <!-- <li>Class Room with ICT Facility : Yes</li>
    <li>Students’ Laboratories : 04</li>-->
    <li>Research Laboratories : 06</li>
    <li>Wash Rooms : 04</li>
    <li>Common room (Girl) : 01</li>
    <li>Lavatory (Girl)  : 01</li>
  </ol>
  <br>
  <br>
  <h2>Research Grants/ Project</h2>
  <ol>
  <li>RUSA, UGC</li>
  <li>Faculty Start-Up Grant UGC New Delhi. (10 Lakh)  (Dr. Simant Kumar Srivastav)</li>
  </ol>
  <br>
  <br>
  <h2>Research Facilities</h2>
  <ol>
  <li>Spin coating Unit ( For thin film deposition )</li>
  <li>Programmable Muffle Furnace (working Temperature 900oC)</li>
  <li>Weighing Balance, Sartorius (Accuracy. 0.0001g )</li>
  <li>Oven :03.</li>
  <li>Magnetic Stirrer : 03.</li>
  <li>Weighing Balance, Kroy (Accuracy : 0.01g )</li>
  <li>Centrifuge.</li>
  <li>Uttrasanicator.</li>
  <li>Hydraulic Press.</li>
  <li>Distillation Unit.</li>
  <li>Gas Chromatography.</li>
  <li>UV – Spectrophotometer.</li>
  <li>Bomb Calorimeter.</li>
  <li>Colorimeter.</li>
  <li>PH-meter</li>
  <li>BOD</li>
  <li>Water Analyser</li>
  <li>IR – Spectrometer</li>
  <li>Particle size analyzer</li>
  <!--<li>Programmable Muffle Furnace (working Temperature 900oC)</li>-->
  </ol>
  <br>
  <br>
  </div>
  </div>
  <div class="row">
  <div class="col-md-12">
    <h2>Supporting Staff </h2>
    &nbsp;
   <table class="table table-hover">
    <thead>
    <tr>
    <td width="44"><strong>Sl. No.</strong></td>
    <td width="119"><strong>Name</strong></td>
    <td width="96"><strong>Designation</strong></td>
    <!--<td width="132"><strong>Aadhar No.</strong></td>-->
    <td width="96"><strong>Mobile </strong></td>
    <td width="244"><strong>E-mail id</strong></td>
    <td width="244"><strong>Photo</strong></td>
    </tr>
</thead>
    <tbody>
    <tr>
    <td width="44">1.</td>
    <td width="119"><strong>Vikash Kumar</strong></td>
    <td width="96"><strong>LDC</strong></td>
    <!--<td width="132"><strong>820097735992</strong></td>-->
    <td width="96"><strong>8521887755</strong></td>
    <td width="244"><!--<a href="mailto:ashokkumargupta80@gmail.com"><strong>ashokkumargupta80@gmail.com</strong></a>--></td>
    <td width="244"><img class="size-full wp-image-5033 aligncenter" src="http://lnmuacin.in/studentnotice/pics/Vikash Kumar LDC Chemistry Dept.jpg" alt="" width="150"></td>
    </tr>
    <tr>
    <td width="44">2.</td>
    <td width="119">Amirullah</td>
    <td width="96">4th grade</td>
    <!--<td width="132">347190333441</td>-->
    <td width="96">8051330161</td>
    <td width="244"><!--<a href="mailto:professorsrkumar@gmail.com">professorsrkumar@gmail.com</a>--></td>
    <td width="244"><img class="size-full wp-image-5033 aligncenter" src="http://lnmuacin.in/studentnotice/pics/Amirullah 4th Grade Che. Dept..jpg" alt="" width="150"></td>
    </tr>
    <tr>
    <td width="44">3.</td>
    <td width="119">Ram Chandra Prasad Singh</td>
    <td width="96">4th grade</td>
    <!--<td width="132">859421034420</td>-->
    <td width="96">9708508936</td>
    <td width="244"><!--<a href="mailto:rkc956@gmail.com">rkc956@gmail.com</a>--></td>
    <td width="244"><img class="size-full wp-image-5033 aligncenter" src="http://lnmuacin.in/studentnotice/pics/Ram Chandra Prasad Singh 4 th Grade Che. Dept.jpg" alt="" width="150"></td>
    </tr>
    <tr>
    <td width="44">4.</td>
    <td width="119">Kailash Thakur</td>
    <td width="96">Gasman</td>
    <!--<td width="132">457077073157</td>-->
    <td width="96">9931346666</td>
    <td width="244"><!--<a href="mailto:kumodkumarjha@gmail.com">kumodkumarjha@gmail.com</a>--></td>
    <td width="244"><img class="size-full wp-image-5033 aligncenter" src="http://lnmuacin.in/studentnotice/pics/Kailash Kumar Gas Man Che. Dept.jpg" alt="" width="150"></td>
    </tr>
    <!--<tr>
    <td width="44">5.</td>
    <td width="119">Sunil Kumar Ram</td>
    <td width="96">4th grade</td>
    <!--<td width="132">948516224922</td>
    <td width="96">6203071898</td>
    <td width="244"><!--<a href="mailto:asamadansari@gmail.com">asamadansari@gmail.com</a></td>
    <td width="244"><img class="size-full wp-image-5033 aligncenter" src="http://lnmuacin.in/lnmuassets/img/default_pic.jpg" alt="" width="150" /></td>
    </tr>-->
    <tr>
    <td width="44">5.</td>
    <td width="119">Bhola Paswan</td>
    <td width="96">4th grade</td>
    <!--<td width="132">994907073441</td>-->
    <td width="96">9304309136</td>
    <td width="244"><!--<a href="mailto:jhashekhar52@yahoo.com">jhashekhar52@yahoo.com</a>--></td>
    <td width="244"><img class="size-full wp-image-5033 aligncenter" src="http://lnmuacin.in/studentnotice/pics/Bhola Paswan 4 th Grade che. Dept..jpg" alt="" width="150"></td>
    </tr>
    <!--<tr>
    <td width="44">7.</td>
    <td width="119">Raja Ram Yadav</td>
    <td width="96">4th grade</td>
    <!--<td width="132">389403021719</td>
    <td width="96">7546842442</td>
    <td width="244"><!--<a href="mailto:asamadansari@gmail.com">asamadansari@gmail.com</a></td>
    <td width="244"><img class="size-full wp-image-5033 aligncenter" src="http://lnmuacin.in/lnmuassets/img/default_pic.jpg" alt="" width="150" /></td>
    </tr>-->
    <tr>
    <td width="44">6.</td>
    <td width="119"> Narendra</td>
    <td width="96">4th grade</td>
    <!--<td width="132">389403021719</td>-->
    <td width="96"></td>
    <td width="244"><!--<a href="mailto:asamadansari@gmail.com">asamadansari@gmail.com</a>--></td>
    <td width="244"><img class="size-full wp-image-5033 aligncenter" src="http://lnmuacin.in/studentnotice/pics/Nirendra  4th grade Che. Dept..jpg" alt="" width="150"></td>
    </tr>
    </tbody>
    </table>
  
  </div>
  </div>
  </div>
    </div>
@endsection
