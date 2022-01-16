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
                                <form role="form" action="{{route('admin_hotel_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label"></label>
                                            <select class="form-control" name="category_id">
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>{{$rs->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <p>Title</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                        </div>

                                        <p>Keywords</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                        </div>
                                        <p>Slug</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                                        </div>
                                        <p>Description</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" name="descriptions" value="{{$data->descriptions}}" class="form-control">
                                        </div>
                                        <p>Detail</p>
                                        <div class="mb-3">
                                            <textarea id="summernote" name="detail">{{$data->detail}}</textarea>
                                            <script>
                                                $(document).ready(function() {
                                                    $('#summernote').summernote();
                                                });
                                            </script
                                        </div>
                                        <p>Address</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                        </div>
                                        <p>Phone</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                        </div>
                                        <p>Fax</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                        </div>
                                        <p>E-mail</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="email" name="email" value="{{$data->email}}" class="form-control">
                                        </div>
                                        <p>City</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" name="city" value="{{$data->city}}" class="form-control">
                                        </div>
                                        <p>Country</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" name="country" value="{{$data->country}}" class="form-control">
                                        </div>
                                        <p>Location</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="text" name="location" value="{{$data->location}}" class="form-control">
                                        </div>
                                        <p>Status</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label"></label>
                                            <select class="form-control" name="status">
                                                <option>True</option>
                                                <option>False</option>
                                                <option selected="selected">{{$data->status}}</option>
                                            </select>
                                        </div>
                                        <p>Star</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label"></label>
                                            <select class="form-control" name="star">
                                                <option >1</option>
                                                <option >2</option>
                                                <option >3</option>
                                                <option >4</option>
                                                <option >5</option>
                                                <option selected="selected">{{$data->star}}</option>
                                            </select>
                                        </div>
                                        <p>Image</p>
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

