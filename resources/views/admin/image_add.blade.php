@extends('layouts.admin')

@section('title','Admin Panel Image Add')


@section('content')
    <div class="container-fluid py-4">
                <div class="card ">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{$data->title}}</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive p-0">
                            <table >
                                <thead>

                                </thead>
                                <tbody>
                                <form role="form" action="{{route('admin_image_store',['hotel_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" name="title" class="form-control">
                                        </div>

                                        <p>Image</p>
                                        <div class="input-group input-group-outline mb-3">
                                            <input type="file" name="image" class="form-control">
                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Add Image</button>
                                    </div>
                                </form>





                                </tbody>
                            </table>
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($images as $rs)
                                    <tr>
                                        <td><p class="text-xs font-weight-bold mb-0">{{$rs->id}}</p></td>
                                        <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->title}}</p></td>
                                        <td class="align-middle text-center text-sm">
                                            @if($rs->image)
                                                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" height="60" alt="">
                                            @endif
                                        </td>
                                        <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0"><a href="{{route('admin_image_delete',['id'=>$rs->id,'hotel_id'=>$data->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/image')}}/delete.png" height="25"></a></p></td>
                                    </tr>

                                @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

        </div>

@endsection

