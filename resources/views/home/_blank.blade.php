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





@endsection
