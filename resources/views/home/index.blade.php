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

    @include('home._slider')
    @include('home._order')

    @include('home._offer')
    @include('home._details')
    @include('home._popular')



@endsection
