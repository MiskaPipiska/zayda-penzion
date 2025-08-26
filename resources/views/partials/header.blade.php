@php
    $excluded = ['index', 'accommodation-detail'];
@endphp

<header class="{{ in_array(Route::currentRouteName(), $excluded) ? '' : 'header-secondary' }}">
    <div class="navbar mobile-menu">
        <div class="nav nav-bottom">
            <div class="menu">
                <a href="">o nás</a>
                <a href="{{ route('accommodation') }}">ubytovanie</a>
                <a href="">menu</a>
                <a href="">eventy</a>
                <a href="">alpaky</a>
                <a href="">aktivity</a>
                <a href="{{ route('price-list') }}">cenník</a>
                <a href="">kontakt</a>
            </div>
            <div class="language">
                <a href="">EN</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="item-wrap">
            <div class="logo-wrap">
                <a href="{{ route('index') }}">
                    <img src="{{asset('images/header/logo.svg')}}" alt="logo">
                </a>
            </div>
            <div class="menu-wrap">
                <div class="menu">
                    <a href="">o nás</a>
                    <a href="{{ route('accommodation') }}" class="{{ Route::currentRouteName() === 'accommodation' ? 'active' : '' }}">ubytovanie</a>
                    <a href="">menu</a>
                    <a href="">eventy</a>
                    <a href="">alpaky</a>
                    <a href="">aktivity</a>
                    <a href="{{ route('price-list') }}">cenník</a>
                    <a href="">kontakt</a>
                </div>
                <div class="language">
                    <a href="">EN</a>
                </div>
                <div class="nav-toggler">
                    <div class="hamburger-wrapper">
                        <div id="hamburger" class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
