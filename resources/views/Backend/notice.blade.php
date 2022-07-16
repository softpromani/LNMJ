@extends('Backend.includes.layout')
@section('content')
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Notice</h5>
                        <p class="m-b-0">Welcome to LNMU</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">Notice</li>
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
                        <h5>Notice</h5>
                    </div>
                    <div class="card-block">
                        <form method="post" action="{{ route('admin.savenotice') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-3">
                                    <lable>Title</lable>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Title"
                                        required>
                                </div>
                                <div class="col-sm-2">
                                    <label>Notice Category</label>
                                    <select name="category" class="form-control" required>
                                        <option value="" selected disabled>Select Notice Category</option>
                                        <option value="notice">Latest Notice</option>
                                        <option value="events">Events</option>
                                        <option value="seminars">Seminars</option>
                                        <option value="tenders">Tenders</option>
                                        <option value="office-orders">Office Orders</option>
                                    </select>
                                </div>
                                <div class="form-check col-1 mt-3">
                                    <input class="form-check-input" type="radio" name="filetype" value="file"
                                        id="filetype">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        File
                                    </label>
                                </div>
                                <div class="form-check col-1 mt-3">
                                    <input class="form-check-input" type="radio" name="filetype" value="link"
                                        id="linktype">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Link
                                </div>
                                <div class="col-3" id="uploadfile">


                                    <label>Upload file</label>
                                    <input type="file" class="form-control" name="file">
                                </div>
                                <div class="col-3" id="uploadlink">


                                    <label>Upload Link</label>
                                    <input type="text" class="form-control" name="link">
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
            <h3>View Notices</h3>
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
                            <th>Uploaded Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                        $i=1;
                        @endphp
                        @foreach($notice as $n)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$n->title}}</td>
                            <td>{{$n->category}}</td>
                            @if($n->type=='file')
                            <td><a href="{{asset('upload/Notice')}}/{{$n->filename}}" target="_blank">View</a></td>
                            @else
                            <td><a href="{{$n->filename}}" target="_blank">View</a></td>
                            @endif

                            <td>{{$n->updated_at}}</td>
                            <td>
                                <button class="btn waves-effect waves-light btn-info btn-icon"><i
                                        class="icofont icofont-edit"></i></button>

                                        <a href="{{url('/admin/delnotice')}}/{{$n->id}}" class="btn waves-effect waves-light btn-danger btn-icon">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
                $(document).ready(function() {
                    $("#uploadfile").hide();
                    $("#uploadlink").hide();
                    $("#filetype").click(function() {
                        $("#uploadfile").show();
                        $("#uploadlink").hide();
                    });
                    $("#linktype").click(function() {
                        $("#uploadlink").show();
                        $("#uploadfile").hide();
                    });
                });
            </script>
 @endsection
