<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Редактирование темы</title>

    @trixassets
</head>

<body>
    <br>
    <a href="/">← На главную</a>

    <br><br><br>
    <form method="POST" action="/news/{{ $news->id }}">

        @csrf

        <input type="hidden" name="_method" value="put" />

        <label for="">Заголовок</label>
        <input type="text" name="title" value="{{ $news->title }}"required>
        <br><br>

        {!! $news->trix('content') !!}

        <input type="submit">
    </form>
</body>

</html>
