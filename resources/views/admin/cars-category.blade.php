@extends('layout.admin-master')

@section('body')
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Cars Category </h4>
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
            <div class="col-xl-6 col-xxl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cars Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ url('admin/cars-category') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Category Name</label>
                                        <input type="text" name="category_name" class="form-control"
                                            placeholder="Category Name">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-xxl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Car Category List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $key => $row)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $row->category_name }}</td>
                                            <td>
                                                @if ($row->status == 1)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-danger">Non Active</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                        class="la la-pencil"></i></a>
                                            
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                        class="la la-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
