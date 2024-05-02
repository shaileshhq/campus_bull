@extends('frontend.layouts.front_app')
@section('content')

        <!-- Page Banner Start -->
        <div class="section page-banner-section bg-color-1">
            <div class="container">
                <!-- Page Banner Content Start -->
                <div class="page-banner-content">
                    <h2 class="title">Contact</h2>
                    <ul class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us </li>
                    </ul>
                </div>
                <!-- Page Banner Content End -->
            </div>
        </div>
        <!-- Page Banner End -->

        <!-- Login Start -->
        <div class="section section-padding">
            <div class="container mb-2">

                <!-- Login & Register Wrapper Start -->
                <div class="login-register-wrapper">
                    <div class="row">
                        <div class="col-lg-5">
                        <div class="bg-light">
                         <img src="{{asset('public/front_css/assets/images/help.png')}}" class="auth-side-image">
                         </div>
                        </div>
                        <div class="col-lg-7">
                            <!-- Login & Register Box Start -->
                            <div class="login-register-box">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class="title text-center">Have Some Questions?</h2>
                                </div>
                                <!-- Section Title End -->
                               <hr>
                               <div class="contact-info-wrapper">
                            <div class="row gx-0">
                                <div class="col-md-6">
                                    <!-- Single Contact Info Start -->
                                    <div class="single-contact-info">
                                        <div class="info-icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="info-content">
                                            <h5 class="title">Telephone</h5>
                                            <p><a href="tel:+91-1234567890">+91-1234567890</a></p>
                                        </div>
                                    </div>
                                    <!-- Single Contact Info End -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Single Contact Info Start -->
                                    <div class="single-contact-info">
                                        <div class="info-icon">
                                            <i class="flaticon-mail"></i>
                                        </div>
                                        <div class="info-content">
                                            <h5 class="title">Our Mail</h5>
                                            <p><a href="mailto:info@campusbull.com">info@campusbull.com</a></p>
                                        </div>
                                    </div>
                                    <!-- Single Contact Info End -->
                                </div>
                                </div>
                            <div class="row gx-0">
                                <div class="col-md-12">
                                    <!-- Single Contact Info Start -->
                                    <div class="single-contact-info">
                                        <div class="info-icon">
                                            <i class="flaticon-placeholder"></i>
                                        </div>
                                        <div class="info-content">
                                            <h5 class="title">Varanasi Office</h5>
                                             <p>Varanasi, Uttar Pradesh, India(221010)</p>
                                        </div>
                                    </div>
                                    <!-- Single Contact Info End -->
                                </div>
                            </div>
                        </div>
                                <div class="blog-tags-social">
                                    <div class="blog-social m-auto">
                                        <div class="slider-btn d-flex">
                                            <a href="#" target="_blank" class="btn btn-blue btn-hover-heading-color" style="margin-right: 10px;"> <i class="fa fa-telegram" aria-hidden="true"></i> Join Telegram </a>
                                            <a href="#" target="_blank" class="btn btn-success btn-hover-heading-color" style="margin-right: 10px;"> <i class="fa fa-whatsapp" aria-hidden="true"></i> Join Whatsapp</a>
                                            <a href="" target="_blank" class="btn btn-danger btn-hover-heading-color"> <i class="fa fa-youtube-play" aria-hidden="true"></i> Join Youtube </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Login & Register Box End -->
                        </div>
                    </div>
                </div>
                <!-- Login & Register Wrapper End -->

            </div>
        </div>

        @endsection