@extends('layout.master')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .nav .nav-item button.active {
            background-color: transparent;
        }

        @media screen and (min-width: 1200px) {
            .carImage {
                width: 1060px;
            }
        }

        @media screen and (min-width: 998px) {
            .carImage {
                width: 880px !important;
                margin-left: -50px;
            }
        }

        .textC a {
            text-decoration: none;
        }

        .carName {
            padding: 5px 0px;
            font-size: 16;
            font-weight: 500;
            line-height: 16px;
            color: #0b2369;
        }

        .specHeading {
            font-size: 14px;
            color: #111111;
            margin-bottom: .25rem;
            font-weight: 600;
        }

        .specContent {
            padding-top: 5px;
            font-size: 14px;
            line-height: 20px;
            color: #111111;
        }

        .owl-carousel .owl-nav {
            font-size: 50px;
            color: #000;
        }


        .owl-carousel .owl-nav button.owl-next {
            position: absolute;
            right: 0px;
        }

        .test-drive-section {
            padding: 50px 0px;
            background-color: #8b91a3;
        }

        .test-drive-section .btn-drive {
            border: 1px solid white;
            text-decoration: none;
            padding: 10px;
            width: 100%;
            color: white;
            background-color: #0b2369;
        }
        .contact-form{
            box-shadow: 5px 5px 20px 0 rgba(0, 0, 0, 0.4);
            padding: 20px;
            border-radius: 20px;
        }
    </style>
@stop

@section('body')

    <section class="slider-section">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/sliders/creta.webp') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/sliders/slide2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/sliders/slide3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="hyundai-section">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-12 text-center mb-4">
                    <h2>Hyundai Cars</h2>
                </div>
            </div>
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-semibold active position-relative" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">SUV</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-semibold position-relative" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Sedan</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-semibold position-relative" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Hatchback</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-semibold position-relative" id="pills-electric-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-electric" type="button" role="tab" aria-controls="pills-electric"
                        aria-selected="false">Electric</button>
                </li>
            </ul>
            <div class="tab-content rounded-3 p-3" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="owl-carousel owl-theme">
                        <div class="item cardImage">
                            <img src="{{ asset('assets') }}/images/cars/model-section_1600x590.png"
                                class="p10 carImg marginL mobSpec" width="100%" alt="">
                            <div class="row">
                                <div class="col-md-3 p0 carHeading mb-3 mt-3">
                                    <div class="textC p20 text-center">
                                        <a href="https://www.hyundai.com/in/en/find-a-car/exter/highlights"
                                            tabindex="0">
                                            <div class="carName">EXTER <i class="fa fa-chevron-right chevronRight"
                                                    aria-label="chevright"></i></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9 p0 modelContent">
                                    <div class="row">
                                        <div class="col-6 col-md-3 mb-3">
                                            <span class="specHeading">Starting at</span>
                                            <div class="specContent">₹ 6 12 800 <br>*Ex Showroom Price </div>
                                        </div>
                                        <div class="col-6 col-md-4 mb-3">
                                            <span class="specHeading">Engine</span>
                                            <div class="specContent">1.2 l Kappa petrol <br> 1.2 l Bi-fuel Kappa petrol
                                                with
                                                CNG </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <span class="specHeading">Transmission available</span>
                                            <div class="specContent">5-Speed Manual / Smart Auto AMT </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item cardImage">
                            <img src="{{ asset('assets') }}/images/cars/model-section-pc.png"
                                class="p10 carImg marginL mobSpec" width="100%" alt="">
                            <div class="row">
                                <div class="col-md-3 p0 carHeading mb-3 mt-3">
                                    <div class="textC p20 text-center">
                                        <a href="/in/en/find-a-car/venue/highlights" tabindex="0">
                                            <div class="carName">VENUE<i class="fa fa-chevron-right chevronRight"
                                                    aria-label="chevright"></i></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9 p0 modelContent">
                                    <div class="row">
                                        <div class="col-6 col-md-3 mb-3">
                                            <span class="specHeading">Starting at </span>
                                            <div class="specContent">₹ 7 94 100 <br>*Ex Showroom Price </div>
                                        </div>
                                        <div class="col-6 col-md-4 wid60 p0">
                                            <span class="specHeading">Engine</span>
                                            <div class="specContent">1.2 l Kappa petrol <br> 1.0 l Kappa turbo GDi petrol
                                                <br> 1.5 l U2 CRDi diesel
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4 mb-3">
                                            <span class="specHeading">Transmission available </span>
                                            <div class="specContent">5 MT, 6 MT, iMT </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item cardImage">
                            <img src="{{ asset('assets') }}/images/cars/Model_section_1600x590.png"
                                class="p10 carImg marginL mobSpec" width="100%" alt="">
                            <div class="row">
                                <div class="col-md-3 p0 carHeading mb-3 mt-3">
                                    <div class="textC p20 text-center">
                                        <a href="/in/en/find-a-car/venue-n-line/highlights" tabindex="0">
                                            <div class="carName">VENUE N LINE<i class="fa fa-chevron-right chevronRight"
                                                    aria-label="chevright"></i></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9 p0 modelContent">
                                    <div class="row">
                                        <div class="col-6 col-md-3 mb-3">
                                            <span class="specHeading">Starting at </span>
                                            <div class="specContent">₹ 12 07 700 <br>*Ex Showroom Price </div>
                                        </div>
                                        <div class="col-6 col-md-4 wid60 p0">
                                            <span class="specHeading">Engine</span>
                                            <div class="specContent">1.0 Kappa Turbo GDi Petrol </div>
                                        </div>
                                        <div class="col-6 col-md-4 mb-3">
                                            <span class="specHeading">Transmission available </span>
                                            <div class="specContent">7 speed DCT </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="owl-carousel owl-theme">
                        <div class="item cardImage">
                            <img src="{{ asset('assets') }}/images/cars/Aura.png" class="p10 carImg marginL mobSpec"
                                width="100%" alt="">
                            <div class="row">
                                <div class="col-md-3 p0 carHeading mb-3 mt-3 mb-3">
                                    <div class="textC p20 text-center">
                                        <a href="/in/en/find-a-car/aura/highlights" tabindex="0">
                                            <div class="carName">Aura<i class="fa fa-chevron-right chevronRight"
                                                    aria-label="chevright"></i></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9 p0 modelContent">
                                    <div class="row">
                                        <div class="col-6 col-md-3 mb-3">
                                            <span class="specHeading">Starting at</span>
                                            <div class="specContent">₹ 6 48 600<br>*Ex Showroom Price </div>
                                        </div>
                                        <div class="col-6 col-md-4 wid60 p0">
                                            <span class="specHeading">Engine</span>
                                            <div class="specContent">1.2l Kappa Petrol<br>1.2l Bi-Fuel (Petrol with CNG)
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4 mb-3">
                                            <span class="specHeading">Transmission available </span>
                                            <div class="specContent">5 Speed Manual / Smart Auto AMT </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item cardImage">
                            <img src="{{ asset('assets') }}/images/cars/verna_model.png"
                                class="p10 carImg marginL mobSpec" width="100%" alt="">
                            <div class="row">
                                <div class="col-md-3 p0 carHeading mb-3 mt-3">
                                    <div class="textC p20 text-center">
                                        <a href="/in/en/find-a-car/verna/highlights" tabindex="0">
                                            <div class="carName">All-new Hyundai VERNA<i
                                                    class="fa fa-chevron-right chevronRight" aria-label="chevright"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9 p0 modelContent">
                                    <div class="row">
                                        <div class="col-6 col-md-3 mb-3">
                                            <span class="specHeading">Starting at </span>
                                            <div class="specContent">₹ 11 00 400<br>*Ex Showroom Price </div>
                                        </div>
                                        <div class="col-6 col-md-4 wid60 p0">
                                            <span class="specHeading">Engine</span>
                                            <div class="specContent">1.5 l Turbo GDi petrol<br>1.5 l MPi petrol </div>
                                        </div>
                                        <div class="col-6 col-md-4 mb-3">
                                            <span class="specHeading">Transmission available </span>
                                            <div class="specContent">6-Speed manual &amp; 7-Speed DCT <br>6-Speed manual
                                                &amp; IVT </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="owl-carousel owl-theme">
                        <div class="item cardImage">
                            <img src="{{ asset('assets') }}/images/cars/niosmodelpc.png"
                                class="p10 carImg marginL mobSpec" width="100%" alt="">
                            <div class="row">
                                <div class="col-md-3 p0 carHeading mb-3 mt-3">
                                    <div class="textC p20 text-center">
                                        <a href="/in/en/find-a-car/grand-i10-nios/highlights" tabindex="0">
                                            <div class="carName">Grand i10 NIOS<i class="fa fa-chevron-right chevronRight"
                                                    aria-label="chevright"></i></div>
                                        </a>

                                    </div>
                                </div>
                                <div class="col-md-9 p0 modelContent">
                                    <div class="row">
                                        <div class="col-6 col-md-3 mb-3">
                                            <span class="specHeading">Starting at </span>
                                            <div class="specContent">₹ 5 92 300<br>*Ex Showroom Price </div>
                                        </div>
                                        <div class="col-6 col-md-4 wid60 p0">
                                            <span class="specHeading">Engine</span>
                                            <div class="specContent">1.2l Kappa Petrol<br>1.2l Bi-Fuel (Petrol with CNG)
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4 mb-3">
                                            <span class="specHeading">Transmission available </span>
                                            <div class="specContent">5 Speed Manual / Smart Auto AMT </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item cardImage">
                            <img src="{{ asset('assets') }}/images/cars/i20_Modelpc.png"
                                class="p10 carImg marginL mobSpec" width="100%" alt="">
                            <div class="row">
                                <div class="col-md-3 p0 carHeading mb-3 mt-3">
                                    <div class="textC p20 text-center">
                                        <a href="/in/en/find-a-car/i20/highlights" tabindex="0">
                                            <div class="carName">i20<i class="fa fa-chevron-right chevronRight"
                                                    aria-label="chevright"></i></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9 p0 modelContent">
                                    <div class="row">
                                        <div class="col-6 col-md-3 mb-3">
                                            <span class="specHeading">Starting at </span>
                                            <div class="specContent">₹ 7 04 400<br>*Ex Showroom Price </div>
                                        </div>
                                        <div class="col-6 col-md-4 wid60 p0">
                                            <span class="specHeading">Engine</span>
                                            <div class="specContent">1.2 l Kappa petrol </div>
                                        </div>
                                        <div class="col-6 col-md-4 mb-3">
                                            <span class="specHeading">Transmission available </span>
                                            <div class="specContent">5 MT, IVT </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item cardImage">
                            <img src="{{ asset('assets') }}/images/cars/i20-n-line_pc.png"
                                class="p10 carImg marginL mobSpec" width="100%" alt="">
                            <div class="row">
                                <div class="col-md-3 p0 carHeading mb-3 mt-3">
                                    <div class="textC p20 text-center">
                                        <a href="/in/en/find-a-car/i20-n-line/highlights" tabindex="0">
                                            <div class="carName">i20 N Line<i class="fa fa-chevron-right chevronRight"
                                                    aria-label="chevright"></i></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9 p0 modelContent">
                                    <div class="row">
                                        <div class="col-6 col-md-3 mb-3">
                                            <span class="specHeading">Starting at</span>
                                            <div class="specContent">₹ 9 99 500 <br>*Ex Showroom Price </div>
                                        </div>
                                        <div class="col-6 col-md-4 wid60 p0">
                                            <span class="specHeading">Engine</span>
                                            <div class="specContent">1.0 l Turbo GDi Petrol </div>
                                        </div>
                                        <div class="col-6 col-md-4 mb-3">
                                            <span class="specHeading">Transmission available </span>
                                            <div class="specContent"> 7DCT ,6MT </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-electric" role="tabpanel" aria-labelledby="pills-electric-tab">
                    <div class="owl-carousel owl-theme">
                        <div class="item cardImage">
                            <img src="{{ asset('assets') }}/images/cars/ioniq.png" class="p10 carImg marginL mobSpec"
                                width="100%" alt="">
                            <div class="row">
                                <div class="col-md-3 p0 carHeading">
                                    <div class="textC p20">
                                        <a href="https://ioniq5.hyundai.co.in/" tabindex="0">
                                            <div class="carName">IONIQ 5<i class="fa fa-chevron-right chevronRight"
                                                    aria-label="chevright"></i></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9 p0 modelContent">
                                    <div class="row">
                                        <div class="col-6 col-md-3 wid40 p15 p0">
                                            <span class="specHeading">Starting at </span>
                                            <div class="specContent">₹ 46 05 000 <br>*Ex Showroom Price </div>
                                        </div>
                                        <div class="col-6 col-md-4 wid60 p0">
                                            <span class="specHeading">Electric motor type </span>
                                            <div class="specContent">Permanent magnet synchronous motor (PMSM) </div>
                                        </div>
                                        <div class="col-6 col-md-4 wid40 p15 p0">
                                            <span class="specHeading">Transmission available </span>
                                            <div class="specContent">Single speed reduction gear </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="test-drive-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="{{ url('/request-a-test-drive') }}" class="btn btn-drive">Request a Test Drive</a>
                </div>
                <div class="col">
                    <a href="{{url('/request-a-brochure')}}" class="btn btn-drive">Download E-Brochure</a>
                </div>
                <div class="col">
                    <a href="#" class="btn btn-drive">Prices</a>
                </div>
            </div>
        </div>
    </section>
    <div class="contact-area py-120">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-6 align-self-center mb-4">
                        <div class="contact-img">
                            <img src="{{asset('assets')}}/images/enquire1.jpg" width="100%" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h2 class="mb-4">Enquire Now</h2>
                            </div>
                            <form method="post" action="/taxica/assets/php/contact.php" id="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="Mobile Number" placeholder="Mobile Number" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="city" placeholder="City" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select class="form-control" id="car" name="model" aria-label="Select Model" aria-labelledby="car">
                                                <option disabled="" selected="selected" value="">Car Models</option>
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
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Write Your Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="theme-btn">Submit <i class="far fa-paper-plane"></i></button>
                                <div class="col-md-12 mt-3">
                                    <div class="form-messege text-success"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/banner/1.jpg') }}" class="d-block w-100" alt="banner1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/banner/2.jpg') }}" class="d-block w-100" alt="banner2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/banner/3.jpg') }}" class="d-block w-100" alt="banner3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="about-area py-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow fadeInLeft" data-wow-delay=".25s"
                        style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInLeft;">
                        <div class="about-img">
                            <img src="{{ asset('assets') }}/images/cars/model-section-pc.png" width="100%"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fadeInRight" data-wow-delay=".25s"
                        style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">
                        <div class="site-heading mb-3">
                            <h2 class="site-title">
                                Welcome to <span>JSV Hyundai</span> Showroom
                            </h2>
                        </div>
                        <p class="about-text">
                            JSV Hyundai is one-stop destination in Lucknow for all your requirements related to car buying
                            and servicing. Since the first day of its establishment, JSV Hyundai Dealership has been
                            striving to give its best to ensure best customer service and satisfaction to its prestigious
                            and potential buyers.
                        </p>
                        <p>Contact One of The Best Hyundai Dealer in Lucknow.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
@stop
