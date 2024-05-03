@extends('frontend.layouts.front_app')
@section('content')
    <!-- Course List Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Course List Wrapper Start -->
            <div class="course-list-wrapper">
                <div class="row flex-row-reverse">
                    <div class="col-lg-8">
                        <!-- Course List Start -->
                        <div class="course-list-items">
                            <!-- Course List Start -->
                            <div class="card_block">
                                <div class="tupple">
                                    <div class="d-md-flex justify-content-between">
                                        <div class="left_side_tupple">
                                            <div class="tupple_top_block">
                                                <div class="image_block mb-2">
                                                    <a href="#">
                                                        <img class="border_radius5" quality="100"
                                                            src="https://cache.careers360.mobi/media/presets/60X60/colleges/social-media/logo/Logo_of_Aarupadai_Veedu_Medical_College_and_Hospital_Puducherry_Logo.webp"
                                                            alt="AVMC Puducherry" width="62" height="62">
                                                    </a>
                                                </div>
                                                <div class="content_block d-block d-md-none"><span><i
                                                            class="fa fa-map-marker" aria-hidden="true"></i>Kirumampakkam,
                                                        Puducherry</span><br>
                                                    <div class="block_border"></div><span>Private</span>
                                                </div>
                                                <div class="tupple_right_block d-none d-md-block">
                                                    <h3 class="college_name"
                                                        title="AVMC Puducherry - Aarupadai Veedu Medical College and Hospital, Puducherry"
                                                        data-testid="college_name"><a href="#">AVMC
                                                            Puducherry - Aarupadai Veedu Medical College and Hospital,
                                                            Puducherry</a></h3>
                                                    <div
                                                        class="content_block d-none d-md-block d-md-flex flex-row justify-content-between">
                                                        <div><span><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                                Kirumampakkam, Puducherry</span> <span>Private</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="general_text" href="#">MD General Medicine</a>
                                            <div class="snippet_block">
                                                <ul class="snippet_list">
                                                    <li><span class="gray_text">Exams : </span>
                                                        <a class="exam_black_link" href="#">NEET PG</a>
                                                    </li>
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
                                                    <li><a href="#">Courses</a></li>
                                                    <li><a href="#">Facilities</a></li>
                                                    <li><a href="#">QnA</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course List End -->

                        </div>
                        <!-- Course List End -->

                        <!-- Page Pagination Start -->
                        <div class="page-pagination">
                            <ul class="pagination justify-content-center">
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a class="active" href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><span>...</span></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Page Pagination End -->

                    </div>
                    <div class="col-lg-4">
                        <!-- Sidebar Wrapper Start -->
                        <div class="sidebar-wrap-02">
                            <h3 class="title">Filters By</h3> <hr/>
                            <!-- Sidebar Wrapper Start -->
                            <div class="sidebar-widget-02">
                                <h3 class="widget-title">Type of Courses</h3>

                                <div class="widget-checkbox">
                                    <ul class="checkbox-list">
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                            <label class="form-check-label" for="checkbox1">Free (11)</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                                            <label class="form-check-label" for="checkbox2">Paid (11)</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Wrapper End -->

                            <!-- Sidebar Wrapper Start -->
                            <div class="sidebar-widget-02">
                                <h3 class="widget-title">Categories</h3>

                                <div class="widget-checkbox">
                                    <ul class="checkbox-list">
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                                            <label class="form-check-label" for="checkbox3">Technology (11)</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox4">
                                            <label class="form-check-label" for="checkbox4">Business (07)</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox5">
                                            <label class="form-check-label" for="checkbox5">Development (11)</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Wrapper End -->

                            <!-- Sidebar Wrapper Start -->
                            <div class="sidebar-widget-02">
                                <h3 class="widget-title">Instructor</h3>

                                <div class="widget-checkbox">
                                    <ul class="checkbox-list">
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox6">
                                            <label class="form-check-label" for="checkbox6">Jimmy Jason (11)</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox7">
                                            <label class="form-check-label" for="checkbox7">Harnold (07)</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox8">
                                            <label class="form-check-label" for="checkbox8">Eric Madny (11)</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Wrapper End -->

                            <!-- Sidebar Wrapper Start -->
                            <div class="sidebar-widget-02">
                                <h3 class="widget-title">Ratings</h3>

                                <div class="widget-checkbox">
                                    <ul class="checkbox-list">
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox9">
                                            <label class="form-check-label" for="checkbox9">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 100%;"></div>
                                                </div> (4.5)
                                            </label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox10">
                                            <label class="form-check-label" for="checkbox10">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 60%;"></div>
                                                </div> (3.5)
                                            </label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox11">
                                            <label class="form-check-label" for="checkbox11">
                                                <div class="rating">
                                                    <div class="rating-on" style="width: 40%;"></div>
                                                </div> (2)
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Wrapper End -->

                            <!-- Sidebar Wrapper Start -->
                            <div class="sidebar-widget-02">
                                <h3 class="widget-title">Lavel</h3>

                                <div class="widget-checkbox">
                                    <ul class="checkbox-list">
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox12">
                                            <label class="form-check-label" for="checkbox12">Beginner (11)</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox13">
                                            <label class="form-check-label" for="checkbox13">Advanced (07)</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Wrapper End -->

                        </div>
                        <!-- Sidebar Wrapper End -->
                    </div>
                </div>
            </div>
            <!-- Course List Wrapper End -->

        </div>
    </div>
    <!-- Course List End -->
@endsection
