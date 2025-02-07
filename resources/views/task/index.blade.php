<!DOCTYPE html>

<html>

<head>
    <title>Task</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800'
        rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href={{ asset('css/fontawesome-all.css') }}>
    <link rel="stylesheet" href={{ asset('css/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/templatemo_misc.css') }}>
    <link rel="stylesheet" href={{ asset('css/templatemo_style.css') }}>
    <link rel="stylesheet" href={{ asset('css/animate.css') }}>

    <script src={{ asset('js/jquery-1.11.1.min.js') }}></script>
    <script src={{ asset('js/bootstrap-collapse.js') }}></script>
    <script src={{ asset('js/jquery.lightbox.js') }}></script>
    <script src={{ asset('js/templatemo_custom.js') }}></script>
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

    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 20px;
        outline: none;

        border: none;
        border-bottom: 0.4vh solid #3e41df;
        font-size: clamp(16px, 3vh, 24px);
        background-color: #F7F4F4;
        box-sizing: border-box;

        border-top-right-radius: 1vh;
        border-top-left-radius: 1vh;
    }
</style>

<body>
    @include('components.menu')

    <div class="gallery">
        <div class="container">
            <div class="row gradient templatemo_gallery_wrapper">
                <h2 class="topic_title">{{ $task->title }}</h2>

                <div class="topic_body">
                    {!! $task->body !!}
                </div>

                <form method="POST" action="/Task/Complete">

                    @csrf

                    <input type="hidden" name="topic_id" value="{{ $topic_id }}">
                    <input type="hidden" name="task_id" value="{{ $task->id }}">

                    <textarea id="body" type="textarea" name="body" placeholder="{!! __('Введите ваш ответ') !!}" rows="8" required></textarea>
                    <br><br>
                    <button type="submit" class="submit_button blue">{!! __('Отправить ответ') !!}</button>
                </form>

            </div>
        </div>
    </div>

    @include('components.footer')

</body>

</html>
