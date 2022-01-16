
@extends('layouts.home')

@section('title', $data->title." Hotel List")

@section('description')
    {{$data->descriptions}}
@endsection
@section('keywords',$data->keywords)

@section('content')
    <div class="container">
        <div class="row">
            <div class="tm-section-header section-margin-top">

                <div align="center"><h2 class="tm-section-title"> {{$data->title}} Hotel List</h2></div>

            </div>
        </div>
        <div class="row">
            @foreach($datalist as $rs)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
                <div class="tm-tours-box-2">
                    <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="image" class="img-responsive" style="height: 200px" >
                    <div class="tm-tours-box-2-info">
                        <h3 class="margin-bottom-15">{{$rs->title}}</h3>
                    </div>
                    <a href="{{route('hotel',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="tm-tours-box-2-link">Book Now</a>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-lg-12">
                <br>

            </div>
        </div>
    </div>





@endsection
