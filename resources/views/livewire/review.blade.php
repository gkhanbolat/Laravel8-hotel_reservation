
<div>
    @livewireScripts
    @if(session()->has('message'))
        <div class="alert">
            {{session('message')}}
        </div>@endif
    <form wire:submit.prevent="store" class="tm-contact-form">
        @csrf
        <div class="form-group">
            <input class="input" wire:model="subject" type="text" placeholder="Subject" />
            @error('subject')<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <textarea class="input" wire:model="review" rows="8" placeholder="Your review" ></textarea>
            @error('review')<span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">

            <div class="rating-css">
                @error('rate')<span class="text-danger">{{$message}}</span>@enderror
                <strong class="text-uppercase">Your Rating:</strong>

                <div class="star-icon">
                    <input type="radio" id="rating1" wire:model="rate" value="1">
                    <label for="rating1" class="fa fa-star"></label>
                    <input type="radio" id="rating2" wire:model="rate" value="2">
                    <label for="rating2" class="fa fa-star"></label>
                    <input type="radio" id="rating3" wire:model="rate" value="3">
                    <label for="rating3" class="fa fa-star"></label>
                    <input type="radio" name="rating1" id="rating4" wire:model="rate" value="4">
                    <label for="rating4" class="fa fa-star"></label>
                    <input type="radio" name="rating1" id="rating5" wire:model="rate" value="5">
                    <label for="rating5" class="fa fa-star"></label>
                </div>
            </div>
        </div>
        <div class="form-group">
            @auth
            <button class="tm-submit-btn" type="submit" name="submit">Submit now</button>
            @else
                <a href="/login" class="tm-submit-btn">For Submit Your Review, Please Login</a>
            @endauth
        </div>
    </form>

</div>



