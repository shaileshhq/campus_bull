@extends('frontend.layouts.front_app')
@section('content')
         <!-- Counter Start -->
         <div class="section counter-section section counter-section mb-5">
            <div class="container mt-5" style="margin-bottom:100px;">
               <div class="neet-pg-layout">
                  <div class="shadow custom-accordion-border card">
                     <div class="card-body">
                        <!-- End State -->
                             <div class="feature-category-body">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a href=" https://drive.google.com/drive/folders/1jSG-ktqt5TtW3DpvCEFWyUlDF4FHKI53?usp=sharing">
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">Dematology</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1BZykbggGrDWKLx7P_yjG7U9gatUnpcJ_?usp=sharing" @endif  >
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Radiologies</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                   
                                     <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1EjJYk1Bpay3oeuo0FdPh44xFy4CSgEUH?usp=sharing" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Anaesthesia</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1U5T4oFDz_oKeyfMrSd4HANwkYVubFibs?usp=sharing" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif ENT</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1Qiu6qaOPi63LjXRpCf-gLAYpWou9qgLE?usp=sharing" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Emergency Medicines</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    
                                    
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1EnPIZIYLxie9T2AQenR5wN5mPeSita7i?usp=sharing" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Orthopedices</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1705usWCMFJoeX_8_E9pnDL2GZpGVVyEw?usp=sharing" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Paediatrices</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1UltHKYafF0Q_ctT8Ez71wOlOQgL1BbG8?usp=sharing" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Pathologies</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                   
                                  
                                  <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/12QVjtcLCSxB5KHWwQNuOpQRTfLzSVtjx?usp=sharing" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Psychiatries</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                  
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1ILRvsZv30KyBExkmvU8LeXBy1w5GVEsB?usp=sharing" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Respiratory Medicines</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1WShLwHLfdZ6gfkfMAWX_S2aLCOI9MnWJ?usp=sharing" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Ophthalmologies</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                  
                                     <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1s_-4Y46izDWylT2bEDoB_i148HD_SO04?usp=sharing" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Obstrtrics And Gynaecologies</span>
                                            </a>
                                        </div>
                
                                </div>
                                  </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endsection


















