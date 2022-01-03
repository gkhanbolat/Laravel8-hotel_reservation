<section class="tm-banner">
    <!-- Flexslider -->
    <div class="flexslider flexslider-banner">
        <ul class="slides">
            @foreach($slider as $rs)
            <li>
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">Find <span class="tm-yellow-text">The Best</span> Place</h1>
                    <p class="tm-banner-subtitle">{{$rs->title}}</p>
                    <a href="{{route('hotel',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="tm-banner-link">Learn More</a>
                </div>
                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="Image" style="height: 600px"/>
            </li>
            @endforeach

        </ul>
    </div>
</section>
