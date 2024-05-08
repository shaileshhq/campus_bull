@extends('frontend.layouts.front_app')
@section('content')
    <!-- Page Banner Start -->
    <div class="section page-banner-section bg-color-1">
        <img class="shape-4" src="{{ asset('public/front_css/assets/images/shape/shape-21.png')}}" alt="shape">
        <img class="shape-5" src="{{ asset('public/front_css/assets/images/shape/shape-21.png')}}" alt="shape">
        <div class="container">
            <!-- Course Details Banner Content Start -->
            <div class="course-details-banner-content mb-3">
                <h2 class="title">2021 Complete Python Bootcamp From Zero to Hero in Python </h2>
                <p>Learn Python like a Professional Start from the basics and go all the way to creating your own
                    applications and games </p>
                {{-- <div class="course-details-meta">
                    <div class="meta-action">
                        <div class="meta-author">
                            <img src="{{ asset('public/front_css/assets/images/author-1.jpg')}}" alt="Author">
                        </div>
                        <div class="meta-name">
                            <h5 class="name">Adam Helen</h5>
                        </div>
                    </div>
                    <div class="meta-action">
                        <p class="label">Last Update : <span>2/12/2021</span></p>
                    </div>
                </div> --}}
            </div>
            <!-- Course Details Banner Content End -->
        </div>
    </div>
    <!-- Page Banner End -->
    <!-- Course List Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-7 col-lg-8">
                    <!-- Course Details Wrapper Start -->
                    <div class="course-details-wrapper">
                        <!-- Course Overview Start -->
                        <div class="course-overview">
                            <h3 class="title">Course Overview</h3>
                            <p class="mb-3">World-class training and development programs developed by top teachers. Build skills with
                                courses, certificates, and degrees online from world-class universities and companies. from
                                the National Research University Higher School of Economics (HSE University) is the first
                                fully online.</p>
                        </div>
                        <!-- Course Overview End -->
                        <!-- Course Learn List Start -->
                        <div class="course-learn-list">
                            <h3 class="title">What you will learn</h3>
                            <ul>
                                <li>Become a UX designer.</li>
                                <li>Become a UX designer.</li>
                                <li>You will be able to add UX designer to your CV</li>
                                <li>You will be able to add UX designer to your CV</li>
                                <li>Build & test a full website design.</li>
                                <li>Build & test a full website design.</li>
                            </ul>
                        </div>
                        <!-- Course Learn List End -->
                    </div>
                    <!-- Course Details Wrapper End -->
                </div>
                <div class="col-lg-4">
                    <!-- Sidebar Wrapper Start -->
                    <div class="sidebar-details-wraps">
                        <!-- Sidebar Details Video Description Start -->
                        <div class="sidebar-details-video-description">
                            <div class="sidebar-video p-0">
                                <img src="{{ asset('public/front_css/assets/images/sidebar-video.jpg')}}" alt="video">
                                <a href="https://youtu.be/cdZHQFCqK3g" class="play videoLightbox" href="#"><i
                                        class="fa fa-play"></i></a>
                            </div>
                            <div class="sidebar-description">
                                <div class="price">
                                    <span class="sale-price">Rs. 3 Lakh</span>
                                    <span class="regular-price">Rs. 3.75 Lakh</span>
                                </div>
                                <a class="btn btn-primary btn-hover-heading-color w-100" href="#">Course Details</a>
                                <ul class="description-list">
                                    <li><i class="fa fa-clock-o"></i> Duration <span>4 Years</span></li>
                                    <li><i class="fa fa-sliders"></i> Level <span>Expert</span></li>
                                    <li><i class="fa fa-file-o"></i> Lectures <span>4 Lectures</span></li>
                                    <li><i class="fa fa-language"></i> Language <span>English</span></li>
                                    <li><i class="fa fa-user-o"></i> Enrolled <span>400 Enrolled</span></li>
                                </ul>
                                <a class="btn btn-outline-primary w-100 mb-3" data-bs-toggle="modal" data-bs-target="#myModal1"><i class="fa fa-envelope"></i>
                                    Enquiry Now</a>
                            </div>
                        </div>
                        <!-- Sidebar Details Video Description End -->
                    </div>
                    <!-- Sidebar Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Course List End -->
@endsection
