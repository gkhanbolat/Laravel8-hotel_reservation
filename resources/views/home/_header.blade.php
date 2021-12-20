@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp
<body class="tm-gray-bg">
<!-- Header -->
<div class="tm-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3   tm-site-name-container">
                <a href="#" class="tm-site-name">Holiday</a>
            </div>
            <div class="">
                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div>
                <nav class="tm-nav">



                    <ul type="none">
                        <li><a href="#">Ana Sayfa</a></li>
                        <li><a>Categories</a>
                            <ul type="none">
                            @foreach($parentCategories as $rs)
                                <li><a>{{$rs->title}}</a>


                                </li>
                                    @endforeach
                            </ul>

                        </li>

                        <li><a href="#">BTT</a>
                            <ul type="none">
                                <li><a href="#">Anakart</a></li>
                                <li><a href="#">İşlemci</a></li>
                                <li><a href="#">Bellekler</a></li>
                            </ul>
                        </li>
                        <li><a href="#">İletişim</a></li>
                    </ul>

                </nav>
            </div>
        </div>
    </div>
</div>


