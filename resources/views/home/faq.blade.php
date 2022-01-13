@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp
@section('headerjs')

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>
@endsection

@extends('layouts.home')

@section('title', 'Frequently Asked Question')

@section('description')
    {{$setting->descriptions}}
@endsection
@section('keywords',$setting->keywords)

@section('content')


    <div  align="center">
        <!-- slider -->
        <div class="faqslider faqslider-about">
            <ul class="slides">
                <li>
                    <br><br>
                    <div>

                        <div id="accordion">
                            @foreach($datalist as $rs)

                                <h3 align="left">{{$rs->question}}</h3>
                                <div align="left">
                                    <p >{!! $rs->answer !!}</p>
                                </div>


                            @endforeach
                        </div>
                    </div>
                    <br><br>

                </li>
            </ul>
        </div>
    </div>





@endsection
