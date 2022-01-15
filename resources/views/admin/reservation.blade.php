@extends('layouts.admin')

@section('title','Hotel List')

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
                            <h6 class="text-white text-capitalize ps-3">Hotels</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">










                                <div class="card-body">
                                    <div class=" my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                        <div class="nav-wrapper position-relative">
                                            <ul class="nav nav-pills nav-fill" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link mb-0 px-0 py-1 active " id="general-tab" data-bs-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">
                                                        <span class="ms-1">All Rezervations</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-0 px-0 py-1 active " id="new-tab" data-bs-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false">
                                                        <span class="ms-1">New Rezervations</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-0 px-0 py-1 " id="smpt-tab" data-bs-toggle="tab" href="#smpt" role="tab" aria-controls="smpt" aria-selected="false">
                                                        <span class="ms-1">Accepted Reservation</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-0 px-0 py-1 " id="social-tab" data-bs-toggle="tab" href="#social" role="tab" aria-controls="social" aria-selected="false">
                                                        <span class="ms-1">Canceled Reservation</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                                            <div class="table-responsive p-0">
                                                <table class="table align-items-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Hotel</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Room</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Note</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Check In</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Check Out</th>

                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($data as $rs)
                                                        <tr>
                                                            <td><p class="text-xs font-weight-bold mb-0">{{$rs->id}}</p></td>
                                                            <td><p class="text-xs font-weight-bold mb-0">{{$rs->hotel->title}}</p></td>
                                                            <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->room->title}}</p></td>
                                                            <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->note}}</p></td>
                                                            <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->check_in}}</p></td>
                                                            <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->check_out}}</p></td>

                                                            <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->status}}</p></td>
                                                            <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0"><a href="{{route('admin_reservation_edit',['id'=>$rs->id])}}"><img src="{{asset('assets/admin/image')}}/edit.png" height="25"> </a></p></td>
                                                        </tr>

                                                @endforeach
                                                    </tbody></table></div>

                                        </div>
                                        <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="new-tab">
                                            <div class="table-responsive p-0">
                                                <table class="table align-items-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Hotel</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Room</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Note</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Check In</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Check Out</th>

                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($data as $rs)
                                                        @if($rs->status == 'New')
                                                            <tr>
                                                                <td><p class="text-xs font-weight-bold mb-0">{{$rs->id}}</p></td>
                                                                <td><p class="text-xs font-weight-bold mb-0">{{$rs->hotel->title}}</p></td>
                                                                <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->room->title}}</p></td>
                                                                <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->note}}</p></td>
                                                                <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->check_in}}</p></td>
                                                                <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->check_out}}</p></td>

                                                                <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->status}}</p></td>
                                                                <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0"><a href="{{route('admin_reservation_edit',['id'=>$rs->id])}}"><img src="{{asset('assets/admin/image')}}/edit.png" height="25"> </a></p></td>
                                                            </tr>
                                                        @endif

                                                    @endforeach
                                                    </tbody></table></div>

                                        </div>

                                        <div class="tab-pane fade" id="smpt" role="tabpanel" aria-labelledby="smpt-tab">
                                            <div class="table-responsive p-0">
                                                <table class="table align-items-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Hotel</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Room</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Note</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Check In</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Check Out</th>

                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($data as $rs)
                                                        @if($rs->status == 'Accepted')
                                                        <tr>
                                                            <td><p class="text-xs font-weight-bold mb-0">{{$rs->id}}</p></td>
                                                            <td><p class="text-xs font-weight-bold mb-0">{{$rs->hotel->title}}</p></td>
                                                            <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->room->title}}</p></td>
                                                            <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->note}}</p></td>
                                                            <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->check_in}}</p></td>
                                                            <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->check_out}}</p></td>

                                                            <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->status}}</p></td>
                                                            <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0"><a href="{{route('admin_reservation_edit',['id'=>$rs->id])}}"><img src="{{asset('assets/admin/image')}}/edit.png" height="25"> </a></p></td>
                                                        </tr>
                                                        @endif

                                                    @endforeach
                                                    </tbody></table></div>

                                        </div>
                                        <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                                            <div class="table-responsive p-0">
                                                <table class="table align-items-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Hotel</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Room</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Note</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Check In</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Check Out</th>

                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($data as $rs)
                                                        @if($rs->status == 'Canceled')
                                                            <tr>
                                                                <td><p class="text-xs font-weight-bold mb-0">{{$rs->id}}</p></td>
                                                                <td><p class="text-xs font-weight-bold mb-0">{{$rs->hotel->title}}</p></td>
                                                                <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->room->title}}</p></td>
                                                                <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->note}}</p></td>
                                                                <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->check_in}}</p></td>
                                                                <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->check_out}}</p></td>

                                                                <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0">{{$rs->status}}</p></td>
                                                                <td class="align-middle text-center text-sm"><p class="text-xs font-weight-bold mb-0"><a href="{{route('admin_reservation_edit',['id'=>$rs->id])}}"><img src="{{asset('assets/admin/image')}}/edit.png" height="25"> </a></p></td>
                                                            </tr>
                                                        @endif

                                                    @endforeach
                                                    </tbody></table></div>

                                        </div></div></div></div>






                                </div>
                    </div>
                </div>
            </div>
            </div>



@endsection

