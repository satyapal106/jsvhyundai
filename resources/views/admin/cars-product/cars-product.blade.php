@extends('layout.admin-master')
@section('css')
    <link href="{{ asset('assets/admin/vendor/summernote/summernote.css') }}" rel="stylesheet">
@stop
@section('body')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Cars Products</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (Session::has('success_msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ Session('success_msg') }}</strong>
                    </div>
                @endif
            </div>
            <div class="col-xl-12 col-xxl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Car Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ url('admin/car-details') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="car-name">Select Car Category</label>
                                        <select class="form-control" name="category_id">
                                            <option value="">Select Car Category</option>
                                            @foreach ($category_data as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="car-name">Car Name</label>
                                        <input type="text" name="car_name" class="form-control" placeholder="Car Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="car-url">Car Url</label>
                                        <input type="text" name="car_url" class="form-control" placeholder="Car Url">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="alt-text">Alt Text</label>
                                        <input type="text" name="alt_text" class="form-control" placeholder="Alt Text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="car-image">Car Image</label>
                                        <input type="file" name="car_image" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="banner">Banner Image</label>
                                        <input type="file" name="banner_image" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="feature1">Feature 1</label>
                                        <textarea class="form-control summernote" name="feature1"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="feature1">Feature 2</label>
                                        <textarea class="form-control summernote" name="feature2"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="feature1">Feature 3</label>
                                        <textarea class="form-control summernote" name="feature3"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="feature1">Description</label>
                                        <textarea class="form-control summernote" name="description"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('script')

    <script src="{{ asset('assets/admin/vendor/summernote/js/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/plugins-init/summernote-init.js') }}"></script>
@stop
