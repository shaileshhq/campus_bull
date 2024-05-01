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
                                            <a href="https://drive.google.com/drive/folders/1BUH8Ch1MUrjVix-cyDwpwIDa9_0Q_WFH">
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">Dematology</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1J6y__5ZwjdTbgdO7Gz1vv6bcAf3Uz5C4" @endif  >
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Radiologies</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                   
                                     <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1FMFiq6NdB8g9j-u-xTd66s5iXVQuTQXI" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Anaesthesia</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1PJ27SwEV-MoMmDfaWZ1Dglk7rw07ETiY" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif ENT</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1lJze9mciljr-lTnFS0WCTl2QJESUhJuz" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Emergency Medicines</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    
                                    
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1MTeQkm9LGX4x-2wQVJidXUnfmtyNgdEo" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Orthopedices</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1Ysh0uOOBXWweaNgRPVeHyLlGJK5eS7uj" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Paediatrices</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1Q00UFdBfbXubgH4QVDaaXhcDrD-SsXEd" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Pathologies</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                   
                                  
                                  <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1VFmy-61TlzsHdSaQro91oFl3pCZLzULy" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Psychiatries</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                  
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1kkn8Rt7Hmr2NFZvxCx7nisYuBP2CkKNG" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Resperatory Medicines</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/14cg54zvs0x7kSg__v48xFkQsgE0zkOU1" @endif>
                                                <img class="item-icon" src="{{asset('public/front_css/assets/images/icon-18.png')}}" alt="">
                                                <span class="title">@if(empty(optional(Auth::user()->payment)->user_id)) <i class="fa fa-lock"></i> @else @endif Ophthalmologies</span>
                                            </a>
                                        </div>
                                        <!-- Category Item End -->
                                    </div>
                                  
                                     <div class="col-lg-3 col-sm-6 col-xs-6">
                                        <!-- Category Item Start -->
                                        <div class="single-category-item">
                                            <a @if(empty(optional(Auth::user()->payment)->user_id)) href="{{route('subscription_plans')}}" @else href="https://drive.google.com/drive/folders/1zbUoG9DlOF1YPDoidciL5fBdFb2Hs0bg" @endif>
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


















