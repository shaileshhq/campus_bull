@extends('frontend.layouts.front_app')
@section('content')
<style>
    .subNav .nav-tabs {
      border-bottom: 0;
    }
    .subNav .nav-tabs .nav-link.active {
    color: #eb5353;
    background-color: transparent;
    border: 0;
    font-weight: 600
    }
    .nav-tabs .nav-link:hover {
        border: 0;
    }
    .nav-tabs .nav-link:focus {
    border: 0 !important;
    }
    .nav-tabs .nav-link{
        border: 0;
    }
</style>
    <!-- Page Banner Start -->
    <div class="section page-banner-section bg-color-1">
        <img class="shape-4" src="{{ asset('public/front_css/assets/images/shape/shape-21.png')}}" alt="shape">
        <img class="shape-5" src="{{ asset('public/front_css/assets/images/shape/shape-21.png')}}" alt="shape">
        <div class="container">
            <!-- Course Details Banner Content Start -->
            <div class="course-details-banner-content mb-4">
                <h2 class="title">AVMC Puducherry - Aarupadai Veedu Medical College and Hospital, Puducherry</h2>
                <div><span><i class="fa fa-map-marker" aria-hidden="true"></i>
                    Kirumampakkam, Puducherry</span> | <b>Private</b>
                </div>
                    <div class="course-details-meta">
                    <div class="meta-action">
                        <p class="label">Government</p>
                    </div>
                    <div class="meta-action">
                        <p class="label">Institute of Eminence</p>
                    </div>
                    <div class="meta-action">
                        <p class="label">Institute of National Importance</p>
                    </div>
                    <div class="meta-action">
                        <p class="label">NIRF Rank 1st (Overall)</p>
                    </div>
                </div>

                <div class="enqry">
                    <a data-bs-toggle="modal" data-bs-target="#myModal1" class="btn btn-primary btn-hover-heading-color"><i class="fa fa-envelope"></i> Enquiry Now</a>
                </div>
            </div>
            <!-- Course Details Banner Content End -->
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Course List Start -->
    <div class="section subNav">
        <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#overview">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#courses-and-fees">Courses & Fees</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#cut-offs">Cut-offs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#admissions">Admissions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#placements">Placements</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#reviews">Reviews</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#facilities">Facilities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#ques-and-ans">Ques. & Ans</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#notable-alumni">Notable Alumni</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#colleges-and-departments">Colleges and Departments</a>
              </li>
            </ul>
        </div>
        </div>
            <!-- Tab panes -->
            <div class="container mb-4">
            <div class="tab-content border-0 shadow card p-3">
              <div id="overview" class="container tab-pane active">
                <h3>Overview</h3>
                <p> Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>
              </div>
              <div id="courses-and-fees" class="container tab-pane fade">
                <h3>Courses & Fees</h3>
              </div>
              <div id="cut-offs" class="container tab-pane fade">
                <h3>Cut-offs</h3>
              </div>
              <div id="admissions" class="container tab-pane fade">
                <h3>Admissions</h3>
              </div>
              <div id="cut-offs" class="container tab-pane fade">
                <h3>Cut-offs</h3>
              </div>
              <div id="placements" class="container tab-pane fade">
                <h3>Placements</h3>
              </div>
              <div id="reviews" class="container tab-pane fade">
                <h3>Reviews</h3>
              </div>
              <div id="facilities" class="container tab-pane fade">
                <h3>Facilities</h3>
              </div>
              <div id="ques-and-ans" class="container tab-pane fade">
                <h3>Ques. & Ans</h3>
              </div>
              <div id="notable-alumni" class="container tab-pane fade">
                <h3>Notable Alumni</h3>
              </div>
              <div id="colleges-and-departments" class="container tab-pane fade">
                <h3>Colleges and Departments</h3>
              </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Course List End -->
@endsection
