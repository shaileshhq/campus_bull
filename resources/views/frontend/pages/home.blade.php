@extends('frontend.layouts.front_app')
@section('content')


<div class="section section-padding mb-5">
   <div class="container mb-5">
       <div class="row justify-content-between">
           <div class="col-lg-3 mb-3">
               <!-- Sidebar Wrapper Start -->
               <div class="sidebar-details-wrap">
                   <!-- Sidebar Details Video Description Start -->
                   <div class="sidebar-details-video-description">
                       <div class="sidebar-video text-center">
                           @if(empty(Auth::user()->profile_img))
                             <img src="{{ asset('public/front_css/assets/images/profile.png')}}" alt="User Profile">
                           @else
                           <img src="{{ asset('public/front_css/assets/images/'.Auth::user()->id.'/'.Auth::user()->customer->profile_image) }}" alt="User Profile">
                           @endif
                           <h6 class="mt-1">{{Auth::user()->name}}</h6>
                           <p class="mt-1">(Varanasi)</p>
                       </div>
                       <div class="sidebar-description">
                        <ul class="description-list">
                            <li><a href="#"><i class="fa fa-file-o"></i> NEET Rank</a></li>
                            <li><a href="#"><i class="fa fa-file-o"></i> Rank Predictor </a></li>
                            <li><a href="#"><i class="fa fa-file-o"></i> Mock Test </a></li>
                            <li><a href="#"><i class="fa fa-file-o"></i> Preffered college </a></li>
                            <li><a href="#"><i class="fa fa-file-o"></i> My Guide Expert Counselling </a></li>
                        </ul>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-xl-6 col-lg-6">

            <div class="slider-form mt-0 mb-3">
               <form action="#">
                   <select class="custom-select">
                       <option>Select Course</option>
                       <option value="NEET UG">NEET UG</option>
                       <option value="NEET PG">NEET PG</option>
                     </select>
                   <input type="text" placeholder="Rank...">
                   @if(Auth::check())
                     <a  @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="{{route('student_report')}}" @endif class="btn btn-primary btn-hover-heading-color" ><i class="fa fa-search"></i></a>
                    @else
                    <a href="{{route('user-login')}}"  class="btn btn-primary btn-hover-heading-color">  <i class="fa fa-search"></i></a>
                    @endif
               </form>
           </div>
            <div class="border-0 shadow card">
               <div class="card-body">
                  <h4 class="text-theme text-center mb-3">
                     <i class="fa fa-calendar-o" aria-hidden="true"></i> News & Events
                  </h4>
                  <hr/>
                  <!-- Pricing Wrapper End -->
                  <div class="pricing-wrapper">
                     <ul class="nav pricing-btn">
                        <li><button class="active" data-bs-toggle="tab" data-bs-target="#past">All Event</button></li>
                        <li><button data-bs-toggle="tab" data-bs-target="#upcoming">Upcoming</button></li>
                        <li><button data-bs-toggle="tab" data-bs-target="#today">Previous</button></li>
                       
                     </ul>
                     <div class="tab-content hg-ovrflw">
                        <div class="tab-pane fade show active" id="past">
                           <div class="table-responsive">
                              <table role="table" class="table">
                                 <thead>
                                    <tr>
                                       <th>Event Name</th>
                                       <th>Start Date </th>
                                       <th>End Date </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @if(count(App\Models\SchoolUpcomingEvent::where('delete_status', 0)->get())>0)
                                    @foreach(App\Models\SchoolUpcomingEvent::where('delete_status', 0)->get() as $data)
                                    <tr>
                                       <td> {{$data->event_name}} </td>
                                       <td>{{date('d-m-Y', $data->start_date)}}</td>
                                       <td>{{date('d-m-Y', $data->end_date)}}</td>
                                    </tr>
                                   @endforeach
                                   @else
                                   <tr>
                                    <td colspan="10" class="text-center text-info">Opps!! There Are No Data Found..</td>
                                  </tr>
                                   @endif
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        
                        <div class="tab-pane fade" id="upcoming">
                           <div class="table-responsive">
                              <table role="table" class="table">
                                 <thead>
                                    <tr>
                                       <th>Event Name</th>
                                       <th>Start Date </th>
                                       <th>End Date </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @if(count(App\Models\SchoolUpcomingEvent::where('start_date', '>', time())->where('delete_status', 0)->get())>0)
                                    @foreach(App\Models\SchoolUpcomingEvent::where('start_date', '>', time())->where('delete_status', 0)->get() as $data)
                                    <tr>
                                       <td> {{$data->event_name}} </td>
                                       <td>{{date('d-m-Y', $data->start_date)}}</td>
                                       <td>{{date('d-m-Y', $data->end_date)}}</td>
                                    </tr>
                                   @endforeach
                                   @else
                                   <tr>
                                    <td colspan="10" class="text-center text-info">Opps!! There Are No Data Found..</td>
                                  </tr>
                                   @endif

                                 </tbody>
                              </table>
                           </div>
                        </div>

                        <div class="tab-pane fade" id="today">
                           <div class="table-responsive">
                              <table role="table" class="table">
                                 <thead>
                                    <tr>
                                       <th>Event Name</th>
                                       <th>Start Date </th>
                                       <th>End Date </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @if(count(App\Models\SchoolUpcomingEvent::where('end_date', '<', time())->where('delete_status', 0)->get())>0)
                                    @foreach(App\Models\SchoolUpcomingEvent::where('end_date', '<', time())->where('delete_status', 0)->get() as $data)
                                    <tr>
                                       <td> {{$data->event_name}} </td>
                                       <td>{{date('d-m-Y', $data->start_date)}}</td>
                                       <td>{{date('d-m-Y', $data->end_date)}}</td>
                                    </tr>
                                   @endforeach
                                   @else
                                   <tr>
                                    <td colspan="10" class="text-center text-info">Opps!! There Are No Data Found..</td>
                                  </tr>
                                   @endif

                                 </tbody>
                              </table>
                           </div>
                        </div>

                     </div>
                  </div>
                  <!-- Pricing Wrapper End -->
               </div>
            </div>
           </div>
           <div class="col-lg-3 mb-3">
            
                                <!-- Sidebar Widget Start -->
                                <div class="sidebar-widgets">
                                 <h3 class="widget-title" style="font-weight: 600;">Counselling Support</h3>

                                 <!-- Widget Post Start -->
                                 <div class="widget-post">

                                     <!-- Single Min Post Start -->
                                     <div class="single-mini-post">
                                         <div class="mini-post-image">
                                             <a href="#"><img src="{{ asset('public/front_css/assets/images/M_S_Ramaiah_Medical_College_Bangalore.jpg')}}" alt="M_S_Ramaiah_Medical_College_Bangalore"></a>
                                         </div>
                                         <div class="mini-post-content">
                                             <h5 class="title"><a href="#">MS Ramaiah Medical college Bengaluru</a></h5>
                                             <div class="rating">
                                                <div class="rating-star">
                                                    <div class="rating-active" style="width: 100%;"></div>
                                                </div>
                                            </div>
                                         </div>
                                     </div>
                                     <!-- Single Min Post End -->

                                     <!-- Single Min Post Start -->
                                     <div class="single-mini-post">
                                       <div class="mini-post-image">
                                           <a href="#"><img src="{{ asset('public/front_css/assets/images/M_S_Ramaiah_Medical_College_Bangalore.jpg')}}" alt="M_S_Ramaiah_Medical_College_Bangalore"></a>
                                       </div>
                                       <div class="mini-post-content">
                                           <h5 class="title"><a href="#">MS Ramaiah Medical college Bengaluru</a></h5>
                                           <div class="rating">
                                             <div class="rating-star">
                                                 <div class="rating-active" style="width: 100%;"></div>
                                             </div>
                                         </div>
                                       </div>
                                   </div>
                                     <!-- Single Min Post End -->

                                     <!-- Single Min Post Start -->
                                     <div class="single-mini-post">
                                       <div class="mini-post-image">
                                           <a href="#"><img src="{{ asset('public/front_css/assets/images/M_S_Ramaiah_Medical_College_Bangalore.jpg')}}" alt="M_S_Ramaiah_Medical_College_Bangalore"></a>
                                       </div>
                                       <div class="mini-post-content">
                                           <h5 class="title"><a href="#">MS Ramaiah Medical college Bengaluru</a></h5>
                                           <div class="rating">
                                             <div class="rating-star">
                                                 <div class="rating-active" style="width: 100%;"></div>
                                             </div>
                                         </div>
                                       </div>
                                   </div>
                                     <!-- Single Min Post End -->

                                 </div>
                                 <!-- Widget Post End -->

                             </div>
                             <!-- Sidebar Widget End -->
           </div>
       </div>


   </div>
</div>

      <!-- Counter Start -->
      <div class="section counter-section section counter-section mb-5">
         <div class="container mt-5 mb-5">
            <!-- Counter Wrapper Start -->
            <div class="counter-wrapper">
               <div class="shadow custom-accordion-border card mb-3">
                  <div class="welcome-background card-body">
                     <div class="mb-4 welcome-background">
                        <div class="text-center col-md-12">
                           <h3 class="mb-3">Hello <b style="color:#b70000;">{{Auth::user()->name}}</b>. You’ll get everything related to counselling</h3>
                        </div>
                        <div class="row">
                           <div class="col-md-8">
                              <ul class="pd">
                                 <li>Now as you are here, so don’t worry just trust on us and you’ll definitely thank us later.</li>
                                 <li>Here, you’ll get every details and updates related to counselling under announcement section in your dashboard.</li>
                                 <li>If you have any doubts or queries you can join or telegram group.</li>
                              </ul>
                              <div class="slider-btn mt-3 d-flex">
                                 <a href="#" target="_blank"
                                    class="btn btn-blue btn-hover-heading-color me-2"> <i class="fa fa-telegram"
                                       aria-hidden="true"></i> Join Telegram</a>
                                 <a href="#" target="_blank"
                                    class="btn btn-success btn-hover-heading-color me-2"> <i class="fa fa-whatsapp"
                                       aria-hidden="true"></i> Help Whatsapp</a>
                                 <a href="#" target="_blank"
                                    class="btn btn-danger btn-hover-heading-color"> <i class="fa fa-youtube"
                                       aria-hidden="true"></i> Youtube</a>
                           </div>
                           </div>
                           <div class="col-md-4"><img src="{{asset('public/front_css/assets/images/neet-home-img.jpg')}}" class="home-page-img"></div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="card">
                  <div class="row mb-5">
                     <div class="col-md-6">
                        <div class="card shadow">
                           <div class="card-body">
                              <h4 class="text-center mb-3">
                                 <i class="fa fa-bullhorn" aria-hidden="true"></i> Announcements
                              </h4>
                              <hr/>
                              <form class="">
                                 <div class="row">
                                    <div class="header-search">
                              <form action="#">
                              <input type="text" placeholder="Search Announcements">
                              <button><i class="flaticon-loupe"></i></button>
                              </form>
                              </div>
                              </div>
                              </form>
                              <div class="home-cards">
                                 <div class="border-0 card">
                                    <div class="card-body p-0 mt-3">
                                       <div class="table-responsive">
                                          <table class="table">
                                             <thead>
                                                <tr>
                                                   <th>News </th>
                                                   <th>Details </th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                             @if(count(App\Models\SchoolNotice::where('delete_status', 0)->get()) > 0 )
                                                @foreach(App\Models\SchoolNotice::where('delete_status', 0)->get() as $data)
                                                <tr>
                                                   <td> {{$data->title}} </td>
                                                   <td> {{$data->description}} </td>
                                                </tr>
                                               @endforeach
                                               @else
                                                 <tr>
                                                   <td colspan="10" class="text-center text-info">Opps!! There Are No Data Found..</td>
                                                 </tr>
                                               @endif
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="border-0 shadow card">
                           <div class="card-body">
                              <h4 class="text-theme text-center mb-3">
                                 <i class="fa fa-calendar-o" aria-hidden="true"></i> Events
                              </h4>
                              <hr/>
                              <!-- Pricing Wrapper End -->
                              <div class="pricing-wrapper">
                                 <ul class="nav pricing-btn">
                                    <li><button class="active" data-bs-toggle="tab" data-bs-target="#past">All Event</button></li>
                                    <li><button data-bs-toggle="tab" data-bs-target="#upcoming">Upcoming</button></li>
                                    <li><button data-bs-toggle="tab" data-bs-target="#today">Previous</button></li>
                                   
                                 </ul>
                                 <div class="tab-content hg-ovrflw">
                                    <div class="tab-pane fade show active" id="past">
                                       <div class="table-responsive">
                                          <table role="table" class="table">
                                             <thead>
                                                <tr>
                                                   <th>Event Name</th>
                                                   <th>Start Date </th>
                                                   <th>End Date </th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                @if(count(App\Models\SchoolUpcomingEvent::where('delete_status', 0)->get())>0)
                                                @foreach(App\Models\SchoolUpcomingEvent::where('delete_status', 0)->get() as $data)
                                                <tr>
                                                   <td> {{$data->event_name}} </td>
                                                   <td>{{date('d-m-Y', $data->start_date)}}</td>
                                                   <td>{{date('d-m-Y', $data->end_date)}}</td>
                                                </tr>
                                               @endforeach
                                               @else
                                               <tr>
                                                <td colspan="10" class="text-center text-info">Opps!! There Are No Data Found..</td>
                                              </tr>
                                               @endif
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    
                                    <div class="tab-pane fade" id="upcoming">
                                       <div class="table-responsive">
                                          <table role="table" class="table">
                                             <thead>
                                                <tr>
                                                   <th>Event Name</th>
                                                   <th>Start Date </th>
                                                   <th>End Date </th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                @if(count(App\Models\SchoolUpcomingEvent::where('start_date', '>', time())->where('delete_status', 0)->get())>0)
                                                @foreach(App\Models\SchoolUpcomingEvent::where('start_date', '>', time())->where('delete_status', 0)->get() as $data)
                                                <tr>
                                                   <td> {{$data->event_name}} </td>
                                                   <td>{{date('d-m-Y', $data->start_date)}}</td>
                                                   <td>{{date('d-m-Y', $data->end_date)}}</td>
                                                </tr>
                                               @endforeach
                                               @else
                                               <tr>
                                                <td colspan="10" class="text-center text-info">Opps!! There Are No Data Found..</td>
                                              </tr>
                                               @endif

                                             </tbody>
                                          </table>
                                       </div>
                                    </div>

                                    <div class="tab-pane fade" id="today">
                                       <div class="table-responsive">
                                          <table role="table" class="table">
                                             <thead>
                                                <tr>
                                                   <th>Event Name</th>
                                                   <th>Start Date </th>
                                                   <th>End Date </th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                @if(count(App\Models\SchoolUpcomingEvent::where('end_date', '<', time())->where('delete_status', 0)->get())>0)
                                                @foreach(App\Models\SchoolUpcomingEvent::where('end_date', '<', time())->where('delete_status', 0)->get() as $data)
                                                <tr>
                                                   <td> {{$data->event_name}} </td>
                                                   <td>{{date('d-m-Y', $data->start_date)}}</td>
                                                   <td>{{date('d-m-Y', $data->end_date)}}</td>
                                                </tr>
                                               @endforeach
                                               @else
                                               <tr>
                                                <td colspan="10" class="text-center text-info">Opps!! There Are No Data Found..</td>
                                              </tr>
                                               @endif

                                             </tbody>
                                          </table>
                                       </div>
                                    </div>

                                 </div>
                              </div>
                              <!-- Pricing Wrapper End -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Counter Wrapper End -->
            </div>
         </div>
         <!-- Counter End -->
     </div>
     @endsection
        