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
                            <h6 class="text-white text-capitalize ps-3">Review Update</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table >
                                <thead>

                                </thead>
                                <tbody>
                                <form role="form" action="{{route('admin_review_update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <p>Id</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->id}}</p>
                                        </div>
                                        <p>Hotel</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->hotel->title}}</p>
                                        </div>
                                        <p>Subject</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->subject}}</p>
                                        </div>
                                        <p>Review</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->review}}</p>
                                        </div>
                                        <p>Rate</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->rate}}</p>
                                        </div>
                                        <p>IP</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->IP}}</p>
                                        </div>
                                        <p>Created at</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->created_at}}</p>
                                        </div>
                                        <p>Status</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label"></label>
                                            <select class="form-control" name="status">
                                                <option selected="selected">True</option>
                                                <option >False</option>
                                            </select>
                                        </div>



                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update Review</button>
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

