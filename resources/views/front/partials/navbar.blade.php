<header class="rn-header haeder-default header--sticky">
    <div class="container">
        <div class="header-inner">
            <div class="header-left">
                <div class="logo-thumbnail logo-custom-css">
                    <a class="logo-light" href="{{ route('home') }}"><img src="assets/images/logo/logo-white.png" alt="nft-logo"></a>
                    <a class="logo-dark" href="{{ route('home') }}"><img src="assets/images/logo/logo-dark.png" alt="nft-logo"></a>
                </div>
                <div class="mainmenu-wrapper">
                    <nav id="sideNav" class="mainmenu-nav d-none d-xl-block">
                        <ul class="mainmenu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="header-right">
                <div class="setting-option d-none d-lg-block">
                    <form class="search-form-wrapper" action="#">
                        <input type="search" placeholder="Search Here" aria-label="Search">
                        <div class="search-icon">
                            <button><i class="feather-search"></i></button>
                        </div>
                    </form>
                </div>

                <div class="setting-option rn-icon-list d-block d-lg-none">
                    <div class="icon-box search-mobile-icon">
                        <button><i class="feather-search"></i></button>
                    </div>
                    <form id="header-search-1" action="#" method="GET" class="large-mobile-blog-search">
                        <div class="rn-search-mobile form-group">
                            <button type="submit" class="search-button"><i class="feather-search"></i></button>
                            <input type="text" placeholder="Search ...">
                        </div>
                    </form>
                </div>

             

                <div class="header_admin" id="header_admin">
                    <div class="setting-option rn-icon-list user-account">
                        <div class="icon-box">
                            <a href="{{ auth()->check() ? route('profile') : route('login') }}">
                                <img src="{{ asset($user->profile_image ?? 'assets/images/icons/boy-avater.png') }}" alt="User Avatar">

                            </a>
                            <div class="rn-dropdown">
                                @auth
                                    <div class="rn-inner-top">
                                        <h4 class="title">
                                            <a href="{{ route('profile') }}">
                                                {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}
                                            </a>
                                        </h4>
                                        <span><a href="#">Set Display Name</a></span>
                                    </div>
                                    <ul class="list-inner">
                                        <li><a href="{{ route('profile') }}">My Profile</a></li>
                                        <li><a href="{{ route('edit-profile') }}">Edit Profile</a></li>
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" style="background: none; border: none; padding: 0; color: red; cursor: pointer;">
                                                    Logout
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                @else
                                    <div class="rn-inner-top">
                                        <h4 class="title">
                                            <a href="{{ route('login') }}">Guest</a>
                                        </h4>
                                        <span><a href="{{ route('login') }}">Login to Set Display Name</a></span>
                                    </div>
                                    <ul class="list-inner">
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    </ul>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>

                <div class="setting-option mobile-menu-bar d-block d-xl-none">
                    <div class="hamberger">
                        <button class="hamberger-button">
                            <i class="feather-menu"></i>
                        </button>
                    </div>
                </div>

                <div id="my_switcher" class="my_switcher setting-option">
                    <ul>
                        <li>
                            <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                <img class="sun-image" src="assets/images/icons/sun-01.svg" alt="Sun images">
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                <img class="Victor Image" src="assets/images/icons/vector.svg" alt="Vector Images">
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
<div class="popup-mobile-menu">
    <div class="inner">
        <div class="header-top">
            <div class="logo logo-custom-css">
                <a class="logo-light" href="{{ route('home') }}"><img src="assets/images/logo/logo-white.png" alt="nft-logo"></a>
                <a class="logo-dark" href="{{ route('home') }}"><img src="assets/images/logo/logo-dark.png" alt="nft-logo"></a>
            </div>
            <div class="close-menu">
                <button class="close-button"><i class="feather-x"></i></button>
            </div>
        </div>
        <nav>
            <ul class="mainmenu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>
