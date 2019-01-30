<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('parts.head')
</head>
<body>
    <div id="app">
        <div id="sidebar-bg">

            @include('parts.side')

            @yield('content')

        </div><!-- close #sidebar-bg-->
    </div>

    @include('parts.footer')

</body>
</html>
