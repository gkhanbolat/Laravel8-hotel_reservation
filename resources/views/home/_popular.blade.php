@php
    $data=\App\Http\Controllers\HomeController::popular();
@endphp
<section class="tm-white-bg section-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="tm-section-header section-margin-top">
                <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Popular Packages</h2></div>
                <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
            </div>
            @foreach($data as $rs)
            <div class="col-lg-6">

                <div class="tm-home-box-3">
                    <div class="tm-home-box-3-img-container">
                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="image" class="img-responsive" style="height: 225px;width: 250px " >
                    </div>
                    <div class="tm-home-box-3-info">
                        <p class="tm-home-box-3-description">{{$rs->descriptions}}</p>

                            <div class="tm-home-box-2-container">
                                <a href="{{route('hotel',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
                                <a href="{{route('hotel',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">{{$rs->title}}</span></a>
                                <a href="{{route('hotel',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
                            </div>

                    </div>
                </div>

            </div>
            @endforeach


        </div>
    </div>
</section>
