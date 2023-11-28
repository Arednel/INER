<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Все темы</title>
</head>

<style>
    .news {
        border: 1px solid black;
        margin: 15px;
    }
</style>

<body>
    <br>
    <a href="/">← На главную</a>

    @foreach ($topics as $topic)
        {!! $topic->body !!}
    @endforeach
</body>

</html>
