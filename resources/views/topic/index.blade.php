<!DOCTYPE html>

<html>

<head>
    <title>Topics</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800'
        rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href={{ asset('css/fontawesome-all.css') }}>
    <link rel="stylesheet" href={{ asset('css/font-awesome.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/templatemo_misc.css') }}>
    <link rel="stylesheet" href={{ asset('css/templatemo_style.css') }}>
    <link rel="stylesheet" href={{ asset('css/animate.css') }}>
    <link rel="stylesheet" href={{ asset('css/buttons.css') }}>

    <script src={{ asset('js/jquery-1.11.1.min.js') }}></script>
    <script src={{ asset('js/bootstrap-collapse.js') }}></script>
    <script src={{ asset('js/jquery.lightbox.js') }}></script>
    <script src={{ asset('js/templatemo_custom.js') }}></script>
</head>

<style>
    .orange {
        background-color: orange;
        background-repeat: repeat-x;
        padding: 5px 13px;
        color: #ffffff;
        outline: 1px solid #026cbe;
        border: 1px solid #white;
    }

    .orange:hover {
        background: red;
    }
</style>

<body>
    @include('components.menu')

    <div class="gallery">
        <div class="container">
            <div class="row gradient templatemo_gallery_wrapper">

                @php
                    $index = 1;
                @endphp
                @foreach ($topics as $topic)
                    {{-- Every 3 new row starts --}}
                    @if ($index == 1)
                        <div class="row">
                    @endif

                    <div class="col-sm-4">
                        @if ($topic->required_topic_id)
                            @if ($topic->canStartTopic)
                                <button class="subject_button blue"
                                    onclick="location.href='/Topic/{{ $topic->id }}'">{{ $topic->title }}</button>
                            @else
                                <button class="subject_button orange"
                                    onclick="alert('{!! __('Сначала выполните тему') !!} {{ $topic->requiredTopicTitle }} {!! __('в дисциплине') !!} {{ $topic->requiredSubjectTitle }}')">
                                    {{ $topic->title }}</button>
                            @endif
                        @else
                            <button class="subject_button blue"
                                onclick="location.href='/Topic/{{ $topic->id }}'">{{ $topic->title }}</button>
                        @endif
                    </div>

                    {{-- Every 3 new row starts --}}
                    @php
                        if ($index == 3) {
                            echo '</div>';
                        }

                        $index++;
                        if ($index == 4) {
                            $index = 1;
                        }
                    @endphp
                @endforeach

            </div>
        </div>
    </div>

    @include('components.footer')

</body>

</html>
