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
                    <form action="{{route('sendmessage')}}" method="post" class="tm-contact-form">
                        @csrf
                        <h2><strong>Reservation Detail</strong></h2>
                        <br>
                        @foreach($datalist as $rs)

                            <div class="form-group">
                                <input type="text"  name="name" class="form-control" value="{{$rs->user->name}}" placeholder="NAME & SURNAME" />
                            </div>
                            <div class="form-group">
                                <input type="text"  name="surname" class="form-control" placeholder="SURNAME" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" value="{{$rs->user->phone}} placeholder="PHONE" />
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" value="{{$rs->user->email}} placeholder="EMAIL" />
                            </div>
                            <div class="form-group">
                                <textarea name="note" class="form-control" rows="6" placeholder="Note"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="tm-submit-btn" type="submit" name="submit">Continue Check Out</button>
                            </div>
                        @endforeach
                    </form>







                </div>

                <div class=" col-md-4 tm-contact-form-input margin-top">
                    @foreach($datalist as $rs)
                        <div class="col-md-7">
                            <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="image" style="height: 400px; width:625px"/>
                        </div>
                        <div class="form-group">
                            <input type="text"  name="name" class="form-control" value="{{$rs->hotel->title}}" placeholder="NAME & SURNAME" />
                        </div>
                        <div class="form-group">
                            <input type="text"  name="name" class="form-control" value="{{$rs->adults}}" placeholder="NAME & SURNAME" />
                        </div>
                        <div class="form-group">
                            <input type="text"  name="name" class="form-control" value="{{$rs->children}}" placeholder="NAME & SURNAME" />
                        </div>
                        <div class="form-group">
                            <input type="text"  name="name" class="form-control" value="{{$rs->check_in}}" placeholder="NAME & SURNAME" />
                        </div>
                        <div class="form-group">
                            <input type="text"  name="name" class="form-control" value="{{$rs->check_out}}" placeholder="NAME & SURNAME" />
                        </div>

                        <div class="form-group">
                            <input type="text"  name="name" class="form-control" value="{{$rs->total}}" placeholder="NAME & SURNAME" />
                        </div>

                        @endforeach
                        </form>



                </div>

        </div>
    </div>





@endsection
