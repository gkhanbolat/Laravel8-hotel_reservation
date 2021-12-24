@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title', 'References -' . $setting->title)

@section('description')
    {{$setting->descriptions}}
@endsection
@section('keywords',$setting->keywords)

@section('content')
    <div class="row">
        <div class="col-lg-5" >
            <a href="{{route('home')}}">Home></a>
            <a color="black">References</a>


        </div>
    </div>

    <div class="row">
        <!-- slider -->
        <div class="flexslider flexslider-about effect2">
            <ul class="slides">
                <li>

                    <div >
                        <h2 class="slider-title">References</h2>
                        <p class="slider-description"> {!! $setting->references  !!}</p>
                        <div class="slider-social">
                            <a href="{{$setting->twitter}}" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                            <a href="{{$setting->facebook}}" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                            <a href="{{$setting->instagram}}" class="tm-social-icon"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>





@endsection
