@extends('frontend.layouts.front_app')
@section('content')
    <!-- Page Banner Start -->
    <div class="section page-banner-section bg-color-1">
        <div class="container">
            <!-- Page Banner Content Start -->
            <div class="page-banner-content">
                <h2 class="title">Course</h2>
                <ul class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Course </li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner End -->
    <div class="section section-padding">
        <div class="container">
            <!-- About Wrapper Start -->
            <div class="about-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-6">
                        <!-- Single Courses Start -->
                        <div class="single-course">
                            <div class="courses-content">
                                <div class="top-metas">
                                    <a class="tag">Full Time</a>
                                </div>
                                <h1 class="title"><a href="#">B.Sc Computer Science</a></h1>
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
            <!-- About Wrapper End -->
        </div>
    </div>
@endsection
