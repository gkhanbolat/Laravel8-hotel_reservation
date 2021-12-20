@extends('layouts.admin')

@section('title','Admin Panel Category Add')



@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Category Add</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table >
                                <thead>

                                </thead>
                                <tbody>
                                <form role="form" action="{{route('admin_category_create')}}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label"></label>
                                            <select class="form-control" name="parent_id">
                                                <option value="0" selected="selected">Main Category</option>
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}"> {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Keywords</label>
                                            <input type="text" name="keywords" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Description</label>
                                            <input type="text" name="description" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label"></label>
                                            <select class="form-control" name="status">
                                                <option >True</option>
                                                <option selected="selected">False</option>
                                            </select>
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Add Category</button>
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

