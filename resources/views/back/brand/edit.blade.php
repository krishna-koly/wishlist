@extends('back.layouts.app')
@section('title', 'Brand Edit Page')
@section('content')



<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Form float input</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Form float input</li>
        </ol>
    </div>
    <div class="">
        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    <div class="row">
        <div class=" offset-sm-3 col-md-6">

            <div class="card-title">
                <h3 class="box-title m-b-0">Add New Brand</h3>
            </div>
            <div class="card card-body">

                <p class="text-muted m-b-30 font-13"> new Brand </p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="{{ route('admin.brands.update',$brand->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Brand Name" value="{{ $brand->name }}">
                            </div>


                            <div class="form-group">
                                <label for="file">Brand Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo">
                            </div>


                            <div class="form-group">
                                <label for="file">Banner-Brand-Image</label>
                                <input type="file" class="form-control" id="banner" name="banner">
                            </div>


                            <div class="form-group">
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox1" type="checkbox" name="action" value="1">
                                    <label for="checkbox1"> Remember me </label>
                                </div>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @endsection