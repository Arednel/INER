<!DOCTYPE html>

<html>

<head>
    <title>Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800'
        rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href={{ asset('css/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/templatemo_misc.css') }}>
    <link rel="stylesheet" href={{ asset('css/templatemo_style.css') }}>
    <link rel="stylesheet" href={{ asset('css/animate.css') }}>

    <script src={{ asset('js/jquery-1.11.1.min.js') }}></script>
    <script src={{ asset('js/bootstrap-collapse.js') }}></script>
</head>

<body>
    @include('components.menu')

    @include('components.login')

    @include('components.footer')

</body>

</html>