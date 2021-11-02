@extends('layouts.home')

@section('title','Otel Rezervasyon Sitesi')

@section('description')
    Türkiyenin en iyi otel rezervasyon sitesi...
@endsection
@section('keywords','Otel,Rezervasyon,tatil')

@section('content')

    @include('home._slider')
    @include('home._order')

    @include('home._offer')
    @include('home._details')
    @include('home._popular')



@endsection
