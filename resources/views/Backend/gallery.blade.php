@extends('Backend.includes.layout')
@section('content')
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Gallery</h5>
                        <p class="m-b-0">Welcome to MeenCat</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">Galleries</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <br><br>
    <!-- Page body start -->
    <div class="container">
        <div class="page-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Galleries</h5>
                        </div>
                        <div class="card-block">
                            <form class="form-material" action="{{ route('backend.savegallery') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group form-default">
                                            <input type="text" name="text" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Text</label>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group form-default">
                                            <input type="file" name="filename" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group form-default">
                                            <button class="btn btn-primary btn-round waves-effect waves-light"
                                                type="submit" name="save" class="bg-danger">Save</button>
                                        </div>
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
                <h3>Galleries</h3>
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
                                <th>Sr.No</th>
                                <th>Text</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sn = 1;
                            @endphp
                            @foreach ($data as $dt)
                                <tr>
                                    <th>{{$sn }}</th>
                                    <td>{{$dt->text }}</td>
                                    <td><img class="rounded" src="{{ asset('upload/gallery/' . $dt->uploadimage) }}"
                                            alt="" width="200px" height="200px"></td>
                                    <td>

                                        <a href="{{ url('backend/delgallery/' . $dt->id) }}"
                                            class="btn waves-effect waves-light btn-danger btn-icon">
                                            <i class=" icofont icofont-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @php
                                    $sn++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Hover table card end -->
@endsection
