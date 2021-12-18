@extends('layouts.admin')

@section('title','Category List')

@section('content')

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Categories</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Parent</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td><p class="text-xs font-weight-bold mb-0">{{$rs->id}}</p></td>
                                        <td><p class="text-xs font-weight-bold mb-0">{{$rs->parent_id}}</p></td>
                                        <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->title}}</p></td>
                                        <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->status}}</p></td>
                                        <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0"><a href="{{route('admin_category_edit',['id'=>$rs->id])}}"><img src="{{asset('assets/admin/image')}}/edit.png" height="25"> </a></p></td>
                                        <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0"><a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/image')}}/delete.png" height="25"></a></p></td>
                                    </tr>

                                @endforeach


                                <a href="{{route('admin_category_add')}}" type="button" class="btn btn-primary" style="width: 200px">Add Category</a>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection

