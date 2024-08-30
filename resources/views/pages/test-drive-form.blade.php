@extends('layout.master')
@section('css')
    <style>
        .enquiry-section {
            padding: 50px 0px;
            background-color: #f1f6fc;
            background: url(https://www.hyundai.com/content/dam/hyundai/in/en/data/connect-to-service/service-section-second-banner-pc.jpg);
            background-size: cover;
            background-position: center bottom;
        }

        .enquiry-section .contact-form {
            background-color: #ffffff;
            padding: 40px;
        }
        .content-section{background-color: #ffffff;}
    </style>

@stop

@section('body')
    <section class="slider-section">
        <img src="https://www.hyundai.com/content/dam/hyundai/in/en/images/home/dilse-pc.jpg" class="d-block w-100"
            alt="...">
    </section>
    <section class="content-section">
        
    </section>
    <section class="enquiry-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <form class="white-bg contact-form">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-center mb-4">Book a Test Drive</h2>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Name">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" placeholder="Enter Email Address">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="exampleInputPassword1" class="form-label">Mobile No.</label>
                                <input type="text" class="form-control" placeholder="Enter Mobile Number">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="exampleInputPassword1" class="form-label">Model Interested In*</label>
                                <select class="form-control" id="car" name="model" aria-label="Select Model"
                                    aria-labelledby="car">
                                    <option disabled="" selected="selected" value="">Car Model</option>
                                    <option value="24">New Grand i10 NIOS</option>
                                    <option value="39">All New i20</option>
                                    <option value="41">i20 N Line</option>
                                    <option value="35">AURA</option>
                                    <option value="45">All new Verna</option>
                                    <option value="18">New Venue</option>
                                    <option value="37">New Creta</option>
                                    <option value="40">Alcazar</option>
                                    <option value="46">EXTER</option>
                                    <option value="42">New Tucson</option>
                                    <option value="43">Venue N Line</option>
                                    <option value="47">Creta N Line</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="exampleInputPassword1" class="form-label">City</label>
                                <input type="text" class="form-control" placeholder="Enter Your City">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="exampleInputPassword1" class="form-label">Comments</label>
                                <textarea class="form-control" name="" id="" cols="10" rows="4"></textarea>
                            </div>
                            <div class="mb-3 col-md-12">
                                <input type="checkbox" placeholder="Dealer*"> * I accept the terms & conditions
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
