@extends('frontend.layouts.front_app')
@section('content')
    <!-- Slider Start -->
    <div class="slider-section-04 section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <!-- Slider Start -->
                    <div class="slider-content">
                        <h2 class="title">India’s Best Ever Admission Counselling Portal for NEET UG & PG</h2>
                        {{-- <h5 class="sub-title mt-3">One Stop Solution for every NEET PG Student</h5> --}}
                        <p>Welcome to our premier Admission Counseling Portal for NEET PG! Dive into a wealth of resources
                            tailored to guide your journey towards postgraduate medical studies in India. Access exam
                            insights, preparation materials, counseling guidance, expert advice, and a vibrant community
                            forum. Stay updated with the latest news and connect with successful candidates. Empower your
                            aspirations with our comprehensive support system. Start exploring today!</p>
                        <a href="#" class="btn btn-primary btn-hover-heading-color">Explore All Courses</a>
                    </div>
                    <!-- Slider End -->
                </div>

                <div class="col-md-6 col-sm-8">
                    <!-- Slider Images Start -->
                    <div class="slider-images-04">
                        <img class="image-shape-01 parallaxed animate-01"
                            src="{{ asset('public/front_css/assets/images/shape-17.png') }}" alt="Shape">

                        <div class="image">
                            <img src="{{ asset('public/front_css/assets/images/hero-3.png') }}" alt="Hero">
                        </div>
                    </div>
                    <!-- Slider Images End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider End -->
    <!-- Feature Category Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h2 class="title"><span>Top Study Places</span></h2>
            </div>
            <!-- Section Title End -->
            <!-- Feature Category Wrapper Start -->
            <div class="feature-category-wrapper feature-category-active">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Single Feature Category Start -->
                            <div class="single-feature-category">
                                <div class="feature-category-box">
                                    <div class="shape-1"></div>
                                    <div class="box-icon">
                                        <a href="#"><img
                                                src="{{ asset('public/front_css/assets/images/gate-of-india.png') }}"
                                                alt="Icon"></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <h4 class="title"><a href="#">Delhi NCR</a></h4>
                                </div>
                            </div>
                            <!-- Single Feature Category End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single Feature Category Start -->
                            <div class="single-feature-category">
                                <div class="feature-category-box">
                                    <div class="box-icon">
                                        <a href="#"><img
                                                src="{{ asset('public/front_css/assets/images/bangalore.png') }}"
                                                alt="Icon"></a>
                                    </div>
                                    <div class="box-content">
                                        <h4 class="title"><a href="#">Banglore</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Feature Category End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single Feature Category Start -->
                            <div class="single-feature-category">
                                <div class="feature-category-box">
                                    <div class="box-icon">
                                        <a href="#"><img
                                                src="{{ asset('public/front_css/assets/images/hyderabad-charminar.png') }}"
                                                alt="Icon"></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <h4 class="title"><a href="#">Hydrabad</a></h4>
                                </div>
                            </div>
                            <!-- Single Feature Category End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single Feature Category Start -->
                            <div class="single-feature-category">
                                <div class="feature-category-box">
                                    <div class="box-icon">
                                        <a href="#"><img src="{{ asset('public/front_css/assets/images/pune.png') }}"
                                                alt="Icon"></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <h4 class="title"><a href="#">Pune </a></h4>
                                </div>
                            </div>
                            <!-- Single Feature Category End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single Feature Category Start -->
                            <div class="single-feature-category">
                                <div class="feature-category-box">
                                    <div class="box-icon">
                                        <a href="#"><img
                                                src="{{ asset('public/front_css/assets/images/bulding.png') }}"
                                                alt="Icon"></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <h4 class="title"><a href="#">Mumbai </a></h4>
                                </div>
                            </div>
                            <!-- Single Feature Category End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single Feature Category Start -->
                            <div class="single-feature-category">
                                <div class="feature-category-box">
                                    <div class="box-icon">
                                        <a href="#"><img
                                                src="{{ asset('public/front_css/assets/images/temple.png') }}"
                                                alt="Icon"></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <h4 class="title"><a href="#">Chennai </a></h4>
                                </div>
                            </div>
                            <!-- Single Feature Category End -->
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- Feature Category End -->
        </div>
    </div>
    <!-- Feature Category End -->

    <!-- Courses Start -->
    <div class="section section-padding bg-color-1">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h2 class="title"><span>Explore Courses</span></h2>
            </div>
            <!-- Section Title End -->
            <!-- Courses Wrapper Start -->
            <div class="courses-wrapper">
                <!-- Courses Tab Start -->
                <div class="courses-tab">
                    <div class="tab-menu">
                        <ul class="nav justify-content-center">
                            <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab1">Neet PG</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab2">Neet UG</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab3">Neet UG</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab4">Neet UG</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#tab5">Neet UG</button></li>
                        </ul>
                    </div>
                    <!-- Courses Tab Content Start -->
                    <div class="tab-content courses-tab-content">
                        <div class="tab-pane active" id="tab1">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Courses Start -->
                                    <div class="single-course">
                                        <div class="courses-content">
                                            <div class="top-metas">
                                                <a class="tag">Full Time</a>
                                            </div>
                                            <h3 class="title"><a href="#">MBBS (MD)</a></h3>
                                            <div class="top-meta">
                                                <p>Full Time</p>
                                                <span class="price">
                                                    <span class="sale-price">Free</span>
                                                </span>
                                            </div>
                                            <div class="top-meta">
                                                <p>Full Time</p>
                                                <span class="price">
                                                    <span class="sale-price">Free</span>
                                                </span>
                                            </div>
                                            <div class="top-meta">
                                                <p>Full Time</p>
                                                <span class="price">
                                                    <span class="sale-price">Free</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="courses-meta">
                                            <a href="{{route('course_details')}}">
                                                <p class="student"> Course Overview</p>
                                                <div class="arw-rigt">
                                                    <i class="fa fa-angle-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Courses End -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Courses Start -->
                                    <div class="single-course">
                                        <div class="courses-content">
                                            <div class="top-metas">
                                                <a class="tag">Full Time</a>
                                            </div>
                                            <h3 class="title"><a href="#">MBBS (MD)</a></h3>
                                            <div class="top-meta">
                                                <p>Full Time</p>
                                                <span class="price">
                                                    <span class="sale-price">Free</span>
                                                </span>
                                            </div>
                                            <div class="top-meta">
                                                <p>Full Time</p>
                                                <span class="price">
                                                    <span class="sale-price">Free</span>
                                                </span>
                                            </div>
                                            <div class="top-meta">
                                                <p>Full Time</p>
                                                <span class="price">
                                                    <span class="sale-price">Free</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="courses-meta">
                                            <a href="#">
                                                <p class="student"> Course Overview</p>
                                                <div class="arw-rigt">
                                                    <i class="fa fa-angle-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Courses End -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab3">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Courses Start -->
                                    <div class="single-course">
                                        <div class="courses-content">
                                            <div class="top-metas">
                                                <a class="tag">Full Time</a>
                                            </div>
                                            <h3 class="title"><a href="#">MBBS (MD)</a></h3>
                                            <div class="top-meta">
                                                <p>Full Time</p>
                                                <span class="price">
                                                    <span class="sale-price">Free</span>
                                                </span>
                                            </div>
                                            <div class="top-meta">
                                                <p>Full Time</p>
                                                <span class="price">
                                                    <span class="sale-price">Free</span>
                                                </span>
                                            </div>
                                            <div class="top-meta">
                                                <p>Full Time</p>
                                                <span class="price">
                                                    <span class="sale-price">Free</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="courses-meta">
                                            <a href="#">
                                                <p class="student"> Course Overview</p>
                                                <div class="arw-rigt">
                                                    <i class="fa fa-angle-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Courses End -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab4">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Courses Start -->
                                    <div class="single-course">
                                        <div class="courses-content">
                                            <div class="top-metas">
                                                <a class="tag">Full Time</a>
                                            </div>
                                            <h3 class="title"><a href="#">MBBS (MD)</a></h3>
                                            <div class="top-meta">
                                                <p>Full Time</p>
                                                <span class="price">
                                                    <span class="sale-price">Free</span>
                                                </span>
                                            </div>
                                            <div class="top-meta">
                                                <p>Full Time</p>
                                                <span class="price">
                                                    <span class="sale-price">Free</span>
                                                </span>
                                            </div>
                                            <div class="top-meta">
                                                <p>Full Time</p>
                                                <span class="price">
                                                    <span class="sale-price">Free</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="courses-meta">
                                            <a href="#">
                                                <p class="student"> Course Overview</p>
                                                <div class="arw-rigt">
                                                    <i class="fa fa-angle-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Courses End -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab5">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Courses Start -->
                                    <div class="single-course">
                                        <div class="courses-content">
                                            <div class="top-metas">
                                                <a class="tag">Full Time</a>
                                            </div>
                                            <h3 class="title"><a href="#">MBBS (MD)</a></h3>
                                            <div class="top-meta">
                                                <p>Full Time</p>
                                                <span class="price">
                                                    <span class="sale-price">Free</span>
                                                </span>
                                            </div>
                                            <div class="top-meta">
                                                <p>Full Time</p>
                                                <span class="price">
                                                    <span class="sale-price">Free</span>
                                                </span>
                                            </div>
                                            <div class="top-meta">
                                                <p>Full Time</p>
                                                <span class="price">
                                                    <span class="sale-price">Free</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="courses-meta">
                                            <a href="#">
                                                <p class="student"> Course Overview</p>
                                                <div class="arw-rigt">
                                                    <i class="fa fa-angle-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Single Courses End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Courses Tab Content End -->
                </div>
                <!-- Courses Tab End -->
                <div class="courses-more text-center">
                    <p><strong>200+</strong> more skillful courses you can explore</p>
                    <a href="#" class="btn btn-primary btn-hover-heading-color">Explore All Courses</a>
                </div>
            </div>
            <!-- Courses Wrapper End -->
        </div>
    </div>
    <!-- Courses End -->

    <!-- College Start -->
    <div class="section  courses-section-02 section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h2 class="title"><span>Explore College List</span></h2>
            </div>
            <!-- Section Title End -->

            <!-- Courses Wrapper Start -->
            <div class="courses-wrapper courses-02-active">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card_block">
                                <div class="tupple">
                                    <div class="d-md-flex justify-content-between">
                                        <div class="left_side_tupple">
                                            <div class="tupple_top_block">
                                                <div class="image_block mb-2">
                                                    <a href="#">
                                                        <img class="border_radius5" quality="100" src="https://cache.careers360.mobi/media/presets/60X60/colleges/social-media/logo/Logo_of_Aarupadai_Veedu_Medical_College_and_Hospital_Puducherry_Logo.webp" alt="AVMC Puducherry" width="62" height="62">
                                                    </a>
                                                </div>
                                                <div class="content_block d-block d-md-none"><span><i class="fa fa-map-marker" aria-hidden="true"></i>Kirumampakkam, Puducherry</span><br>
                                                    <div class="block_border"></div><span>Private</span>
                                                </div>
                                                <div class="tupple_right_block d-none d-md-block">
                                                    <h3 class="college_name"
                                                        title="AVMC Puducherry - Aarupadai Veedu Medical College and Hospital, Puducherry"
                                                        data-testid="college_name"><a
                                                            href="#">AVMC
                                                            Puducherry - Aarupadai Veedu Medical College and Hospital,
                                                            Puducherry</a></h3>
                                                    <div
                                                        class="content_block d-none d-md-block d-md-flex flex-row justify-content-between">
                                                        <div><span><i class="fa fa-map-marker" aria-hidden="true"></i> Kirumampakkam, Puducherry</span> <span>Private</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="general_text" href="#">MD General Medicine</a>
                                            <div class="snippet_block">
                                                <ul class="snippet_list">
                                                    <li><span class="gray_text">Exams : </span>
                                                        <a class="exam_black_link" href="#">NEET PG</a> </li>
                                                    <li><span class="gray_text">Fees : </span> ₹ 129 Lakhs</li>
                                                    <li><a href="#">M.D.<span>(14 Courses)</span></a> </li>
                                                    <li><a href="">M.S.<span>(5 Courses)</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="combined_block d-md-none">
                                            <div class="important_links">
                                                <ul class="links_list">
                                                    <li> <a href="#">Admissions</a></li>
                                                    <li><a href="#">Cut-off</a></li>
                                                    <li><a href="#">Placements</a></li>
                                                    <li><a href="#">Courses</a></li>
                                                    <li><a href="#">Facilities</a></li>
                                                    <li><a href="#">QnA</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="d-none d-md-block">
                                        <div class="combined_block">
                                            <div class="important_links">
                                                <ul class="links_list">
                                                    <li><a href="#">Admissions</a></li>
                                                    <li><a href="#">Cut-off</a></li>
                                                    <li><a href="#">Placements</a></li>
                                                    <li><a  href="#">Courses</a></li>
                                                    <li><a href="#">Facilities</a></li>
                                                    <li><a href="#">QnA</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_block">
                                <div class="tupple">
                                    <div class="d-md-flex justify-content-between">
                                        <div class="left_side_tupple">
                                            <div class="tupple_top_block">
                                                <div class="image_block mb-2">
                                                    <a href="#">
                                                        <img class="border_radius5" quality="100" src="https://cache.careers360.mobi/media/presets/60X60/colleges/social-media/logo/Logo_of_Aarupadai_Veedu_Medical_College_and_Hospital_Puducherry_Logo.webp" alt="AVMC Puducherry" width="62" height="62">
                                                    </a>
                                                </div>
                                                <div class="content_block d-block d-md-none"><span><i class="fa fa-map-marker" aria-hidden="true"></i>Kirumampakkam, Puducherry</span><br>
                                                    <div class="block_border"></div><span>Private</span>
                                                </div>
                                                <div class="tupple_right_block d-none d-md-block">
                                                    <h3 class="college_name"
                                                        title="AVMC Puducherry - Aarupadai Veedu Medical College and Hospital, Puducherry"
                                                        data-testid="college_name"><a
                                                            href="#">AVMC
                                                            Puducherry - Aarupadai Veedu Medical College and Hospital,
                                                            Puducherry</a></h3>
                                                    <div
                                                        class="content_block d-none d-md-block d-md-flex flex-row justify-content-between">
                                                        <div><span><i class="fa fa-map-marker" aria-hidden="true"></i> Kirumampakkam, Puducherry</span> <span>Private</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="general_text" href="#">MD General Medicine</a>
                                            <div class="snippet_block">
                                                <ul class="snippet_list">
                                                    <li><span class="gray_text">Exams : </span>
                                                        <a class="exam_black_link" href="#">NEET PG</a> </li>
                                                    <li><span class="gray_text">Fees : </span> ₹ 129 Lakhs</li>
                                                    <li><a href="#">M.D.<span>(14 Courses)</span></a> </li>
                                                    <li><a href="">M.S.<span>(5 Courses)</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="combined_block d-md-none">
                                            <div class="important_links">
                                                <ul class="links_list">
                                                    <li> <a href="#">Admissions</a></li>
                                                    <li><a href="#">Cut-off</a></li>
                                                    <li><a href="#">Placements</a></li>
                                                    <li><a href="#">Courses</a></li>
                                                    <li><a href="#">Facilities</a></li>
                                                    <li><a href="#">QnA</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="d-none d-md-block">
                                        <div class="combined_block">
                                            <div class="important_links">
                                                <ul class="links_list">
                                                    <li><a href="#">Admissions</a></li>
                                                    <li><a href="#">Cut-off</a></li>
                                                    <li><a href="#">Placements</a></li>
                                                    <li><a  href="#">Courses</a></li>
                                                    <li><a href="#">Facilities</a></li>
                                                    <li><a href="#">QnA</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_block">
                                <div class="tupple">
                                    <div class="d-md-flex justify-content-between">
                                        <div class="left_side_tupple">
                                            <div class="tupple_top_block">
                                                <div class="image_block mb-2">
                                                    <a href="#">
                                                        <img class="border_radius5" quality="100" src="https://cache.careers360.mobi/media/presets/60X60/colleges/social-media/logo/Logo_of_Aarupadai_Veedu_Medical_College_and_Hospital_Puducherry_Logo.webp" alt="AVMC Puducherry" width="62" height="62">
                                                    </a>
                                                </div>
                                                <div class="content_block d-block d-md-none"><span><i class="fa fa-map-marker" aria-hidden="true"></i>Kirumampakkam, Puducherry</span><br>
                                                    <div class="block_border"></div><span>Private</span>
                                                </div>
                                                <div class="tupple_right_block d-none d-md-block">
                                                    <h3 class="college_name"
                                                        title="AVMC Puducherry - Aarupadai Veedu Medical College and Hospital, Puducherry"
                                                        data-testid="college_name"><a
                                                            href="#">AVMC
                                                            Puducherry - Aarupadai Veedu Medical College and Hospital,
                                                            Puducherry</a></h3>
                                                    <div
                                                        class="content_block d-none d-md-block d-md-flex flex-row justify-content-between">
                                                        <div><span><i class="fa fa-map-marker" aria-hidden="true"></i> Kirumampakkam, Puducherry</span> <span>Private</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="general_text" href="#">MD General Medicine</a>
                                            <div class="snippet_block">
                                                <ul class="snippet_list">
                                                    <li><span class="gray_text">Exams : </span>
                                                        <a class="exam_black_link" href="#">NEET PG</a> </li>
                                                    <li><span class="gray_text">Fees : </span> ₹ 129 Lakhs</li>
                                                    <li><a href="#">M.D.<span>(14 Courses)</span></a> </li>
                                                    <li><a href="">M.S.<span>(5 Courses)</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="combined_block d-md-none">
                                            <div class="important_links">
                                                <ul class="links_list">
                                                    <li> <a href="#">Admissions</a></li>
                                                    <li><a href="#">Cut-off</a></li>
                                                    <li><a href="#">Placements</a></li>
                                                    <li><a href="#">Courses</a></li>
                                                    <li><a href="#">Facilities</a></li>
                                                    <li><a href="#">QnA</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="d-none d-md-block">
                                        <div class="combined_block">
                                            <div class="important_links">
                                                <ul class="links_list">
                                                    <li><a href="#">Admissions</a></li>
                                                    <li><a href="#">Cut-off</a></li>
                                                    <li><a href="#">Placements</a></li>
                                                    <li><a  href="#">Courses</a></li>
                                                    <li><a href="#">Facilities</a></li>
                                                    <li><a href="#">QnA</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card_block">
                                <div class="tupple">
                                    <div class="d-md-flex justify-content-between">
                                        <div class="left_side_tupple">
                                            <div class="tupple_top_block">
                                                <div class="image_block mb-2">
                                                    <a href="#">
                                                        <img class="border_radius5" quality="100" src="https://cache.careers360.mobi/media/presets/60X60/colleges/social-media/logo/Logo_of_Aarupadai_Veedu_Medical_College_and_Hospital_Puducherry_Logo.webp" alt="AVMC Puducherry" width="62" height="62">
                                                    </a>
                                                </div>
                                                <div class="content_block d-block d-md-none"><span><i class="fa fa-map-marker" aria-hidden="true"></i>Kirumampakkam, Puducherry</span><br>
                                                    <div class="block_border"></div><span>Private</span>
                                                </div>
                                                <div class="tupple_right_block d-none d-md-block">
                                                    <h3 class="college_name"
                                                        title="AVMC Puducherry - Aarupadai Veedu Medical College and Hospital, Puducherry"
                                                        data-testid="college_name"><a
                                                            href="#">AVMC
                                                            Puducherry - Aarupadai Veedu Medical College and Hospital,
                                                            Puducherry</a></h3>
                                                    <div
                                                        class="content_block d-none d-md-block d-md-flex flex-row justify-content-between">
                                                        <div><span><i class="fa fa-map-marker" aria-hidden="true"></i> Kirumampakkam, Puducherry</span> <span>Private</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="general_text" href="#">MD General Medicine</a>
                                            <div class="snippet_block">
                                                <ul class="snippet_list">
                                                    <li><span class="gray_text">Exams : </span>
                                                        <a class="exam_black_link" href="#">NEET PG</a> </li>
                                                    <li><span class="gray_text">Fees : </span> ₹ 129 Lakhs</li>
                                                    <li><a href="#">M.D.<span>(14 Courses)</span></a> </li>
                                                    <li><a href="">M.S.<span>(5 Courses)</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="combined_block d-md-none">
                                            <div class="important_links">
                                                <ul class="links_list">
                                                    <li> <a href="#">Admissions</a></li>
                                                    <li><a href="#">Cut-off</a></li>
                                                    <li><a href="#">Placements</a></li>
                                                    <li><a href="#">Courses</a></li>
                                                    <li><a href="#">Facilities</a></li>
                                                    <li><a href="#">QnA</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="d-none d-md-block">
                                        <div class="combined_block">
                                            <div class="important_links">
                                                <ul class="links_list">
                                                    <li><a href="#">Admissions</a></li>
                                                    <li><a href="#">Cut-off</a></li>
                                                    <li><a href="#">Placements</a></li>
                                                    <li><a  href="#">Courses</a></li>
                                                    <li><a href="#">Facilities</a></li>
                                                    <li><a href="#">QnA</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="courses-more text-center">
                        <a href="#" class="btn btn-primary btn-hover-heading-color">Explore All College List</a>
                    </div>
                </div>

            </div>
            <!-- Courses Wrapper End -->
        </div>
    </div>
    <!-- College End -->

    <!-- Counter Start -->
    <div class="section counter-section feature-section">
        <div class="container">
            <!-- Counter Wrapper Start -->
            <div class="counter-wrapper">
                <div class="row row-cols-2 row-cols-sm-4">
                    <div class="col">
                        <!-- Single Counter Start -->
                        <div class="single-counter">
                            <div class="counter-box">
                                <div class="counter-icon">
                                    <img src="{{ asset('public/front_css/assets/images/icon-1.png') }}" alt="Campus Bull">
                                </div>
                                <div class="counter-content">
                                    <span class="count value" data-count="95">0</span><span class="count">%</span>
                                    <p>Success Rate</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Counter End -->
                    </div>
                    <div class="col">
                        <!-- Single Counter Start -->
                        <div class="single-counter">
                            <div class="counter-box">
                                <div class="counter-icon">
                                    <img src="{{ asset('public/front_css/assets/images/icon-2.png') }}" alt="Campus Bull">
                                </div>
                                <div class="counter-content">
                                    <span class="count value" data-count="1000">0</span><span class="count">%</span>
                                    <p>Complete Guidance</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Counter End -->
                    </div>
                    <div class="col">
                        <!-- Single Counter Start -->
                        <div class="single-counter">
                            <div class="counter-box">
                                <div class="counter-icon">
                                    <img src="{{ asset('public/front_css/assets/images/icon-3.png') }}"
                                        alt="Campus Bull">
                                </div>
                                <div class="counter-content">
                                    <span class="count value" data-count="100">0</span><span class="count">%</span>
                                    <p>Responsible</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Counter End -->
                    </div>
                    <div class="col">
                        <!-- Single Counter Start -->
                        <div class="single-counter">
                            <div class="counter-box">
                                <div class="counter-icon">
                                    <img src="{{ asset('public/front_css/assets/images/icon-4.png') }}"
                                        alt="Campus Bull">
                                </div>
                                <div class="counter-content">
                                    <span class="count value" data-count="2500">0</span><span class="count">+</span>
                                    <p>Candidates Counseled </p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Counter End -->
                    </div>
                </div>
            </div>
            <!-- Counter Wrapper End -->
        </div>
    </div>
    <!-- Counter End -->

    <!-- Courses Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h2 class="title"><span>The Next-Gen Counselling Platform</span></h2>
            </div>
            <!-- Section Title End -->
            <!-- Courses Wrapper Start -->
            <div class="courses-wrapper">
                <!-- Courses Tab Start -->
                <div class="courses-tabs">
                    <div class="tab-menu mb-3">
                        <ul class="nav justify-content-center">
                            <li><button class="active" data-bs-toggle="tab"
                                    data-bs-target="#announcements_and_events">Announcements & Events</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#closing_ranks">Closing Ranks</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#seat_matrix">Seat Matrix</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#allotment_mapping">Allotment
                                    Mapping</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#institutes">Institutes</button></li>
                            <li><button data-bs-toggle="tab" data-bs-target="#videos">Videos</button></li>
                        </ul>
                    </div>
                    <!-- Courses Tab Content Start -->
                    <div class="tab-content courses-tab-content">
                        <div class="tab-pane active" id="announcements_and_events">
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                    <img src="{{ asset('public/front_css/assets/images/announcements-and-events.png') }}"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="closing_ranks">
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                    <img src="{{ asset('public/front_css/assets/images/announcements-and-events.png') }}"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="seat_matrix">
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                    <img src="{{ asset('public/front_css/assets/images/announcements-and-events.png') }}"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="allotment_mapping">
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                    <img src="{{ asset('public/front_css/assets/images/announcements-and-events.png') }}"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="institutes">
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                    <img src="{{ asset('public/front_css/assets/images/announcements-and-events.png') }}"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="videos">
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                    <img src="{{ asset('public/front_css/assets/images/announcements-and-events.png') }}"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Courses Tab Content End -->
                </div>
                <!-- Courses Tab End -->
            </div>
            <!-- Courses Wrapper End -->
        </div>
    </div>
    <!-- Courses End -->

    <!-- Call To Action Start -->
    <div class="section bg-color-2 call-to-action-bg">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-6">
                    <!-- Call To Action Content Start -->
                    <div class="call-to-action-content-02 section-padding">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="title">Why trust Campus Bull? </h2>
                            <p style="font-size: 15px;">Here's why ZyNerd is your ideal companion in your medical career
                                journey.</p>
                        </div>
                        <!-- Section Title End -->
                        <ul>
                            <li>Unrivalled Accuracy</li>
                            <li>Effortless Efficiency </li>
                            <li>Timely Updates</li>
                            <li>Deadline Assurance</li>
                            <li>User-Friendly Interface</li>
                            <li>Proven Experience</li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-hover-heading-color">Get Started Today</a>
                    </div>
                    <!-- Call To Action Content End -->
                </div>
                <div class="col-md-6">
                    <!-- Call To Action Content Start -->
                    <div class="call-to-action-images-02 text-center text-lg-end d-none d-md-block">

                        <div class="call-to-images-shape-01"></div>

                        <img class="call-to-images-shape-02 parallaxed"
                            src="{{ asset('public/front_css/assets/images/shape-12.svg') }}" alt="">

                        <div class="image">
                            <div class="call-to-action-shape-01"></div>
                            <img src="{{ asset('public/front_css/assets/images/cta-1.png') }}" alt="Call To Action">
                        </div>
                    </div>
                    <!-- Call To Action Content End -->
                </div>
            </div>
        </div>

        <div class="call-to-action-shape-01">
            <svg id="svg" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0, 0, 400,370.35681610247025">
                <g id="svgg">
                    <path class="shape-path" id="path0"
                        d="M249.954 0.635 C 240.575 3.389,233.929 9.074,230.209 17.528 C 221.671 36.930,201.468 54.980,166.331 74.599 C 150.321 83.539,133.886 91.550,97.896 107.960 C 60.753 124.895,46.948 131.724,33.211 139.957 C 2.314 158.477,-5.531 173.697,7.558 189.731 C 8.181 190.495,11.285 193.759,14.456 196.984 C 38.336 221.280,50.229 238.507,53.680 253.797 C 54.907 259.234,55.006 266.165,53.979 274.748 C 51.984 291.423,54.149 301.599,62.854 316.468 C 72.588 333.095,83.951 343.673,97.896 349.088 C 107.191 352.698,115.551 354.028,136.688 355.260 C 160.933 356.672,172.530 358.640,186.647 363.738 C 199.456 368.363,216.007 367.283,240.657 360.214 C 277.351 349.690,331.341 324.707,386.917 292.536 C 397.502 286.408,398.745 285.641,398.645 285.304 C 398.595 285.134,396.907 276.638,394.895 266.423 C 371.016 145.183,358.578 74.176,357.552 53.239 C 357.423 50.608,357.277 49.322,356.993 48.307 C 352.156 31.013,314.465 7.243,281.287 0.562 L 278.494 0.000 265.276 0.009 L 252.059 0.017 249.954 0.635 "
                        stroke="none" fill-rule="evenodd"></path>
                </g>
            </svg>
        </div>

        <div class="call-to-action-shape-02 animate-05"></div>

        <div class="call-to-action-shape-03"></div>
    </div>
    <!-- Call To Action End -->

    <!-- Testimonial End -->
    <div class="section section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h2 class="title"><span>What Our Student Says</span></h2>
            </div>
            <!-- Section Title End -->
        </div>

        <div class="testimonial-wrapper-02 testimonial-active-02">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- Single Testimonial Start -->
                        <div class="single-testimonial-02">
                            <div class="testimonial-text">
                                <p>Campus Bull are great team of professional to work with. Even when i got the seat then
                                    also
                                    Varun insisted me personally to go for document verification in Karnataka which turned
                                    to be the best decision of my life.</p>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-quote">
                                    <img src="{{ asset('public/front_css/assets/images/user.jpg') }}" alt="Author">
                                </div>
                                <div class="meta-content">
                                    <h5 class="name">Shailesh Ravat</h5>
                                    <p class="designation">(M.D Medicine)</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial End -->
                    </div>
                    <div class="swiper-slide">
                        <!-- Single Testimonial Start -->
                        <div class="single-testimonial-02">
                            <div class="testimonial-text">
                                <p>Campus Bull are great team of professional to work with. Even when i got the seat then
                                    also
                                    Varun insisted me personally to go for document verification in Karnataka which turned
                                    to be the best decision of my life.</p>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-quote">
                                    <img src="{{ asset('public/front_css/assets/images/user.jpg') }}" alt="Author">
                                </div>
                                <div class="meta-content">
                                    <h5 class="name">Shailesh Ravat</h5>
                                    <p class="designation">(M.D Medicine)</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial End -->
                    </div>
                    <div class="swiper-slide">
                        <!-- Single Testimonial Start -->
                        <div class="single-testimonial-02">
                            <div class="testimonial-text">
                                <p>Campus Bull are great team of professional to work with. Even when i got the seat then
                                    also
                                    Varun insisted me personally to go for document verification in Karnataka which turned
                                    to be the best decision of my life.</p>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-quote">
                                    <img src="{{ asset('public/front_css/assets/images/user.jpg') }}" alt="Author">
                                </div>
                                <div class="meta-content">
                                    <h5 class="name">Shailesh Ravat</h5>
                                    <p class="designation">(M.D Medicine)</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial End -->
                    </div>
                    <div class="swiper-slide">
                        <!-- Single Testimonial Start -->
                        <div class="single-testimonial-02">
                            <div class="testimonial-text">
                                <p>Campus Bull are great team of professional to work with. Even when i got the seat then
                                    also
                                    Varun insisted me personally to go for document verification in Karnataka which turned
                                    to be the best decision of my life.</p>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-quote">
                                    <img src="{{ asset('public/front_css/assets/images/user.jpg') }}" alt="Author">
                                </div>
                                <div class="meta-content">
                                    <h5 class="name">Shailesh Ravat</h5>
                                    <p class="designation">(M.D Medicine)</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial End -->
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
