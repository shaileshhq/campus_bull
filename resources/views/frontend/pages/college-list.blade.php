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
                        @foreach ($collages as $key=>$value)
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
                                                            class="fa fa-map-marker" aria-hidden="true"></i>{{$value->address}}</span><br>
                                                    <div class="block_border"></div><span>{{$value->type}}</span>
                                                </div>
                                                <div class="tupple_right_block d-none d-md-block">
                                                    <h3 class="college_name"
                                                        title="AVMC Puducherry - Aarupadai Veedu Medical College and Hospital, Puducherry"
                                                        data-testid="college_name"><a href="{{route('college_details',$value->id)}}">{{$value->name}}</a></h3>
                                                    <div
                                                        class="content_block d-none d-md-block d-md-flex flex-row justify-content-between">
                                                        <div><span><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                            {{$value->address}}</span> <span>{{$value->type}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="general_text" href="#">
                                                @foreach($value->course_id as $course_id)
                                                    {{App\Models\Course::find($course_id)->name}} ,
                                                @endforeach
                                            </a>
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
                        @endforeach
                       
                        {{$collages->links()}}

                    </div>

                    <div class="col-lg-4">
                        <!-- Sidebar Wrapper Start -->
                        <div class="sidebar-wrap-02">
                            <h3 class="title">Filters By</h3> <hr/>
                            <!-- Sidebar Wrapper Start -->
                            <div class="sidebar-widget-02">
                                <h3 class="widget-title">Exam</h3>

                                <div class="widget-checkbox">
                                    <ul class="checkbox-list">
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                            <label class="form-check-label" for="checkbox1">Neet PG</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                                            <label class="form-check-label" for="checkbox2">Neet MDS</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Wrapper End -->

                            <!-- Sidebar Wrapper Start -->
                            <div class="sidebar-widget-02">
                                <h3 class="widget-title">OWNERSHIP</h3>

                                <div class="widget-checkbox">
                                    <ul class="checkbox-list">
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                                            <label class="form-check-label" for="checkbox3">Private</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox4">
                                            <label class="form-check-label" for="checkbox4">Government</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Wrapper End -->

                            <!-- Sidebar Wrapper Start -->
                            <div class="sidebar-widget-02">
                                <h3 class="widget-title">FEE</h3>

                                <div class="widget-checkbox">
                                    <ul class="checkbox-list">
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox6">
                                            <label class="form-check-label" for="checkbox6">Up to 1 Lakh</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox7">
                                            <label class="form-check-label" for="checkbox7">Up to 2 Lakh</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox8">
                                            <label class="form-check-label" for="checkbox8">Up to 3 Lakh</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Wrapper End -->

                            <!-- Sidebar Wrapper Start -->
                            <div class="sidebar-widget-02">
                                <h3 class="widget-title">State</h3>

                                <div class="widget-checkbox">
                                    <ul class="checkbox-list">
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox12">
                                            <label class="form-check-label" for="checkbox12">Uttar Peadesh</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox14">
                                            <label class="form-check-label" for="checkbox14">Kolkata</label>
                                        </li>
                                        <li class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkbox15">
                                            <label class="form-check-label" for="checkbox15">Mumbai</label>
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
