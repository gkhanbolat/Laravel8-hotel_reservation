@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList();
@endphp
<body class="tm-gray-bg">
<!-- Header -->
<div class="tm-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2   tm-site-name-container">
                <a href="{{route('home')}}" class="tm-site-name">Holiday</a>
            </div>
            <div class="">
                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div>
                <nav class="tm-nav">



                    <ul type="none">

                        <li><a href="#">Categories</a>
                            <ul type="none">
                            @foreach($parentCategories as $rs)
                                <li><a href="#">{{$rs->title}}</a>


                                </li>
                                    @endforeach
                            </ul>

                        </li>
                        <li><a href="{{route('aboutus')}}">About us</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="{{route('references')}}">References</a></li>
                        <li><a href="{{route('faq')}}">Faq</a></li>
                        @auth
                        <li><a href="#">{{\Illuminate\Support\Facades\Auth::user()->name }}</a>
                            <ul type="none">
                                <li><a href="myaccount">Profile</a> </li>
                                <li><a href="{{route('logout')}}">Logout</a> </li>
                            </ul>
                        @endauth
                        @guest
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                        @endguest


                    </ul>


                </nav>
            </div>
        </div>
    </div>
</div>


