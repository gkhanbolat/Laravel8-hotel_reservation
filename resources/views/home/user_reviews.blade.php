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
                                    <td width="5%" height="50px" align="center" >ID</td>
                                    <td width="20%" >Hotel</td>
                                    <td width="15%" >Subject</td>
                                    <td width="25%" >Review</td>
                                    <td width="5%" align="center" >Rate</td>
                                    <td width="5%" >Status</td>
                                    <td width="10%" >Created at</td>
                                    <td width="5%" >Delete</td>

                                </tr>
                            </thead>
                            <tbody>
                            @include('home.message')
                            @foreach($datalist as $rs)
                                @if($rs->status == 'True' OR $rs->status == 'New')
                                <tr>
                                    <td align="center">{{$rs->id}}</td>
                                    <td><a href="{{route('hotel',['id'=>$rs->hotel->id,'slug'=>$rs->hotel->slug])}}" target="_blank">{{$rs->hotel->title}}</a> </td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->review}}</td>
                                    <td align="center">{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>{{$rs->created_at}}</td>
                                    <td align="center">
                                        <a href="{{route('user_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><img src="{{asset('assets/admin/image')}}/delete.png" height="25"></a>
                                    </td>
                                </tr>
                                @endif
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
