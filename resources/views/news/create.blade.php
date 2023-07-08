<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Создать новость</title>

    @trixassets
</head>

<body>
    <br>
    <a href="/">← На главную</a>

    <br><br><br>
    <form method="POST" action="/news">
        @csrf

        <label for="">Заголовок</label>
        <input type="text" name="title" required>
        <br><br>

        @trix(\App\News::class, 'content')

        <input type="submit">
    </form>
</body>

</html>
