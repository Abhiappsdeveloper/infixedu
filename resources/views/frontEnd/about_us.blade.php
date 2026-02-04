@extends('backEnd.master')
@section('title')
@lang('front_settings.about_page')
@endsection
@section('mainContent')
    <section class="sms-breadcrumb mb-20">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <h1>@lang('front_settings.about_page')</h1>
                <div class="bc-pages">
                    <a href="{{route('dashboard')}}">@lang('common.dashboard')</a>
                    <a href="#"> @lang('front_settings.front_settings')</a>
                    <a href="#">@lang('front_settings.about_page')</a>
                </div>
            </div>
        </div>
    </section>

    @if($about_us)
    <div class="modal fade admin-query" id="showimageModal">
        <div class="modal-dialog modal-dialog-centered max_modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">@lang('front_settings.about_us_details') </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body p-0">
                    <div class="container student-certificate">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <div class="mt-20">
                                    <section class="container box-1420">
                                        <div class="banner-area" style="background: linear-gradient(0deg, rgba(124, 50, 255, 0.6), rgba(199, 56, 216, 0.6)), url({{$about_us->image != ""? $about_us->image : '../img/client/common-banner1.jpg'}}) no-repeat center;background-size: cover">
                                            <div class="banner-inner">
                                                <div class="banner-content">
                                                    <h2 style="color: whitesmoke">{{$about_us->title}}</h2>
                                                    <p style="color: whitesmoke">{{$about_us->description}}</p>
                                                    <a class="primary-btn fix-gr-bg semi-large" href="{{$about_us->button_url}}">{{$about_us->button_text}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="mt-10 row">
                                        <div class="col-md-6">
                                            <div class="academic-item">
                                                <div class="academic-img">
                                                    <img class="img-fluid" src="{{asset($about_us->main_image)}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="academic-text mt-30">
                                                <h4>
                                                    {{$about_us->main_title}}
                                                </h4>
                                                <p>
                                                    {{$about_us->main_description}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection

