<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1>TOKYO TOILET</h1>
        <h2 class="title">
            {{ $post->title }}
        </h2>
        <div class="content">
            <div class="content_post">
                <h4><トイレの詳細とレビュー></h4>
                <p class='body'>{{ $post->body }}</p>   
            </div>
        </div>
        <div class="edit">
            [<a href="/posts/{{ $post->id }}/edit">編集</a>]
        </div>
        <div class="footer">
            [<a href="/">戻る</a>]
        </div>
    </body>
</html>