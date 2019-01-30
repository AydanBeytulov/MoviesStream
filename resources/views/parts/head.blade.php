<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Movies') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">

<link rel="stylesheet" href="{{ asset('icons/fontawesome/css/fontawesome-all.min.css') }}"><!-- FontAwesome Icons -->
<link rel="stylesheet" href="{{ asset('icons/iconsmind/styles.min.css') }}"><!-- iconsmind.com Icons -->

<!-- Required Framework JavaScript -->
<script src="{{ asset('js/libs/popper.min.js') }}" defer></script><!-- Bootstrap Popper/Extras JS -->
<!-- All JavaScript in Footer -->


<!-- Additional Plugins and JavaScript -->
<script src="{{ asset('js/libs/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('js/navigation.js') }}" defer></script><!-- Header Navigation JS Plugin -->
<script src="{{ asset('js/jquery.flexslider-min.js') }}" defer></script><!-- FlexSlider JS Plugin -->
<script src="{{ asset('js/jquery-asRange.min.js') }}" defer></script><!-- Range Slider JS Plugin -->
<script src="{{ asset('js/circle-progress.min.js') }}" defer></script><!-- Circle Progress JS Plugin -->
<script src="{{ asset('js/afterglow.min.js') }}" defer></script><!-- Video Player JS Plugin -->
<script src="{{ asset('js/script.js') }}" defer></script><!-- Custom Document Ready JS -->
<script src="{{ asset('js/script-dashboard.js') }}" defer></script><!-- Custom Document Ready for Dashboard Only JS -->
