@extends('layout.admin-master')

@section('body')


    <!--**********************************
                Content body start
        ***********************************-->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Update Admin details</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div id="profile-settings">
                            <div class="pt-3">
                                <div class="settings-form">
                                    @if (Session::has('error_msg'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>{{ Session('error_msg') }}</strong>
                                        </div>
                                    @endif
                                    @if (Session::has('success_msg'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ Session('success_msg') }}</strong>
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ url('admin/update-detail') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" name="email"
                                                    value="{{ Auth::guard('admin')->user()->email }}" placeholder="Email"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="admin-name">Name</label>
                                                <input type="text" name="admin_name" value="{{ Auth::guard('admin')->user()->name }}" placeholder="Name"
                                                    class="form-control">
                                                </div>
                                            <div class="form-group col-md-6">
                                                <label for="admin-mobile">Mobile</label>
                                                <input type="text" name="admin_mobile" value="{{ Auth::guard('admin')->user()->mobile }}" placeholder="Mobile"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="image">Profile Image</label>
                                                <input type="file" name="admin_image" placeholder="Mobile"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div id="profile-settings">
                            <div class="pt-3">
                                <div class="settings-form">
                                    @if (Session::has('error_msg'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>{{ Session('error_msg') }}</strong>
                                        </div>
                                    @endif
                                    @if (Session::has('success_msg'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ Session('success_msg') }}</strong>
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ url('admin/update-password') }}">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" name="email"
                                                    value="{{ Auth::guard('admin')->user()->email }}" readonly="" placeholder="Email"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="password">Current Password</label>
                                                <input type="password" name="current_pwd" placeholder="Password"
                                                    id="current_pwd" class="form-control">
                                                <span id="verifyCurrentPwd"></span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="new_pwd">New Password</label>
                                                <input type="password" name="new_pwd" id="new_pwd" placeholder="Password"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="confirm_pwd">Confirm Password</label>
                                                <input type="password" name="confirm_pwd" id="confirm_pwd"
                                                    placeholder="Password" class="form-control">
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
                Content body end
        ***********************************-->
@stop
@section('script')
    <script>
        $(document).ready(function() {
            $("#current_pwd").keyup(function() {
                var current_pwd = $("#current_pwd").val();
                //alert(currect_pwd);
                $.ajax({
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: '/admin/check-currect-pasword',
                    data: {
                        current_pwd: current_pwd
                    },
                    success: function(resp) {
                        if (resp == "false") {
                            $('#verifyCurrentPwd').html("Current Password is Incorrect");
                        } else if (resp == "true") {
                            $('#verifyCurrentPwd').html("Current Password is correct");
                        }
                    },
                    error: function() {
                        alert("Error");
                    }
                })
            });
        });
    </script>
@stop
