<header id="videohead-pro" class="sticky-header">
    <div id="video-logo-background"><a href="/" style="font-weight: bold; font-size:23px;text-decoration:underline;">MOVIE<span style="color:red">TUBE</span></a></div>

    @include('parts.filters')

    @include('parts.mobile_menu')

</header>

<nav id="sidebar-nav"><!-- Add class="sticky-sidebar-js" for auto-height sidebar -->
    <ul id="vertical-sidebar-nav" class="sf-menu">

        <li class="normal-item-pro current-menu-item">
            <a href="{{ route("index") }}">
                <span class="icon-Reel"></span>
                Movies
            </a>
        </li>

    </ul>
    <div class="clearfix"></div>
</nav>
