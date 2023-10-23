<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1>TOKYO TOILET</h1>
        <h2 class="title">トイレ登録情報の編集</h2>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content_title'>
                    <h3>タイトル</h3>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
                <div class='content_body'>
                    <h3>トイレの詳細</h3>
                    <input type='text' name='post[body]' value="{{ $post->body }}">
                </div>
                <input type="submit" value="更新">
            </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>