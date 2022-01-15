<div class="tm-testimonials-content">
    <ul type="none">
        <li><a href="{{route('myprofile')}}">My Profile</a> </li>
        <li><a href="{{route('myrezervations')}}">My Reservations</a></li>
        <li><a href="{{route('myreviews')}}">My Reviews</a></li>

        @php
            $userRoles=\Illuminate\Support\Facades\Auth::user()->roles->pluck('name');
        @endphp
        @if($userRoles->contains('admin'))
            <li><a href="{{route('admin_home')}}">Admin Panel</a> </li>
            @endif

        <li><a href="{{route('logout')}}">Logout</a> </li>

    </ul>

</div>
