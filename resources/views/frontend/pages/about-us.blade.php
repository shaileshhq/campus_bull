@extends('frontend.layouts.front_app')
@section('content')
        <!-- Page Banner Start -->
        <div class="section page-banner-section bg-color-1">
         <div class="container">
             <!-- Page Banner Content Start -->
             <div class="page-banner-content">
                 <h2 class="title">About Us</h2>
                 <ul class="breadcrumb justify-content-center">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active">About Us </li>
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
               <div class="col-lg-6">
                   <!-- About Images Start -->
                   <div class="about-images">
                     <div class="">
                        <div class="image">
                           <img src="{{asset('public/front_css/assets/images/hero-1.png')}}" alt="Hero">
                        </div>
                     </div>
                   </div>
                   <!-- About Images End -->
               </div>
               <div class="col-lg-6">
                   <!-- About Images Start -->
                   <div class="about-content">
                       <h3 class="title">Campus Bull</h3>
                       <p>We at Campus Bull(Campus Bull), helps students in getting the besest posible college in their desied Branch. We try to make the counselling process very smooth for each student, so that they can take the most imortant decision of choosing their college easily.  </p>
                       {{-- <ul>
                           <li>Get access to 4,000+ of our top courses </li>
                           <li>Popular topics to learn now </li>
                           <li>Find the right instructor for you </li>
                       </ul> --}}
                     </div>
                   <!-- About Images End -->
               </div>
           </div>
       </div>
       <!-- About Wrapper End -->
   </div>
</div>

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
                            <div class="testimonial-thumb">
                                <img src="{{ asset('public/front_css/assets/images/user.jpg') }}" alt="Author">
                            </div>
                            <div class="testimonial-text">
                                <p>Campus Bull are great team of professional to work with. Even when i got the seat then
                                    also
                                    Varun insisted me personally to go for document verification in Karnataka which turned
                                    to be the best decision of my life.</p>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-quote">
                                    <i class="flaticon-left-quotes-sign"></i>
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
                            <div class="testimonial-thumb">
                                <img src="{{ asset('public/front_css/assets/images/user.jpg') }}" alt="Author">
                            </div>
                            <div class="testimonial-text">
                                <p>Campus Bull are great team of professional to work with. Even when i got the seat then
                                    also
                                    Varun insisted me personally to go for document verification in Karnataka which turned
                                    to be the best decision of my life.</p>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-quote">
                                    <i class="flaticon-left-quotes-sign"></i>
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
                            <div class="testimonial-thumb">
                                <img src="{{ asset('public/front_css/assets/images/user.jpg') }}" alt="Author">
                            </div>
                            <div class="testimonial-text">
                                <p>Campus Bull are great team of professional to work with. Even when i got the seat then
                                    also
                                    Varun insisted me personally to go for document verification in Karnataka which turned
                                    to be the best decision of my life.</p>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-quote">
                                    <i class="flaticon-left-quotes-sign"></i>
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
                            <div class="testimonial-thumb">
                                <img src="{{ asset('public/front_css/assets/images/user.jpg') }}" alt="Author">
                            </div>
                            <div class="testimonial-text">
                                <p>Campus Bull are great team of professional to work with. Even when i got the seat then
                                    also
                                    Varun insisted me personally to go for document verification in Karnataka which turned
                                    to be the best decision of my life.</p>
                            </div>
                            <div class="testimonial-meta">
                                <div class="testimonial-quote">
                                    <i class="flaticon-left-quotes-sign"></i>
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