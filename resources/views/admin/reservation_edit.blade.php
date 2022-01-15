@extends('layouts.admin')

@section('title','Admin Panel Review Edit')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            @include('home.message')
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Reservation Update</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table >
                                <thead>

                                </thead>
                                <tbody>
                                <form role="form" action="{{route('admin_reservation_update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <p>ID</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->id}}</p>
                                        </div>
                                        <p>Hotel</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->hotel->title}}</p>
                                        </div>
                                        <p>Room</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->room->title}}</p>
                                        </div>
                                        <p>Check In</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->check_in}}</p>
                                        </div>
                                        <p>Check Out</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->check_out}}</p>
                                        </div>
                                        <p>Days</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->days}}</p>
                                        </div>
                                        <p>Adults</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->adults}}</p>
                                        </div>
                                        <p>Children</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->children}}</p>
                                        </div>

                                        <p>Total</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->total}}</p>
                                        </div>
                                        <p>Note</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->note}}</p>
                                        </div>


                                        <p>Status</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label"></label>
                                            <select class="form-control" name="status">
                                                <option selected="selected">Accepted</option>
                                                <option >Canceled</option>
                                            </select>
                                        </div>



                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update Reservation</button>
                                    </div>
                                </form>





                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

