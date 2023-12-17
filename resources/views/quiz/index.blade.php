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
</head>

<style>
    .submit_button {
        font-size: 20px;
        margin-left: 20px;
        margin-bottom: 60px;
        border: 5px solid white;
        height: 60px;
        width: 60%;
        margin-left: 20%;
        text-align: center;
    }

    .quiz-question-container {
        width: 100%;
        max-width: none;
    }

    .quiz-question-text-container {
        text-align: center;
        margin-bottom: 20px;
    }

    input[type=radio] {
        /* To hide radio button */
        /* display: none; */
    }
</style>

<body>
    @include('components.menu')

    <div class="gallery">
        <div class="container">
            <div class="row gradient templatemo_gallery_wrapper">

                <form method="POST" action="/Quiz/Complete">

                    @csrf

                    <input type="hidden" name="topic" value="{{ $topic_id }}">

                    @foreach ($questions as $question)
                        <div class="quiz-question-text-container">
                            <span class="quiz-question-text-item">{{ $question->title }}</span>
                        </div>

                        @foreach ($answers[$question->id] as $answer)
                            <div class="quiz-answer-text-container">
                                <input type="radio" id="question_{{ $question->id }}_answer_{{ $answer->id }}"
                                    name="question_{{ $question->id }}" value="{{ $answer->id }}" required>

                                <label for="question_{{ $question->id }}_answer_{{ $answer->id }}"
                                    class="quiz-answer-list">
                                    <div
                                        class="quiz-answer-text-container-single unselected-answer question-type-single">
                                        <li class="quiz-answer-text-item">{{ $answer->title }}</li>
                                    </div>
                                </label>
                            </div>
                        @endforeach
                    @endforeach

                    <button type="submit" class="submit_button blue">Закончить тест</button>
                </form>
            </div>
        </div>
    </div>

    @include('components.footer')

</body>

</html>
