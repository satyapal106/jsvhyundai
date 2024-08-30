@extends('layout.master')
@section('css')
<style>
    .contact-section{padding: 50px 0px;}
    .contact-section .address-box {
        padding: 20px;
    }
    .contact-section .address-box{
        box-shadow: 5px 5px 20px 0 rgba(0, 0, 0, 0.4);
        border-radius: 20px;
    }
    .contact-section .address-box .branch-title{color: #0b2369;font-weight: 500;font-size: 18px;}
    .contact-section .address-box ul li{list-style: none;}
    .contact-section .address-box ul li a{
        text-decoration: none;
        color: #111111;
        font-size: 13px;
        line-height: 30px;
    }
    .contact-section .address-box ul li a i{font-size: 20px;}
    .contact-form-part .custom1 {
        ms-flex: 45.965%;
        flex: 45.965%;
        max-width: 45.965%;
    }
    .contact-form-part .custom2 {
        ms-flex: 54.035%;
        flex: 54.035%;
    }
    .pr-0, .px-0 {
        padding-right: 0 !important;
    }
    .pl-0, .px-0 {
        padding-left: 0 !important;
    }
    .img-part {
        height: 100%;
        background: url("{{asset('assets')}}/images/enquire2.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }
    #contact-form {
        background: url('https://rstheme.com/products/html/reobiz/assets/images/quote/right-bg2.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        padding: 72px 70px 94px;
    }
    .mb-53 {
        margin-bottom: 53px;
    }
    #contact-form .form-control {
        display: block;
        width: 100%;
        padding: 11px 20px;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        margin-bottom: 30px;
    }
</style>
@stop
@section('body')
<section class="slider-section">
    <img src="https://www.hyundai.com/content/dam/hyundai/in/en/images/home/dilse-pc.jpg" class="d-block w-100"
        alt="...">
</section>
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <h2 class="title">Our Showroom Location</h2>
            </div>
            <div class="col-md-4">
                <div class="address-box">
                    <h5 class="branch-title">JSV Hyundai Showroom Gomti Nagar</h5>
                    <ul>
                        <li><a href=""><i class="fas fa-map-marker"></i> CP-3/10, Vijayant Khand, Gomti Nagar, Lucknow, Uttar Pradesh 226010</a></li>
                        <li><a href=""><i class="fas fa-phone"></i> 9044038102 / 7897770012</a></li>
                        <li><a href=""><i class="fas fa-envelope"></i> jsvhyundai@gmail.com / care@jsvhyundai.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="address-box">
                    <h5 class="branch-title">JSV Hyundai Showroom Engineering Collage Chauraha</h5>
                    <ul>
                        <li><a href=""><i class="fas fa-map-marker"></i> CP-53, Near Engineering Collage Chauraha, Besides CNG Petrol Pump LUCKNOW, Uttar Pradesh 226021</a></li>
                        <li><a href=""><i class="fas fa-phone"></i> 9044038106 / 7897770013</a></li>
                        <li><a href=""><i class="fas fa-envelope"></i> ringroad@jsvhyundai.com / sales@jsvhyundai.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="address-box">
                    <h5 class="branch-title">JSV Hyundai Showroom Barabanki</h5>
                    <ul>
                        <li><a href=""><i class="fas fa-map-marker"></i> JSV HYUNDAI OPP. H.P. PETROL PUMP NEAR ALAPUR MAZAR OBARI BARABANKI, Uttar Pradesh 225001</a></li>
                        <li><a href=""><i class="fas fa-phone"></i> 7897770017</a></li>
                        <li><a href=""><i class="fas fa-envelope"></i> jsvhyundai@gmail.com / care@jsvhyundai.com</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-12 text-center mb-4">
                <h2 class="title">Our Workshop Location</h2>
            </div>
            <div class="col-md-4">
                <div class="address-box">
                    <h5 class="branch-title">Gomti Nagar</h5>
                    <ul>
                        <li><a href=""><i class="fas fa-map-marker"></i> TC – 22, Vibhuti Khand, Gomti Nagar, Near Cinepolic Mall, Lucknow.</a></li>
                        <li><a href=""><i class="fas fa-phone"></i> +91-7897700021 / 9044038100</a></li>
                        <li><a href=""><i class="fas fa-envelope"></i>  jsvhyundai.service@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="address-box">
                    <h5 class="branch-title">JSitapur Road</h5>
                    <ul>
                        <li><a href=""><i class="fas fa-map-marker"></i> Agarwal Warehouse, Complex No-3 Bhitauli Crossing Sitapur Road Lucknow.</a></li>
                        <li><a href=""><i class="fas fa-phone"></i> +91-7897770002 / 9044038109</a></li>
                        <li><a href=""><i class="fas fa-envelope"></i>  jsvhyundai.service@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-5 custom1 pr-0">
                <div class="img-part"></div>
            </div>
            <div class="col-md-7 custom2 .pl-0">
                <div id="form-messages"></div>
                <form id="contact-form" method="post" action="mailer.php">
                    <div class="sec-title mb-53 md-mb-42">
                        <div class="sub-title text-white">Let's Talk</div>
                        <h2 class="title text-white mb-0">Get In Touch</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="website" placeholder="Your Website" required>
                        </div>
                        <div class="col-md-12">
                            <textarea name="message" class="form-control" placeholder="Your Message Here" required></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@stop