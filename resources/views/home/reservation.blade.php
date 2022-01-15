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
            <br><br><br><br>
            <!-- contact form -->


                <div class="col-md-7">
                    <form action="{{route('user_reservation_store',['hotel_id'=>$data->id,'room_id'=>$roomlist->id])}}" method="post" class="tm-contact-form">
                        @csrf
                        <h2><strong>Reservation Detail</strong></h2>
                        <br>


                            <div class="form-group">
                                <input type="text"  name="name" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" placeholder="NAME & SURNAME" />
                            </div>

                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" placeholder="PHONE" />
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" placeholder="EMAIL" />
                            </div>
                            <div class="form-group">
                                <textarea name="note" class="form-control" rows="6" placeholder="Note"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="tm-submit-btn" type="submit" name="submit">Submit Your Reservation</button>
                            </div>









                </div>

                <div class=" col-md-4 tm-contact-form-input margin-top">

                    <div >
                        <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" alt="image" style="height: 175px; width:305px"/>
                        <br>
                    </div>
                    <hr>

                    <div ><p><strong>{{$data->title}}</strong></p></div>
                    <hr>
                    <div ><p><strong>Room: </strong> {{$roomlist->title}}</p></div>
                    <div ><p><strong>Check in: </strong> {{$checkin}}</p></div>
                    <div ><p><strong>Check Out: </strong> {{$checkout}}</p></div>
                    <div ><p><strong>Days: </strong>{{$days}}</p></div>
                    <div ><p><strong>Adults: </strong> {{$adults}}</p></div>
                    <div ><p><strong>Children: </strong> {{$children}}</p></div>
                    <hr>

                    @php
                    if($days=='0'){
                        $total=0;

                    }
                    else{
                        $total=$roomlist->price*$days+(($days*$adults*100)+($days*$children*50));}
                    @endphp
                    <div ><p name="total"><strong>Total: </strong> {{$total}}</p></div>

                    <div class="form-group">
                        <input type="hidden" name="total" class="form-control" value="{{$total}}" />
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="adults" class="form-control" value="{{$adults}}" />
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="children" class="form-control" value="{{$children}}" />
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="checkin" class="form-control" value="{{$checkin}}" />
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="checkout" class="form-control" value="{{$checkout}}" />
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="days" class="form-control" value="{{$days}}" />
                    </div>




                    </form>







                </div>

        </div>
    </div>
    <br><br><br><br><br><br>





@endsection
