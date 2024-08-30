@extends('layout.master')
@section('css')
<style>
 .contact-wrapper .card{
     box-shadow: 5px 5px 20px 0 rgba(0, 0, 0, 0.4);
     border-radius: 10px;
     padding: 20px;
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
        <img src="https://www.hyundai.com/content/dam/hyundai/in/en/images/home/dilse-pc.jpg" class="d-block w-100"
             alt="...">
    </section>
    <div class="contact-area py-120">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-6 align-self-center mb-4">
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
                    <div class="col-lg-6 align-self-center">
                        <div class="row justify-content-center">
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <h5>Insurance</h5>
                                    <p>We offer the best of car insurance services. heedless of whether you own a used car or a new car.  JSV Hyundai glad to be with you at every step of your car insurance need.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <h5>Finance</h5>
                                    <p>Looking for a Loan for your dream car? Say yes to your big dream. JSV Hyundai offers unique car loan Service that would change your dreams to reality.</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <h5>After Sale Service</h5>
                                    <p>JSV Hyundai showroom belive in customer smile. Drive your dream Hyundai car with a special smile Only at JSV Hyundai Lucknow.</p>
                                    <p>JSV Hyundai strives to enhance customer experience with dedicated after sales service.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop