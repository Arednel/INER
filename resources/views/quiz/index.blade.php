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
    <link rel="stylesheet" href={{ asset('css/quiz.css') }}>

    <script src={{ asset('js/jquery-1.11.1.min.js') }}></script>
    <script src={{ asset('js/bootstrap-collapse.js') }}></script>
    <script src={{ asset('js/quiz.js') }}></script>
</head>

<body>
    @include('components.menu')

    <div class="gallery">
        <div class="container">
            <div class="row gradient templatemo_gallery_wrapper">

                <form method="POST" action="/Quiz/Complete">

                    @csrf

                    <input type="hidden" name="topic_id" value="{{ $topic_id }}">

                    @foreach ($questions as $question)
                        <div class="question_div">
                            <div class="quiz-question-text-container">
                                <span class="quiz-question-text-item">{{ $question->title }}</span>
                            </div>

                            @foreach ($answers[$question->id] as $answer)
                                <div class="quiz-answer-text-container">
                                    <input type="radio" id="question_{{ $question->id }}_answer_{{ $answer->id }}"
                                        name="question[{{ $question->id }}]" value="{{ $answer->id }}" required>

                                    <label for="question_{{ $question->id }}_answer_{{ $answer->id }}"
                                        class="quiz-answer-list">
                                        <div class="quiz-answer-text-container-single question-type-single">
                                            {{ $answer->title }}
                                        </div>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    @endforeach

                    <button type="submit" class="submit_button blue">{!! __('Закончить тест') !!}</button>
                </form>
            </div>
        </div>
    </div>

    @include('components.footer')
</body>

</html>
