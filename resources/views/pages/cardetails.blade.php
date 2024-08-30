@extends('layout.master')
@section('css')
    <style>
        .car-details {
            padding: 50px 0px;
        }

        .details-nav {
            margin: 30px 0 40px;
        }

        .details-nav ul {
            display: flex;
            flex-wrap: wrap;
        }

        .details-nav ul li {
            display: inline-block;
            line-height: 30px;
            margin-right: 10px;
        }

        .details-nav ul li a {
            border: 1px solid #0b2369;
            color: #0b2369;
            display: block;
            margin-bottom: 10px;
            padding: 7px 15px;
            transition: all .3s ease-in-out;
            text-decoration: none;
            box-shadow: 6px 6px 12px #c5c5c5, -6px -6px 12px #ffffff;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 20%;
            padding: 10px;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }

        .car-details-sidebar .details-block ul li {
            border-bottom: 1px solid #e3e3e3;
            display: block;
            margin-bottom: 10px;
            padding-bottom: 10px;
        }

        .car-details-sidebar .details-block ul li i {
            color: #363636;
            padding-right: 15px;
        }

        .car-details-sidebar .details-block ul li span {
            display: inline-block;
            width: 150px;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #ffffff !important;
            background-color: #0b2369;
            border-color: #dee2e6 #dee2e6 #fff;
            position: relative;
        }

        .nav-tabs {
            position: relative;
            /* Ensures relative positioning context for pseudo-elements */
        }

        .nav-tabs>li {
            position: relative;
            /* Ensures the pseudo-element is positioned relative to the li */
        }


        .nav-tabs .active:after {
            content: "";
            border-top: 10px solid #0b2369;
            border-left: 9px solid transparent;
            border-right: 9px solid transparent;
            position: absolute;
            top: 40px;
            left: 50%;
            transform: translateX(-50%);
        }

        .car-generalinfo {
            padding: 20px 0px;
        }
        .car-details-sidebar .details-form {
            background: #fff; 
            filter: drop-shadow(2px 2px 2px black);
            padding: 15px;
            border-radius: 6px;
        }
        
    </style>
@stop
@section('body')
    <section class="slider-section">
        <img src="https://jsvhyundai.com/wp-content/uploads/2023/01/niosinnerkv-PC.jpg" class="d-block w-100" alt="...">
    </section>
    <section class="car-details car-details-two section-ptb" style="position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="details-nav">
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/request-a-test-drive') }}"> Request a Test Drive</a></li>
                            <li><a href="{{url('/request-a-brochure')}}"> Download  E-Brochure</a></li>
                            <li><a href="#"> Prices</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="container">
                        <div class="mySlides">
                            <div class="numbertext">1 / 6</div>
                            <img src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/01.ee783a757b5ce1762cc5.webp"
                                style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 6</div>
                            <img src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/02.c3fb1b2a517498e0db06.webp"
                                style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 6</div>
                            <img src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/03.4ed9128bacb5e451c513.webp"
                                style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 6</div>
                            <img src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/04.61f741d81a7e63ee3175.webp"
                                style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">5 / 6</div>
                            <img src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/05.1e42e153f56cb56a58e5.webp"
                                style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">6 / 6</div>
                            <img src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/05.1e42e153f56cb56a58e5.webp"
                                style="width:100%">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>

                        {{-- <div class="caption-container">
                            <p id="caption"></p>
                        </div> --}}

                        <div class="row">
                            <div class="column">
                                <img class="demo cursor"
                                    src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/01.ee783a757b5ce1762cc5.webp"
                                    style="width:100%" onclick="currentSlide(1)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor"
                                    src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/02.c3fb1b2a517498e0db06.webp"
                                    style="width:100%" onclick="currentSlide(2)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor"
                                    src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/03.4ed9128bacb5e451c513.webp"
                                    style="width:100%" onclick="currentSlide(3)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor"
                                    src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/04.61f741d81a7e63ee3175.webp"
                                    style="width:100%" onclick="currentSlide(4)" alt="">
                            </div>
                            <div class="column">
                                <img class="demo cursor"
                                    src="https://themes.potenzaglobalsolutions.com/react/car-dealer/static/media/05.1e42e153f56cb56a58e5.webp"
                                    style="width:100%" onclick="currentSlide(5)" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="car-details-sidebar">
                        <div class="details-block details-weight">
                            <h5 class="weight-title">Description</h5>
                            <ul class="car-details-list">
                                <li><i class="fa-solid fa-tag"></i><span>Make</span><strong class="text-end">Acura</strong>
                                </li>
                                <li><i class="fa-solid fa-car"></i><span>Model</span><strong
                                        class="text-end">7-series</strong></li>
                                <li><i class="fa-regular fa-registered"></i><span>Registration Date</span><strong
                                        class="text-end">2021</strong></li>
                                <li><i class="fa-solid fa-gauge"></i><span>Mileage</span><strong class="text-end">25,000
                                        mi</strong></li>
                                <li><i class="fa-solid fa-bolt"></i><span>Horsepower</span><strong class="text-end">210
                                        hp</strong></li>
                                <li><i class="fa-solid fa-file-pen"></i><span>Condition</span><strong
                                        class="text-end">New</strong></li>
                                <li><i class="fa-solid fa-fill-drip"></i><span>Exterior Color</span><strong
                                        class="text-end">Silver</strong></li>
                                <li><i class="fa-solid fa-fill-drip"></i><span>Interior Color</span><strong
                                        class="text-end">Brown (Leather)</strong></li>
                                <li><i class="fa-solid fa-gear"></i><span>Transmission</span><strong
                                        class="text-end">Manual</strong></li>
                                <li><i class="fa-solid fa-car"></i><span>Engine</span><strong class="text-end">5.1
                                        L</strong></li>
                                <li><i class="fa-solid fa-right-left"></i><span>Drivetrain</span><strong
                                        class="text-end">FWD</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <!-- Main Content -->
                    <div class="col-lg-8 col-md-12">
                        <div class="car-detail-tab">
                            <div class="tabs-main tabs-default">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="general-tab" data-bs-toggle="tab" href="#general"
                                            role="tab" aria-controls="general" aria-selected="true">General
                                            Information</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="features-tab" data-bs-toggle="tab" href="#features"
                                            role="tab" aria-controls="features" aria-selected="false">Features &amp;
                                            Options</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="overview-tab" data-bs-toggle="tab" href="#overview"
                                            role="tab" aria-controls="overview" aria-selected="false">Vehicle
                                            Overview</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <!-- General Information Tab -->
                                    <div class="tab-pane fade show active" id="general" role="tabpanel"
                                        aria-labelledby="general-tab">
                                        <div class="car-generalinfo">
                                            <h6>Consectetur Adipisicing Elit</h6>
                                            <p>Temporibus possimus quasi beatae, consectetur adipisicing elit. Obcaecati
                                                unde molestias sunt officiis aliquid sapiente, numquam, porro perspiciatis
                                                neque voluptatem sint hic quam eveniet ad adipisci laudantium corporis ipsam
                                                ea!</p>
                                            <p>Consectetur adipisicing elit. Dicta, amet quia ad debitis fugiat voluptatem
                                                neque dolores tempora iste saepe cupiditate, molestiae iure voluptatibus est
                                                beatae? Culpa, illo a You will begin to realize why, consectetur adipisicing
                                                elit. Commodi, doloribus, earum modi consectetur molestias asperiores sequi
                                                ipsam neque error itaque veniam culpa eligendi similique ducimus nulla,
                                                blanditiis, perspiciatis atque saepe! Veritatis.</p>
                                            <p>Adipisicing consectetur elit. Dicta, amet quia ad debitis fugiat voluptatem
                                                neque dolores tempora iste saepe cupiditate, molestiae iure voluptatibus est
                                                beatae? Culpa, illo a You will begin to realize why, consectetur adipisicing
                                                elit. Commodi, doloribus, earum modi consectetur molestias asperiores.</p>
                                            <p>Voluptatem adipisicing elit. Dicta, amet quia ad debitis fugiat neque dolores
                                                tempora iste saepe cupiditate, molestiae iure voluptatibus est beatae?
                                                Culpa, illo a You will begin to realize why, consectetur adipisicing elit.
                                                Commodi, you will begin to realize why, consectetur adipisicing elit.
                                                Laudantium nisi eaque maxime totam, iusto accusantium esse placeat rem at
                                                temporibus minus architecto ipsum eveniet. Delectus cum sunt, ea cumque
                                                quas! Doloribus, earum modi consectetur molestias asperiores sequi ipsam
                                                neque error itaque veniam culpa eligendi similique ducimus nulla,
                                                blanditiis, perspiciatis atque saepe! Veritatis.</p>
                                        </div>
                                    </div>
                                    <!-- Features & Options Tab -->
                                    <div class="tab-pane fade" id="features" role="tabpanel"
                                        aria-labelledby="features-tab">
                                        <div class="car-generalinfo">
                                            <h6>Consectetur Adipisicing Elit</h6>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="info-title">Air conditioning</td>
                                                            <td class="info-owner">Mark</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info-title">Alloy Wheels</td>
                                                            <td class="info-owner">Jacob</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info-title">Anti-Lock Brakes (ABS)</td>
                                                            <td class="info-owner">Larry</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info-title">Anti-Theft</td>
                                                            <td class="info-owner">Larry</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info-title">Anti-Starter</td>
                                                            <td class="info-owner">Larry</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="info-title">Alloy Wheels</td>
                                                            <td class="info-owner">Larry</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Vehicle Overview Tab -->
                                    <div class="tab-pane fade" id="overview" role="tabpanel"
                                        aria-labelledby="overview-tab">
                                        <div class="car-generalinfo">
                                            <h6>Consectetur Adipisicing Elit</h6>
                                            <p>Temporibus possimus quasi beatae, consectetur adipisicing elit. Obcaecati
                                                unde molestias sunt officiis aliquid sapiente, numquam, porro perspiciatis
                                                neque voluptatem sint hic quam eveniet ad adipisci laudantium corporis ipsam
                                                ea!</p>
                                            <p>Consectetur adipisicing elit. Dicta, amet quia ad debitis fugiat voluptatem
                                                neque dolores tempora iste saepe cupiditate, molestiae iure voluptatibus est
                                                beatae? Culpa, illo a You will begin to realize why, consectetur adipisicing
                                                elit. Commodi, doloribus, earum modi consectetur molestias asperiores sequi
                                                ipsam neque error itaque veniam culpa eligendi similique ducimus nulla,
                                                blanditiis, perspiciatis atque saepe! Veritatis.</p>
                                            <p>Adipisicing consectetur elit. Dicta, amet quia ad debitis fugiat voluptatem
                                                neque dolores tempora iste saepe cupiditate, molestiae iure voluptatibus est
                                                beatae? Culpa, illo a You will begin to realize why, consectetur adipisicing
                                                elit. Commodi, doloribus, earum modi consectetur molestias asperiores.</p>
                                            <p>Voluptatem adipisicing elit. Dicta, amet quia ad debitis fugiat neque dolores
                                                tempora iste saepe cupiditate, molestiae iure voluptatibus est beatae?
                                                Culpa, illo a You will begin to realize why, consectetur adipisicing elit.
                                                Commodi, you will begin to realize why, consectetur adipisicing elit.
                                                Laudantium nisi eaque maxime totam, iusto accusantium esse placeat rem at
                                                temporibus minus architecto ipsum eveniet. Delectus cum sunt, ea cumque
                                                quas! Doloribus, earum modi consectetur molestias asperiores sequi ipsam
                                                neque error itaque veniam culpa eligendi similique ducimus nulla,
                                                blanditiis, perspiciatis atque saepe! Veritatis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Extra Features -->
                    </div>
                    <!-- Sidebar -->
                    <div class="col-lg-4 col-md-12">
                        <div class="car-details-sidebar">
                            <!-- Enquiry Form -->
                            <div class="details-form details-weight mb-4">
                                <h5 class="weight-title mb-4">Enquire Now</h5>
                                <form class="pgs-form">
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Name">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <input type="email" class="form-control" name="Email"
                                                placeholder="Email">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <input type="email" class="form-control" name="Email"
                                                placeholder="Contact Number">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <input type="email" class="form-control" name="Email"
                                                placeholder="City">
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <select class="form-control" id="car" name="model"
                                                aria-label="Select Model" aria-labelledby="car">
                                                <option disabled="" selected="selected" value="">Car Models
                                                </option>
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
                                        <div class="col-lg-12">
                                            <button class="btn btn-danger w-100" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('js')
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
@stop
