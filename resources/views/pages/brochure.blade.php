@extends('layout.master')
@section('css')
    <style>
        .car-section{padding: 50px 0px;}
        .car-item {
            text-align: center;
            margin-bottom: 30px;
        }
        .car-item img {
            max-width: 100%;
            height: auto;
        }
        .download-icon {
            display: block;
            font-size: 14px;
            text-decoration: none;
            color:#000;
        }
        .car-name {
            font-weight: bold;
            color: #0D47A1;
            font-size: 14px;
        }
    </style>
@stop
@section('body')
    <section class="slider-section">
        <img src="https://www.hyundai.com/content/dam/hyundai/in/en/images/home/dilse-pc.jpg" class="d-block w-100"
             alt="...">
    </section>

    <section class="car-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <h2 class="text-center">Download E-Brochure of Hyundai Cars</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 car-item">
                    <img src="{{asset('assets')}}/images/cars/cars/grandi10nios.png" width="100%" alt="Car Image">
                    <div class="row">
                        <div class="col-6">
                            <p class="car-name">Grand i10 NIOS</p>
                        </div>
                        <div class="col-6">
                            <a href="{{asset('assets')}}/images/brochure/niosbrochuree.pdf" class="download-icon">
                                <i class="fa fa-download"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 car-item">
                    <img src="{{asset('assets')}}/images/cars/cars/i20.png" width="100%" alt="">
                    <div class="row">
                        <div class="col-6">
                            <p class="car-name">i20</p>
                        </div>
                        <div class="col-6">
                            <a href="{{asset('assets')}}/images/brochure/i20newbrochure.pdf" class="download-icon">
                                <i class="fa fa-download"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 car-item">
                    <img src="{{asset('assets')}}/images/cars/cars/i20-n-line.png" width="100%" alt="">
                    <div class="row">
                        <div class="col-6">
                            <p class="car-name">i20 N Line</p>
                        </div>
                        <div class="col-6">
                            <a href="{{asset('assets')}}/images/brochure/nlinebrochure.pdf" class="download-icon">
                                <i class="fa fa-download"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 car-item">
                    <img src="{{asset('assets')}}/images/cars/cars//aura.png" width="100%" alt="">
                    <div class="row">
                        <div class="col-6">
                            <p class="car-name">AURA</p>
                        </div>
                        <div class="col-6">
                            <a href="{{asset('assets')}}/images/brochure/aurabrochure27aug.pdf" class="download-icon">
                                <i class="fa fa-download"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 car-item">
                    <img src="{{asset('assets')}}/images/cars/cars/verna.png" width="100%" alt="Car Image">
                    <div class="row">
                        <div class="col-6">
                            <p class="car-name">VERNA</p>
                        </div>
                        <div class="col-6">
                            <a href="{{asset('assets')}}/images/brochure/vernabrochure27aug.pdf" class="download-icon">
                                <i class="fa fa-download"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 car-item">
                    <img src="{{asset('assets')}}/images/cars/cars/creta.png" width="100%" alt="">
                    <div class="row">
                        <div class="col-6">
                            <p class="car-name">CRETA</p>
                        </div>
                        <div class="col-6">
                            <a href="{{asset('assets')}}/images/brochure/cretabrochuree.pdf" class="download-icon">
                                <i class="fa fa-download"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 car-item">
                    <img src="{{asset('assets')}}/images/cars/cars/creta-line.png" width="100%" alt="">
                    <div class="row">
                        <div class="col-6">
                            <p class="car-name">CRETA N Line</p>
                        </div>
                        <div class="col-6">
                            <a href="{{asset('assets')}}/images/brochure/cretanline_brochure.pdf" class="download-icon">
                                <i class="fa fa-download"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 car-item">
                    <img src="{{asset('assets')}}/images/cars/cars/exter.png" width="100%" alt="">
                    <div class="row">
                        <div class="col-6">
                            <p class="car-name">EXTER</p>
                        </div>
                        <div class="col-6">
                            <a href="{{asset('assets')}}/images/brochure/exterbrochuree.pdf" class="download-icon">
                                <i class="fa fa-download"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 car-item">
                    <img src="{{asset('assets')}}/images/cars/cars/venue.png" width="100%" alt="Car Image">
                    <div class="row">
                        <div class="col-6">
                            <p class="car-name">VENUE</p>
                        </div>
                        <div class="col-6">
                            <a href="{{asset('assets')}}/images/brochure/venue-knightEdition-brochure-aug-2024.pdf" class="download-icon">
                                <i class="fa fa-download"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 car-item">
                    <img src="{{asset('assets')}}/images/cars/cars/venue_n_line.png" width="100%" alt="">
                    <div class="row">
                        <div class="col-6">
                            <p class="car-name">VENUE N LINE</p>
                        </div>
                        <div class="col-6">
                            <a href="{{asset('assets')}}/images/brochure/newvenuenline.pdf" class="download-icon">
                                <i class="fa fa-download"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 car-item">
                    <img src="{{asset('assets')}}/images/cars/cars/tucson.png" width="100%" alt="">
                    <div class="row">
                        <div class="col-6">
                            <p class="car-name">TUCSON</p>
                        </div>
                        <div class="col-6">
                            <a href="{{asset('assets')}}/images/brochure/tucsonrevisedbrochuremay.pdf" class="download-icon">
                                <i class="fa fa-download"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop