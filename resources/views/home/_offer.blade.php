@php
    $data=\App\Http\Controllers\HomeController::offer()
@endphp

@foreach($data as $rs)
<div class="col-lg-4 col-md-4 col-sm-6">
    <div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="image" class="img-responsive" style="height: 347px; width:348px">
        <a href="{{route('hotel',['id'=>$rs->id,'slug'=>$rs->slug])}}">
            <div class="tm-green-gradient-bg tm-city-price-container">
                <span>{{$rs->title}}</span>
            </div>
        </a>
    </div>
</div>
@endforeach
</div>


