@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title', $setting->title)

@section('description')
    {{$setting->descriptions}}
@endsection
@section('keywords',$setting->keywords)


@section('content')
    <div class="container">
        <div class="row">
            <div class="section-margin-top">

            </div>
            <div class="row">
                <!-- Testimonial -->
                <div class="col-lg-12">
                    <div class="tm-what-we-do-right">
                        @include('profile.show')
                    </div>
                    <div class="tm-testimonials-box">
                        <h3 class="tm-testimonials-title">User Panel</h3>
                            @include('home.user_menu')


                    </div>
                </div>
            </div>
        </div>



@endsection
