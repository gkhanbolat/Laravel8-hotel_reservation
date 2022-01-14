@php
    $setting=\App\Http\Controllers\HomeController::getsetting();

@endphp
@section('javascript')
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
@endsection

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
                    <hr></hr>

                    <div >
                        <p >{!! $data->descriptions !!}</p>


                    </div>
                    <hr></hr>

                    <div class="col-md-5">
                        @php
                            $average=\App\Http\Controllers\HomeController::averages($data->id);
                            $counter=\App\Http\Controllers\HomeController::counter($data->id);
                        @endphp
                        <label class="rating-label">
                            <input
                                class="rating2"
                                max="5"
                                step="0.5"
                                style="--value:{{$average}}"
                                type="range"
                                value="5">


                        </label>
                    </div>
                    <div class="col-md-7"><p style="align: right">Average Rating: {{$average}}</p>
                    </div>




                </div>
                <hr></hr>


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
                        @foreach($room as $rm)
                            @if($rm->status == 'True')
                                <option value="">{{$rm->title}} </option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <form action="{{'user_reservation_add'}}" method="post">
                    @csrf

                    <a class="tm-tours-box-2-link">Book Now</a>
                </form>
                <br><br><br><br>

            </div>


        </div>
    </div>

    <br>
    <div class="hotel-detail">
        <hr></hr>

        <div class="hotel-detail-2">


            <ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
                <li role="presentation" class="active">
                    <a href="#detail" aria-controls="detail" role="tab" data-toggle="tab">Detail</a>
                </li>
                <li role="presentation">
                    <a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contact</a>
                </li>
                <li role="presentation">
                    <a href="#review" aria-controls="contact" role="tab" data-toggle="tab">{{$counter}} Review(s) / Add Review</a>
                </li>
            </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="detail">
                <div class="tm-search-box effect2">
                    <p>{!! $data->detail !!}</p>

                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade tm-white-bg" id="contact">
                <div class="tm-search-box effect2">
                    <p >City:  {!! $data->city !!}  Country: {!! $data->country !!}</p>
                    <p >Address:  {!! $data->address !!}</p>
                    <p >Location: {!! $data->location !!}</p>
                    <p >Phone:  {!! $data->phone !!}</p>
                    <p >Fax:  {!! $data->fax !!}</p>
                    <p >E-mail:  {!! $data->email !!}</p>

                </div>
            </div>


            <div role="tabpanel" class="tab-pane fade tm-white-bg" id="review">
                <div class="tm-search-box effect2">
                    <div class="row">
                        <div class="col-md-6">
                            @foreach($reviews as $rs)
                                @if($rs->status == 'True')



                                <div><a href="#"><i class="fa fa-user-o">{{$rs->user->name}}</i> </a>
                                    <a href="#" align="right"><i class="fa fa-clock-o">{{$rs->created_at}}</i> </a></div>


                                <div class="col-md-3">
                                    <label class="rating-label">
                                        <input
                                            class="rating"
                                            max="5"
                                            step="0.5"
                                            style="--value:{{$rs->rate}}"
                                            type="range">
                                    </label>
                                </div>
                                <div>
                                    <strong>{{$rs->subject}}</strong>
                                    <p>{{$rs->review}}</p>
                                </div>
                                <hr></hr>
                                @endif


                            @endforeach






                        </div>
                        <div class="col-md-5">

                            <h4 class="text-uppercase">Write Your Review</h4>
                            @livewire('review',['id'=>$data->id])


                        </div>
                    </div>



                </div>
            </div>
            <hr></hr>



    </div>
    </div>
    </div>



















@endsection
