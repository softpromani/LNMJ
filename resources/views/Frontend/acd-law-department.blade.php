@extends('Frontend.includes.layout')

@section('content')
    <!-- slider starts here -->

    <div class="container-fluid"
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;margin-bottom:40px;">
        <p class="text-center">PG Department of Law</p>
    </div>
    <!-- slider ends here -->
    <div class="container" style="margin-top: 40px;">
        <div class="row d-flex d-md-block flex-nowrap wrapper " >
            <div class="col-md-3 col-sm-3" id="sidebar">
                <div class="box2">
                    <div class="box-top">
                        Dean of Law
                    </div>
                    <img src="{{ asset('Frontend/images/Drjn.jpg') }}" style="height: 300px;width:400px;">
                    <div class="box-content">
                        <h3 class="title">(Dean)Dr. Jitendra Narayan</h3>

                        <h4>L. N. Mithila Univeristy Darbhanga, Bihar</h4>
                    </div>

                </div>
            </div>
            <main class="col-md-8 col-sm-8">
                <div class="col-md-12" id="content_main">
                    <h2><strong>About the Department</strong></h2>
                    <p style="text-align: justify;font-size:13px;">Upcoming</p>
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
                                    <h4 class="title ">Records</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
<td width="38"><strong>Sl. No.</strong></td>
<td width="115"><strong>College Name</strong></td>
<td width="83"><strong>Principal</strong></td>
<td width="96"><strong>Contact</strong></td>
<td width="246"><strong>E-mail id</strong></td>
<td width="157"><strong>Website</strong></td>
</tr>
                                </thead>
                                <tbody>
                                <tr>
<td width="38">1.</td>
<td width="115">C. M. Law College</td>
<td width="83">Dr. Badre Alam Khan</td>
<td width="96">8987128054</td>
<td width="246">badrealamkhan56@gmail.com</td>
<td width="157">www.cmlclnmu.org</td>
</tr>
<tr>
<td width="38">2.</td>
<td width="115">Vidhi Mahavidyalaya, Samastipur</td>
<td width="83">Prof. Sanjay Kumar</td>
<td width="96">8434688828<br>7992315304</td>
<td width="246">lawcollegespr@gmail.com</td>
<td width="157">N/A</td>
</tr>
<tr>
<td width="38">3.</td>
<td width="115">R. K. A.  Bidhi College,  Begusarai</td>
<td width="83">Prof. R. L. Singh</td>
<td width="96">9905226730</td>
<td width="246">rkalawcollege@gmail.com<br>ramlochansinghprincipal@gmail.com</td>
<td width="157">N/A</td>
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
