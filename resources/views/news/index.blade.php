<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Все новости</title>

    @trixassets
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

    @foreach ($news_all as $news)
        <div class="news">
            {{ $news->title }}
            <br><br>

            {!! $news->content !!}
        </div>
    @endforeach
</body>

</html>
