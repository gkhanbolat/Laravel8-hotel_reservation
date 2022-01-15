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
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Hotel Edit</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table >
                                <thead>

                                </thead>
                                <tbody>
                                <form role="form" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <p>Name</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" name="name" value="{{$data->name}}" class="form-control">
                                        </div>

                                        <p>Email</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                        </div>
                                        <p>Phone</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                        </div>
                                        <p>Address</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                        </div>
                                        <p>Photo</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="file" name="image" class="form-control">
                                            @if($data->image)
                                                <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" height="100" alt="">
                                            @endif
                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update Hotel</button>
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

