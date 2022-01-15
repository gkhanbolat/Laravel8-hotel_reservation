@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title', 'My Reservations')

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
                        <table border="1px" class="table1">
                            <thead>
                                <tr>
                                    <td width="10%" height="50px" align="center" >Hotel</td>
                                    <td width="10%" >Room</td>
                                    <td width="10%" >Check In</td>
                                    <td width="10%" >Check Out</td>
                                    <td width="5%" align="center" >Days</td>
                                    <td width="5%" >Adults</td>
                                    <td width="5%" >Children</td>
                                    <td width="5%" >Total</td>
                                    <td width="20%" >Note</td>

                                </tr>
                            </thead>
                            <tbody>
                            @include('home.message')
                            @foreach($datalist as $rs)

                                <tr>
                                    <td><a href="{{route('hotel',['id'=>$rs->hotel->id,'slug'=>$rs->hotel->slug])}}" target="_blank">{{$rs->hotel->title}}</a> </td>
                                    <td>{{$rs->room->title}}</td>
                                    <td>{{$rs->check_in}}</td>
                                    <td>{{$rs->check_out}}</td>
                                    <td align="center">{{$rs->days}}</td>
                                    <td>{{$rs->adults}}</td>
                                    <td>{{$rs->children}}</td>
                                    <td>{{$rs->total}}</td>
                                    <td>{{$rs->note}}</td>
                                </tr>

                            @endforeach

                            </tbody>


                        </table>








                    </div>
                    <div class="tm-testimonials-box">
                        <h3 class="tm-testimonials-title">User Panel</h3>
                        @include('home.user_menu')


                    </div>
                </div>
            </div>
        </div>




@endsection
