<!DOCTYPE html>

<head>
    <title>Home</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800'
        rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href={{ asset('css/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/templatemo_misc.css') }}>
    <link rel="stylesheet" href={{ asset('css/templatemo_style.css') }}>
    <link rel="stylesheet" href={{ asset('css/animate.css') }}>

    <!-- JavaScripts -->
    <script src={{ asset('js/jquery-1.11.1.min.js') }}></script> <!-- lightbox -->
    {{-- <script src={{ asset('js/templatemo_custom.js') }}></script> <!-- lightbox --> --}}
    <script src={{ asset('js/jquery.lightbox.js') }}></script>
    <script src={{ asset('js/bootstrap-collapse.js') }}></script>

    @livewireStyles
</head>

<body>
    @livewire('IndexPage')

    @include('components.footer')

    @livewireScripts
</body>

</html>
