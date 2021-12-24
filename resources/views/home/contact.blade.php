@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
@section('javascript')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="/css/app.css" rel="stylesheet">
    @endsection

@extends('layouts.home')

@section('title', 'Contact -' . $setting->title)

@section('description')
    {{$setting->descriptions}}
@endsection
@section('keywords',$setting->keywords)

@section('content')
    <div class="container">
        <div class="row">
            <!-- contact form -->


                <div class="col-md-7">


                                <p > {!! $setting->contact  !!}</p>




                </div>

                <div class=" col-md-4 tm-contact-form-input margin-top">

                    <form action="{{route('sendmessage')}}" method="post" class="tm-contact-form">
                        @csrf
                        <h2><strong>Bize Yazın</strong></h2>
                        <br>
                        @include('home.message')
                        <div class="form-group">
                            <input type="text"  name="name" class="form-control" placeholder="NAME & SURNAME" />
                        </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="PHONE" />
                            </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="EMAIL" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="SUBJECT" />
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="tm-submit-btn" type="submit" name="submit">Submit now</button>
                        </div>
                    </form>
                </div>

        </div>
    </div>





@endsection
