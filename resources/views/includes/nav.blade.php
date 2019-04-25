<!-- Header section start -->
<header class="header-section sp-pad">
    <div class="nav-switch">
        <i class="fa fa-bars"></i>
    </div>
    <nav class="main-menu">
        <ul>
            <li><h3 class="site-logo">{{ config('app.name', 'Blog') }}</h3></li>
            <li><a href="/">Home</a></li>
            <li><a href="/places">Places</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/about">my creator</a></li>
        </ul>
    </nav>

    <!-- Here goes all of the right alligned login nav items -->

    <!-- Right Side Of Navbar -->
    <nav class="main-menu-right">
        <ul>
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->username }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <!-- creates an anchor and sets href to the logout route when clicked -->
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </nav>
</header>
<!-- Header section end -->
