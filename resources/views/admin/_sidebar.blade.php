<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{route('admin_home')}} " target="_blank">
            <img src="{{asset('assets')}}/admin/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Admin Panel</span>
        </a>

    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-200" id="sidenav-collapse-main">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('admin_category')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1">Category</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('admin_hotels')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">H</i>
                    </div>
                    <span class="nav-link-text ms-1">Hotel</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('admin_message')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">message</i>
                    </div>
                    <span class="nav-link-text ms-1">Messages</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('admin_review')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">R</i>
                    </div>
                    <span class="nav-link-text ms-1">Review</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('admin_faq')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">F</i>
                    </div>
                    <span class="nav-link-text ms-1">Faq</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('admin_reservation')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">R</i>
                    </div>
                    <span class="nav-link-text ms-1">Reservation</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('admin_users')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">U</i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('admin_setting')}}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">S</i>
                    </div>
                    <span class="nav-link-text ms-1">Setting</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account</h6>
            </li>
            @auth
            <li class="info">
                <a class="nav-link text-white">{{Auth::user()->name}}</a>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('logout')}}">

                    <span class="nav-link-text ms-1">Logout</span>
                </a>
            </li>@endauth

        </ul>
    </div>
</aside>
