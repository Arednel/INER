<!DOCTYPE html>

<html>

<head>
    <title>Topics</title>

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

<style>
    .subject_button {
        font-size: 20px;
        margin-bottom: 60px;
        border: 5px solid white;
        text-align: center;
    }

    .topic_title {
        text-align: center;
        margin-bottom: 20px;
    }

    .topic_body {
        margin-bottom: 20px;
    }

    /* Auto scale image */
    .topic_body img {
        max-width: 1070px;
        height: auto;
    }

    /* To normally show text */
    .topic_body td {
        padding: 0 3px;
    }
</style>

<body>
    @include('components.menu')

    <div class="gallery">
        <div class="container">
            <div class="row gradient templatemo_gallery_wrapper">
                <h2 class="topic_title">{{ $topic->title }}</h2>

                <div class="topic_body">
                    {!! $topic->body !!}
                </div>

                @if ($topic_has_questions)
                    @if ($topic_completed)
                        <br>
                        <div>
                            Ваш результат {{ $user_score_to_hundred }} баллов из 100
                        </div>
                    @else
                        <button class="subject_button blue"
                            onclick="location.href='/Topic/{{ $topic->id }}/quiz'">Перейти к
                            заданию</button>
                    @endif
                @endif
            </div>
        </div>
    </div>

    @include('components.footer')

</body>

</html>
