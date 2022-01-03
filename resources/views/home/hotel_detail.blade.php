@php
    $setting=\App\Http\Controllers\HomeController::getsetting()
@endphp

@extends('layouts.home')

@section('title', $data->title)

@section('description')
    {{$data->descriptions}}
@endsection
@section('keywords',$data->keywords)

@section('content')
    <br>
    <div class="container">
        <div class="row">
            <!-- contact form -->


            <div class="col-md-7">
                <div class="flexslider  effect2">


                <ul class="slides">
                    @foreach($datalist as $picked)
                        <li>
                            <div class="col-md-7">
                                <img src="{{\Illuminate\Support\Facades\Storage::url($picked->image)}}" alt="image" style="height: 400px; width:625px"/>
                            </div>
                        </li>
                    @endforeach

                </ul>
                </div>




            </div>

            <div class=" col-md-4 tm-contact-form-input margin-top">
                <div><div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                    <div class="col-lg-4 col-md-6 col-sm-6"><h1>{{$data->title}}</h1></div>
                    <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                </div>
                <br><br><br><br><br>
                <div>

                    <div >
                        <p >{!! $data->descriptions !!}</p>


                    </div>
                </div>
                <br><br>




                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" placeholder="Check-in Date" />
                        <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
                    </div>
                </div>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker2'>
                        <input type='text' class="form-control" placeholder="Check-out Date" />
                        <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
                    </div>
                </div>
                <div class="form-group margin-bottom-0">
                    <select class="form-control">
                        <option value="">-- Room Type -- </option>
                        <option value="1">Single bed</option>
                        <option value="2">Double bed</option>
                        <option value="3">Three Bed</option>
                        <option value="4">Family room</option>
                        <option value="5p">Suit</option>
                    </select>
                </div>

                <a href="{{route('addtocart',['id'=>$data->id])}}" class="tm-tours-box-2-link">Book Now</a>
                <br><br><br><br>

            </div>


        </div>
        <div >

            <div class="tm-home-box-4-info">
                <p >{!! $data->detail !!}</p>
                <br>
                <p >City:  {!! $data->city !!}  Country: {!! $data->country !!}</p>
                <p >Address:  {!! $data->address !!}</p>
                <p >Location: {!! $data->location !!}</p>
                <p >Phone:  {!! $data->phone !!}</p>
                <p >Fax:  {!! $data->fax !!}</p>
                <p >E-mail:  {!! $data->email !!}</p>


            </div>
        </div>
    </div>
    <br>









@endsection
