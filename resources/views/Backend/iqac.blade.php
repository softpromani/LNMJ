@extends('Backend.includes.layout')
@section('content')
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">IQAC</h5>
                        <p class="m-b-0">Welcome to LNMU</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('backend.dashboard') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">IQAC</li>
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
                            <h5>IQAC</h5>
                        </div>
                        <div class="card-block">
                            <form class="form-material" action="#" method="POST" enctype="multipart/form-data">
                                @csrf()
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group form-default">
                                            <input type="text" name="name" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Title</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group form-default">
                                            <input type="file" name="filename" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group form-default">
                                            <button class="btn btn-primary btn-round waves-effect waves-light"
                                                type="submit" class="bg-danger">Save</button>
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
                <h3>IQAC Data</h3>
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
                                <th>Title</th>
                                <th>Data</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row">1</th>
                                <td>AQAR</td>
                                <td><a href="#">View Pdf</a></td>
                                <td>
                                    <button class="btn waves-effect waves-light btn-info btn-icon"><i
                                            class="icofont icofont-edit"></i></button>

                                            <a href="#" class="btn waves-effect waves-light btn-danger btn-icon">
                                                <i class=" icofont icofont-trash"></i>
                                            </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Hover table card end -->
@endsection
