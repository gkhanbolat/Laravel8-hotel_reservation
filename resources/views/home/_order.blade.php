@php
    $data=\App\Models\Room::all();
    $name=\App\Models\Hotel::select();
@endphp

<section class="container tm-home-section-1" id="more">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
            <!-- Nav tabs -->
            <div class="tm-home-box-1">
                <ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
                    <li role="presentation" class="active">
                        <a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Hotel</a>
                    </li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
                        <div class="tm-search-box effect2">
                            <form action="{{route('hotel',['id'=>$name->id,'slug'=>$name->slug])}}" method="post" class="hotel-search-form">
                                <div class="tm-form-inner">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="">-- Select Hotel -- </option>
                                            @foreach($name as $nm)
                                            <option value="{{$nm->id}}">{{$nm->title}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" placeholder="Check-in Date" />
                                            <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker2'>
                                            <input type='text' class="form-control" placeholder="Check-out Date" />
                                            <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group margin-bottom-0">
                                        <select class="form-control">
                                            <option value="">-- Room Type -- </option>
                                            @foreach($data as $dt)
                                                @foreach($name as $nm)
                                                    @if($nm->id==$dt->hotel_id)
                                                        <option value="{{$dt->id}}">{{$dt->title}}</option>
                                                    @endif
                                                @endforeach
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group tm-yellow-gradient-bg text-center">
                                    <button type="submit" name="submit" class="tm-yellow-btn">Check Now</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
