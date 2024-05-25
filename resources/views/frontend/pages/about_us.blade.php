@extends('frontend.layouts.main')
@section('content')
@php
    if ($data->cover_image) {
        $image_url ="{{ asset('storage/uploads/'.'/'.$data->cover_image)}}";
    } else {
        $image_url="{{ asset('assets/frontend/images/about/about4.jpg')}}";
    }
    
@endphp
    <!-- Body Container -->
    <div id="page-content"> 
        <!--Page Header-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title"><h1>About Us</h1></div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="{{ route('home')}}" title="Back to the home page">Home</a><span class="title"><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>About Us</span></div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--Main Content-->
        <!-- Destination section -->
        <div class="destination-section section pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="about-images">
                            <img class="rounded-0 w-100 blur-up lazyload" data-src="{{$image_url}}" src="{{$image_url}}" alt="about" width="700" height="600" />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <div class="about-details faqs-style faqs-style2 px-50">
                            <h2 class="fs-3 mb-3">{{ $data->name }}</h2>
                           {!! $data->description!!}
                            <div>
                                <a href="{{ route('book.trainer')}}">
                                    <button class="btn btn-primary btn-sm btn-round" style="margin-left: 20px; margin-top: 5px;"> <i class="hdr-icon icon anm anm-pencil-square-o" style="margin-right: 3px"></i> Book Trainer</button>
                                   </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Destination section -->

        <!-- Counterup banner section -->
        <div class="destination-section section section-color-light">
            <div class="container">
                <div class="row">
                <div class="col-md-6">
                    <div class="text-center">
                        <i class="icon anm anm-fire-l" style="font-size: 40px; color:#662198"></i>
                        <h5 class="mt-3">Vision</h5>
                    </div>
                    <p>{{ $data->vision }}</p>
                </div>
                <div class="col-md-6">
                    <div class="text-center">
                    <i class="icon anm anm-clock-r " style="font-size: 40px; color:#662198"></i>
                    <h5 class="mt-3">Mission</h5>
                    </div>
                    <p>{{ $data->mission }}</p>
                </div>
            </div>

                {{-- <div class="row row-cols-lg-4 row-cols-md-4 row-cols-sm-2 row-cols-2 g-4 text-center">
                    <div class="counterup-items">
                        <i class="icon anm anm-history fs-3 mb-3"></i>
                        <p class="counterup-number"><span class="counterup" data-count="50">50</span><span class="ms-1 text">M+</span></p>
                        <h5 class="counterup-title">Years of foundation</h5>
                    </div>
                    <div class="counterup-items">
                        <i class="icon anm anm-users-r fs-3 mb-3"></i>
                        <p class="counterup-number"><span class="counterup" data-count="100">100</span><span class="ms-1 text">B+</span></p>
                        <h5 class="counterup-title">Skilled team members</h5>
                    </div>
                    {{-- <div class="counterup-items">
                        <i class="icon anm anm-handshake-l fs-3 mb-3"></i>
                        <p class="counterup-number"><span class="counterup" data-count="80">80</span><span class="ms-1 text">M+</span></p>
                        <h5 class="counterup-title">Happy customers</h5>
                    </div>
                    <div class="counterup-items">
                        <i class="icon anm anm-bar-chart-o fs-3 mb-3"></i>
                        <p class="counterup-number"><span class="counterup" data-count="70">70</span><span class="ms-1 text">B+</span></p>
                        <h5 class="counterup-title">Monthly orders</h5>
                    </div> --}}
                {{-- </div> --}}
            </div>
        </div>
        <!-- End Counterup banner section -->


        <!--Video Content-->
        @if ($data->gallery)
        <section class="video-popup-section section pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="video-popup-content position-relative">
                            <a href="#aboutVideo-modal" class="popup-video d-flex align-items-center justify-content-center">
                                <img class="w-100 d-block blur-up lazyload" data-src="{{ asset('storage/uploads'.'/'.$data->images['gallery1'])}}" src="{{ asset('storage/uploads'.'/'.$data->images['gallery1'])}}" alt="image" title="" width="1100" height="800" />
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6" style="margin-left: -25px">
                        <div class="video-popup-content position-relative">
                            <a href="#aboutVideo-modal" class="popup-video d-flex align-items-center justify-content-center">
                                <img class="w-100 d-block blur-up lazyload" data-src="{{ asset('storage/uploads'.'/'.$data->images['gallery2'])}}" src="{{ asset('storage/uploads'.'/'.$data->images['gallery2'])}}" alt="image" title="" width="1100" height="600" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
        @endif
       
        <!--End Video Content-->
        <!--End Main Content-->
    </div>
    <!-- End Body Container -->
    
@endsection