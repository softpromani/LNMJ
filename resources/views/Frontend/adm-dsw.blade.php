@extends('Frontend.includes.layout')

@section('content')



    <div class="container">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            @include('Frontend.includes.sidebar.administration_menu')
            <main class="col-md-9 float-left">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">D.S.W.</h2>
                </div>
                <div class="col-md-12" id="content_main">
                    <div class="row" style="float:none;margin:0px auto;">


                        <div class="col-sm-3">
                            <img src="{{ asset('Frontend/images/lnmudsw.png') }}" alt="">

                        </div>
                        <div class="col-sm-6">
                            <h3 style="color:#7C0000;">Dr. Vijay Kumar Yadav</h3>
                            <p>Dean, Students' Welfare</br>
                                9430996391</br>
                                dsw@lnmu.ac.in</p>
                        </div>


                    </div>
                </div>
            </main>
        </div>
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="vc_tta-container" data-vc-action="collapse">
                    <div
                        class="vc_general vc_tta vc_tta-tabs vc_tta-color-blue vc_tta-style-outline vc_tta-shape-rounded vc_tta-spacing-1 vc_tta-tabs-position-left vc_tta-controls-align-left ">
                        <div class="vc_tta-panels-container">
                            <div class="vc_tta-panels">
                                <div class="vc_tta-panel vc_active" id="1493966056575-3c12478e-26bd"
                                    data-vc-content=".vc_tta-panel-body">
                                    <div class="vc_tta-panel-body">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <table width="100%" border='1'>
                                                    <tbody>
                                                        <thead>
                                                            <td width="187">Sl. No.</td>
                                                            <td width="181">Name</td>
                                                            <td width="187">Designation</td>
                                                            <td width="181">Mobile Number</td>
                                                            <td width="187">E-mail ID</td>
                                                            <td width="181">Photo</td>
                                                        </thead>
                                                            <tr>
                                                            <td width="187">1.</td>
                                                            <td width="181">Praween Kumar Singh</td>
                                                            <td width="187">C.O.</td>
                                                            <td width="181"></td>
                                                            <td width="187"></td>
                                                            <td width="187"><img
                                                                    src="{{ asset('Frontend/images/lnmudsw1.jpg') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="187">2.</td>
                                                            <td width="181">Hemnath Yadav</td>
                                                            <td width="187">Peon</td>
                                                            <td width="181">9541815801</td>
                                                            <td width="187"></td>
                                                            <td width="187"><img
                                                                    src="{{ asset('Frontend/images/lnmudsw2.jpg') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="187">3.</td>
                                                            <td width="181">Ram Sevak Yadav</td>
                                                            <td width="187">Peon</td>
                                                            <td width="181"></td>
                                                            <td width="187"></td>
                                                            <td width="187"><img
                                                                    src="{{ asset('Frontend/images/lnmudsw3.jpg') }}"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="187">4.</td>
                                                            <td width="181">Shankar Kumar Paswan</td>
                                                            <td width="187">IVth Grade</td>
                                                            <td width="181"></td>
                                                            <td width="187"></td>
                                                            <td width="187"><img
                                                                    src="{{ asset('Frontend/images/lnmudsw4..jpg') }}">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
