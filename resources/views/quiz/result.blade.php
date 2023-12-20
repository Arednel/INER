<!DOCTYPE html>

<html>

<head>
    <title>Результат</title>

    <link rel="stylesheet" href="{{ asset('css/result.css') }}">
</head>

<body>
    <h1>Ваш результат</h1>
    <div class="result-container">
        <div class="result">
            <span>Вы набрали баллов:</span>
            <span>{{ $user_score_to_hundred }}</span>
        </div>
        <div class="result">
            <span>Максимум баллов:</span>
            <span>100</span>
        </div>
        <div class="button-container">
            <button onclick="window.location.href='/'" class="button-standard">Вернуться на главную</button>
        </div>
    </div>
</body>

</html>
