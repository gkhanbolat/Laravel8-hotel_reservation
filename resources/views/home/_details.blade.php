@php
    $data=\App\Http\Controllers\HomeController::popular()
@endphp
<div class="section-margin-top">
<div class="row">
    <div class="tm-section-header">
        <br>
    </div>
</div>
<div class="row">
    @foreach($data as $rs)
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
        <div class="tm-home-box-2">
            <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="image" class="img-responsive" style="height: 185px;width: 254px" >
            <h3>{{$rs->detail}}</h3>
            <p class="tm-date">28 March 2016</p>
            <div class="tm-home-box-2-container">
                <a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
                <a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description">{{$rs->title}}</span></a>
                <a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
            </div>
        </div>
    </div>
    @endforeach


    </div>
</div>

</section>
