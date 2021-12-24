@extends('layouts.admin')

@section('title','Admin Panel Hotel Add')
@section('javascript')


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            @include('home.message')
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Contact Message Edit</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table >
                                <thead>

                                </thead>
                                <tbody>
                                <form role="form" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <p>Id</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->id}}</p>
                                        </div>
                                        <p>Name</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->name}}</p>
                                        </div>
                                        <p>Email</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->email}}</p>
                                        </div>
                                        <p>Phone</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->phone}}</p>
                                        </div>
                                        <p>Subject</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->subject}}</p>
                                        </div>
                                        <p>Message</p>
                                        <div class="input-group mb-3">
                                            <p type="text" name="title" class="form-control">{{$data->message}}</p>
                                        </div>
                                        <p>Admin Note</p>
                                        <div class="mb-3">
                                            <textarea id="note" name="note" rows="3">{{$data->note}}</textarea>
                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update Message</button>
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

