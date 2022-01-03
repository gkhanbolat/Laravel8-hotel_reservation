@extends('layouts.admin')

@section('title','Admin Panel Edit Category')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Edit Category</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table >
                                <thead>

                                </thead>
                                <tbody>
                                <form role="form" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="input-group input-group-outline mb-3">

                                            <select class="form-control" name="parent_id">
                                                <option value="0" >Main Category</option>
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif>{{$rs->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <p>Title</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label"></label>
                                            <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                        </div>
                                        <p>Slug</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label"></label>
                                            <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                                        </div>
                                        <p>Keywords</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label"></label>
                                            <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                        </div>
                                        <p>Description</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label"></label>
                                            <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                        </div>
                                        <p>Status</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label"></label>
                                            <select class="form-control" name="status">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option >True</option>
                                                <option >False</option>
                                            </select>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update Category</button>
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

