@extends('layouts.admin')

@section('title','User List')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Users</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Roles</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Photo</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td><p class="text-xs font-weight-bold mb-0">{{$rs->id}}</p></td>
                                        <td><p class="text-xs font-weight-bold mb-0">{{$rs->name}}</p></td>
                                        <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->email}}</p></td>
                                        <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->phone}}</p></td>
                                        <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->address}}</p></td>
                                        <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">@foreach($rs->roles as $row)
                                                {{$row->name}} ,
                                                @endforeach
                                                <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                    <i class="nav-icon fas fa-plus-circle"></i>
                                                </a>

                                            </p></td>
                                        <td class="align-middle text-center text-sm">
                                            @if($rs->profile_photo_path)
                                                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->profile_photo_path)}}" height="30" alt="">
                                            @endif
                                        </td>

                                        <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0"><a href="{{route('admin_user_edit',['id'=>$rs->id])}}"><img src="{{asset('assets/admin/image')}}/edit.png" height="25"> </a></p></td>
                                        <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0"><a href="{{route('admin_user_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/image')}}/delete.png" height="25"></a></p></td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection

