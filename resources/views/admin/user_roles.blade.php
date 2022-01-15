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
                            <h6 class="text-white text-capitalize ps-3">Roles Edit</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table >
                                <thead>

                                </thead>
                                <tbody>
                                <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <p>Id</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <p>{{$data->id}}</p>
                                        </div>

                                        <p>Name</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <p>{{$data->name}}</p>
                                        </div>

                                        <p>Email</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <p>{{$data->email}}</p>
                                        </div>
                                        <p>Roles</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <p class="text-xs font-weight-bold mb-0">@foreach($data->roles as $row)
                                                    {{$row->name}} ,

                                                <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/image')}}/delete.png" height="25"></a>

                                                </a>
                                                @endforeach

                                            </p>
                                        </div>

                                        <p>Star</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label"></label>
                                            <select class="form-control" name="roleid">
                                                @foreach($datalist as $rs)

                                                <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>



                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Add Role</button>
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

