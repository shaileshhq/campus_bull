<div class="footer-section section footer-bg">
    <div class="container">
        <!-- Footer Widget Wrapper Start -->
        <div class="footer-widget-wrapper">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">About Campus Bull</h4>
                        <div class="widget-info">
                            <p> Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a
                                document or a typeface without relying on meaningful content. Lorem ipsum may be used as
                                a placeholder before the final copy is available.</p>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-2 col-sm-6 col-xs-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Useful Links</h4>
                        <div class="widget-link">
                            <ul class="link">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Pricing</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-2 col-sm-6 col-xs-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Our Policies</h4>
                        <div class="widget-link">
                            <ul class="link">
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Partners</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Contact Us</h4>
                        <div class="widget-info">
                            <p><i class="flaticon-phone-call"></i> <a href="tel:+91-1234567890">+91-1234567890</a></p>
                            <p><i class="flaticon-placeholder"></i> <a
                                    href="mailto:info@campus_bull.com">info@campus_bull.com</a></p>
                            <p><i class="flaticon-open-mail"></i> <span>Varanasi, Uttar Pradesh, India (221010)</span>
                            </p>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Widget Wrapper End -->
        <!-- Footer Copyright End -->
        <div class="footer-copyright text-center">
            <p>&copy;2024 Campus Bull All rights reserved. </p>
        </div>
        <!-- Footer Copyright End -->
    </div>
</div>


<div class="modal fade" id="myModal1" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true"
    data-keyboard="false" data-bs-backdrop="static" style="z-index:999999999;">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Book Free Study Counselling Session!</h5>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" action="#">
                            <div class="col-lg-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required=""
                                        Placeholder="Enter your name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required=""
                                        Placeholder="Enter your email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <input type="text" name="phone" required="" Placeholder="Enter your number"
                                        class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <input type="text" name="message" class="form-control" required=""
                                        Placeholder="Remark (If Any)... " placeholder="Remark (If Any)... ">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mb-3">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I hereby confirm that I have
                                        filled in all the details in the registration form, correct and absolute to the
                                        best of my understanding. *</label>
                                </div>
                            </div>
                            <div class="send-btn text-center mt-3">
                                <button type="submit" class="btn btn-primary btn-hover-heading-color w-100"
                                    style="border-radius:5px;">Submit <i class="ri-arrow-right-line"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('public/front_css/assets/images/Book-Free-Study-Counselling-Session.png') }}"
                            alt="img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="whatsp">
    <!--- whatsapp icon start here -->
    <a href="#" target="_blank">
        <img src="{{ asset('public/front_css/assets/images/neet-whatsapp.png') }}">
    </a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--Shailesh -->
<script>
    jQuery(function($) {
        var path = window.location.href;
        if (path == 'http://localhost/campus_bull/') {} else {
            // because the 'href' property of the DOM element is the absolute path
            $('.main-menu li a').removeClass('active');
            $('.main-menu li a').each(function() {
                if (this.href === path) {
                    $(this).addClass('active');
                }
            });
        }
    });

    jQuery(function($) {
        var path = window.location.href;
        // because the 'href' property of the DOM element is the absolute path
        $('.navbar-navs li a').removeClass('active');
        $('.navbar-navs li a').each(function() {
            if (this.href === path) {
                $(this).addClass('active');
            }
        });
    });

    $(function() {
        $('.single-form a').click(function(e) {
            $('.single-form a').removeClass('active');
            $(this).addClass('active');
        });
    });
    $(function() {
        $('.single-category-items a').click(function(e) {
            $('.single-category-items a').removeClass('current');
            $(this).addClass('current');
        });
    });
</script>
