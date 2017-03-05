<div class="headerImage">
    <div class="parallax-container">
        <div class="parallax"><img src="{{ asset('img/parallax1.jpg') }}"></div>
    </div>
</div>
<nav id="topMenu">
    <div  class="nav-wrapper blue darken-1">
        <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
        <div class="container">
            <ul class="left hide-on-med-and-down">
                <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                <li class="{{ Request::path() == 'news' ? 'active' : '' }}"><a href="{{ url('news') }}">News</a>
                </li>
                <li class="{{ Request::path() == 'servers' ? 'active' : '' }}"><a href="{{ url('servers') }}">Game
                        Servers</a></li>
                <li class="{{ Request::path() == 'about' ? 'active' : '' }}"><a href="{{ url('about') }}">About
                        us</a>
                </li>
                <li class="{{ Request::path() == 'contact' ? 'active' : '' }}"><a
                            href="{{ url('contact') }}">Contact</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a id="loginButton" href="#loginBox">Login</a></li>
            </ul>
        </div>
        <div class="side-nav" id="mobile-menu">
            <h4 class="black-text center-align">Menu</h4>
            <ul>
                <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                <li class="{{ Request::path() == 'news' ? 'active' : '' }}"><a href="{{ url('news') }}">News</a>
                </li>
                <li class="{{ Request::path() == 'servers' ? 'active' : '' }}"><a href="{{ url('servers') }}">Game
                        Servers</a></li>
                <li class="{{ Request::path() == 'about' ? 'active' : '' }}"><a href="{{ url('about') }}">About
                        us</a>
                </li>
                <li class="{{ Request::path() == 'contact' ? 'active' : '' }}"><a
                            href="{{ url('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
