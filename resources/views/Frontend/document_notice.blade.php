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
                                                href="#" style="color:#7C0000" title="">Document Notice</a>
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

            @include('Frontend.includes.sidebar.documents_menu')

            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Notification/Notice</h2>
                </div>
                <div class="wpb_text_column wpb_content_element ">
                    <div class="wpb_wrapper">

                        <table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%">

                        <thead>

                        <tr class="row-1 odd">
                          <th class="column-1" style="width: 84.8889px;">TYPE</th><th class="column-2" style="width: 89.8889px;">DATE</th><th class="column-3" style="width: 883.889px;">SUBJECT</th><th class="column-4" style="width: 105px;">DOWNLOAD</th>
                        </tr>
                      </thead>
                      <tbody class="row-hover">
                          <tr class="row-3">
                          </tr><tr class="row-3">
                          <td class="column-1">Notice</td><td class="column-2">13.06.2022 </td><td class="column-3">Notification Memo No. 108/22 </td><td class="column-4"><a href="Notice/Memo No. 108 dt. 13.06.2022.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                          <tr><td class="column-1">Notice</td><td class="column-2">13.06.2022 </td><td class="column-3">Notification Memo No. 107/22  </td><td class="column-4"><a href="Notice/Memo No. 107 dt. 13.06.2022.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                          <tr><td class="column-1">Notice</td><td class="column-2">10.06.2022 </td><td class="column-3">Notification of Examination Programme and Centre for B.Ed. Part-II (Session : 2020-22) Examination-2022 </td><td class="column-4"><a href="Notice/B.ed/Memo No. - XC-9397-9451-22 Date - 10.06.2022.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                          <tr><td class="column-1">Notice</td><td class="column-2">06.06.2022 </td><td class="column-3">Notice of Managing Council Meeting </td><td class="column-4"><a href="Notice/Notice of Managing Council Meeting.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                          <tr><td class="column-1">Notice</td><td class="column-2">06.06.2022 </td><td class="column-3">Univ Memo No. 13877-13883-22 </td><td class="column-4"><a href="Notice/Univ Memo No. 13877-13883-22 dt. 06.06.2022.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                          <tr><td class="column-1">Notice</td><td class="column-2">02.06.2022 </td><td class="column-3">Notification Memo - Ph.D 39794-883-22 </td><td class="column-4"><a href="Notice/Notification Memo - Ph.D 39794-883-22 Date - 02.06.2022.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                          <tr><td class="column-1">Notice</td><td class="column-2">30.05.2022 </td><td class="column-3">Notification Memo No -SC-96-22 </td><td class="column-4"><a href="Notice/Notification Memo No -SC-96-22 Date - 30.05.2022.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                          <tr><td class="column-1">Notice</td><td class="column-2">30.05.2022 </td><td class="column-3">Memo No. 97 date 30.05.2022</td><td class="column-4"><a href="Notice/MemoNo.97.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                      <tr class="row-3">
                          <td class="column-1">Notice</td><td class="column-2">30.05.2022 </td><td class="column-3">Memo No. 98 date 30.05.2022</td><td class="column-4"><a href="Notice/Memo No. 98 date 30.05.2022.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                          <tr><td class="column-1">Notice</td><td class="column-2">26.05.2022 </td><td class="column-3">Notification Memo No -UB-653-22 </td><td class="column-4"><a href="Notice/Notification Memo No -UB-653-22 Date - 26.05.2022.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                          <tr><td class="column-1">Notice</td><td class="column-2">23.05.2022 </td><td class="column-3">Rectification Memo No -XC-8376-8390-22</td><td class="column-4"><a href="Notice/Rectification Memo No -XC-8376-8390-22 Date - 23.05.2022.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                          <tr><td class="column-1">Notice</td><td class="column-2">23.05.2022 </td><td class="column-3">Rectification Office Memo No-XC-8347-8362-22</td><td class="column-4"><a href="Notice/Rectification Office Memo No-XC-8347-8362-22 Date - 23.05.2022.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                         <tr><td class="column-1">Notice</td><td class="column-2">23.05.2022 </td><td class="column-3">Univ. Memo No. C-IC-13697-13703-22</td><td class="column-4"><a href="Notice/Univ. Memo No. C-IC-13697-13703-22 Dt. 23.05.2022.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>

                        <tr><td class="column-1">Notice</td><td class="column-2">19.05.2022 </td><td class="column-3">पत्रांक C-DR-I-13658-22 </td><td class="column-4"><a href="Notice/पत्रांक -DR-I-13658-22 Date - 19.05.2022.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">21.04.2022 </td><td class="column-3">Memo No C-ccdc-13376-13372-22</td><td class="column-4"><a href="Notice/Memo No C-ccdc-13376-13372-22 (2).pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                         <tr><td class="column-1">Notice</td><td class="column-2">19.04.2022 </td><td class="column-3">Notification Examination Programme &amp; Centre of M.B.A. 4th Semester (Session : 2019-21) Viva-Voce-cum-Practical Examination</td><td class="column-4"><a href="Notice/Memo No. - XC-6936-6951-22 Date - 19.04.2022.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                          <tr><td class="column-1">Notice</td><td class="column-2">11.04.2022 </td><td class="column-3">Notification Memo No - SC-58-22</td><td class="column-4"><a href="Notice/Notification Memo No - SC-58-22.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">11.04.2022 </td><td class="column-3">Notification Memo No -XC-5293-5308-22</td><td class="column-4"><a href="Notice/Notification Memo No -XC-5293-5308-22-compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">08.04.2022 </td><td class="column-3">Notification Examination Forms, Fee and Examination Programme of B.Lib. &amp; Information Science Examination, 2022</td><td class="column-4"><a href="Notice/Programme of B.Lib_compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                           <tr><td class="column-1">Notice</td><td class="column-2">06.04.2022 </td><td class="column-3">Notification Examination Programme and Centre of B.Tech. (CSE) 1st Semester (Session : 2020-24) Backlog/Summer Examination-2020</td><td class="column-4"><a href="Notice/CSE 1st.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">06.04.2022 </td><td class="column-3">Notification Examination Programme &amp; Centre of B.Tech. (CSE) 3rd Semester (Session : 2019-23) Backlog/Summer Examination-2020</td><td class="column-4"><a href="Notice/CSE 3rd S.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">06.04.2022 </td><td class="column-3">Notification Examination Programme &amp; Centre of B.Tech. (IT) 3rd Semester (Session : 2019-23) Backlog/Summer Examination-2020</td><td class="column-4"><a href="Notice/B.Tech. (IT) 3rd S.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">06.04.2022 </td><td class="column-3">Notification of University Representative (UR) Memo No C/CCDC/13061-13104/22</td><td class="column-4"><a href="Notice/Notification of University Representative (UR) Memo No CCCDC13061-13104-22 dated 06.04.2022-compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                           <tr><td class="column-1">Notice</td><td class="column-2">06.04.2022 </td><td class="column-3">Notificaton Prograamme and Centre of B.Tech. (BI) 1st Semester (Session : 2020-24) Backlog/Summer Examination-2020</td><td class="column-4"><a href="Notice/B.Tech. (BI) 1st Semeste.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>

                          </tr>
                          <tr><td class="column-1">Notice</td><td class="column-2">06.04.2022 </td><td class="column-3">Notification Examination Programme and Centre of B.Tech. (CSE) 6th Semester (Session : 2018-22) Backlog/Summer Examination-2021</td><td class="column-4"><a href="Notice/Centre of B.Tech. (CSE) 6th S.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>

                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">06.04.2022 </td><td class="column-3">Notification of B.Tech. (IT) 1st Semester (Session : 2020-24) Backlog/Summer Examination-2020</td><td class="column-4"><a href="Notice/N2022/B.Tech. (IT) 1st Semester (Session  2020-24) Backlog.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>

                        <tr><td class="column-1">Notice</td><td class="column-2">30.03.2022 </td><td class="column-3">Notification of Examination Fees and Form for B.Ed. (Part-I) (Session : 2021-23) Examination-2022</td><td class="column-4"><a href="Notice/B.Ed. (Part-I)_compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">30.03.2022 </td><td class="column-3">Notification of form and fees for M.Ed. 3rd Semester (Session : 2020-22) and 1st Semester (Session : 2021-23) Examination-2021</td><td class="column-4"><a href="Notice/M.Ed. 3rd Semester-compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                         <tr><td class="column-1">Notice</td><td class="column-2">29.03.2022 </td><td class="column-3">Notification form filling date of BBA Part-I, Session : 2020-22 and 2021-24 New and Old Course together with BCA Part-I, Session : 2020-23 and 2021-24 New and Old Course</td><td class="column-4"><a href="Notice/BBA Part-I-compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                         <tr><td class="column-1">Notice</td><td class="column-2">28.03.2022 </td><td class="column-3">Notification Examination Programme and Centre of B.Tech. (CSE) 7th Semester (Session : 2018-22) Examination-2021</td><td class="column-4"><a href="Notice/B.Tech. (CSE) 7th Semester_compressed (1).pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">28.03.2022 </td><td class="column-3">Notification Examination Programme and Centre of B.Tech. (CSE) 4th Semester (Session : 2019-23) Examination-2021</td><td class="column-4"><a href="Notice/B.Tech. (CSE) 4th Semester_compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">28.03.2022 </td><td class="column-3">Notification Examination Programme and Centre of B.Tech. (CSE) 2nd Semester (Session : 2020-24) Examination-2021</td><td class="column-4"><a href="Notice/B.Tech. (CSE) 2nd Semester_compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">28.03.2022 </td><td class="column-3">Notification Examination Programme and Centre of B.Tech. (IT) 4th Semester (Session : 2019-23) Examination-2021</td><td class="column-4"><a href="Notice/B.Tech. (IT) 4th Semester_compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">28.03.2022 </td><td class="column-3">Notification Examination Programme and Centre of B.Tech. (IT) 7th Semester (Session : 2018-22) Examination-2021</td><td class="column-4"><a href="Notice/B.Tech. (IT) 7th_compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">28.03.2022 </td><td class="column-3">Notification Examination Programme and Centre of B.Tech. (IT) 2nd Semester (Session : 2020-24) Examination-2021</td><td class="column-4"><a href="Notice/Centre of B.Tech. (IT) 2nd Semester_compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">28.03.2022 </td><td class="column-3">Notification Examination Programme and Centre of B.Tech. (BI) 2nd Semester (Session : 2020-24) Examination-2021</td><td class="column-4"><a href="Notice/Centre of B.Tech. (BI)_compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">28.03.2022 </td><td class="column-3">Notification Examination Forms and Fee of B.Tech. (CSE/IT) 7th Semester (Session : 2018-22), B.Tech. (CSE/IT) 4th Semester (Session : 2019-23), and B.Tech. (CSE/IT/BI) 2nd Semester (Session : 2020-24) Examination-2021</td><td class="column-4"><a href="Notice/CSE IT 7th Semester_compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">28.03.2022 </td><td class="column-3">Notification Examination Forms and Fee of Backlog/Summer B.Tech. (CSE/IT) 6th Semester (Session : 2018-22), B.Tech. (CSE/IT) 3rd Semester (Session : 2019-23), and B.Tech (CSE/IT/BI) 1st Semester (Session : 2020-24) Examination-2020</td><td class="column-4"><a href="Notice/Backlog Summer B.Tech_compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                         <tr><td class="column-1">Notice</td><td class="column-2">28.03.2022 </td><td class="column-3">Notification of B.P.Ed. Part-I (Session : 2015-17 to 2020-22) Subject : Part-B Practical PC-101, 102, 103 and Part-C Teaching Practice External/Internal Examination-2021</td><td class="column-4"><a href="Notice/Regarding memo no_compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">26.03.2022 </td><td class="column-3">Regarding memo no. C/DR-I/12700 - 12767/22</td><td class="column-4"><a href="Notice/Regarding memo no_compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                         <tr><td class="column-1">Notice</td><td class="column-2">26.03.2022 </td><td class="column-3">Univ. Memo no. C/IC/12675-12682/22</td><td class="column-4"><a href="Notice/26Univ. Memo no. C-IC-12675-12682-22 Dt. 26.03.2022.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                         <tr><td class="column-1">Notice</td><td class="column-2">26.03.2022 </td><td class="column-3">Univ Memo No. C/IC/12668-12674/22 </td><td class="column-4"><a href="Notice/Univ Memo No. C-IC-12668-12674-22 Dt. 26.03.2022_compressed.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>
                        <tr><td class="column-1">Notice</td><td class="column-2">24.03.2022 </td><td class="column-3">Rectification of Examination Fee and Forms of BCA (Hons.) Semester - I (Session : 2021-24) Examination-2021</td><td class="column-4"><a href="Notice/Rectification of Examination Fee and Forms of BCA (Hons.pdf" target="_blank"><img src="{{asset('Frontend/images/pdf.png')}}" alt="icon_pdf" width="30" height="45" class="alignnone size-full wp-image-1937"></a></td>
                          </tr>

                                </tbody>
                              </table>


                            </div>
                          </div>
            </main>
        </div>
    </div>
@endsection
