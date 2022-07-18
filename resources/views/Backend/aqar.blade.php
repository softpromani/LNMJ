@extends('Backend.includes.layout')
@section('content')
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">AQAR</h5>
                        <p class="m-b-0">Welcome to LNMU</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">AQAR</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><br><br>

<!-- Page body start -->
<div class="container">
    <div class="page-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>AQAR</h5>
                    </div>
                    <div class="card-block">
                        <form method="post" action="{{ route('admin.saveaqar') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-3">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Title"
                                        required>
                                </div>
                                <div class="col-sm-2">
                                    <label>AQAR Category</label>
                                    <select name="category" class="form-control" required>
                                        <option value="" selected disabled>Select AQAR Category</option>
                                        <option value="criteria-1">Criteria 1</option>
                                        <option value="criteria-2">Criteria 2</option>
                                        <option value="criteria-3">Criteria 3</option>
                                        <option value="criteria-4">Criteria 4</option>
                                        <option value="criteria-5">Criteria 5</option>
                                        <option value="criteria-6">Criteria 6</option>
                                        <option value="criteria-7">Criteria 7</option>
                                    </select>
                                </div>

                                <div class="col-3" id="uploadfile">
                                    <label>Upload file</label>
                                    <input type="file" class="form-control" name="file">
                                </div>
                                <div class="col-sm-2">
                                    <label>AQAR Session</label>
                                    <select name="session" class="form-control" required>
                                        <option value="" selected disabled>Select AQAR Session</option>
                                        <option value="2020-21">2020-21</option>
                                        <option value="2019-20">2019-20</option>
                                        <option value="2028-19">2028-19</option>
                                        <option value="2017-18">2017-18</option>
                                        <option value="2016-17">2016-17</option>
                                        <option value="2015-16">2015-16</option>
                                        <option value="2014-15">2014-15</option>
                                    </select>
                                </div>
                                <div class="col-2 sub">
                                    <br />
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page-header end -->

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View AQAR</h3>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa fa-minus minimize-card"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                    <li><i class="fa fa-trash close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>File</th>
                            <th>Session</th>
                            <th>Uploaded Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                        $i=1;
                        @endphp
                        @foreach($data as $dt)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$dt->title}}</td>
                            <td>{{$dt->category}}</td>
                            <td><a href="{{asset('upload/AQAR')}}/{{$dt->filename}}" target="_blank">View</a></td>
                            <td>{{$dt->session}}</td>
                            <td>{{$dt->updated_at}}</td>
                            <td>
                                <button class="btn waves-effect waves-light btn-info btn-icon"><i
                                        class="icofont icofont-edit"></i></button>

                                        <a href="{{url('/admin/delaqar')}}/{{$dt->id}}" class="btn waves-effect waves-light btn-danger btn-icon">
                                            <i class=" icofont icofont-trash"></i>
                                        </a>
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


 @endsection
