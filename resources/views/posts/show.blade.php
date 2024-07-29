<!DOCTYPE HTML>
<x-app-layout>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
          @foreach($tag->posts as $post)
                        <h2 class='title'>
                             <a href="/posts/{{ $post->id }}">タイトル：{{ $post->title }}</a>
                        </h2>
                        <p class='body'>本文：{{ $post->body }}</p>
            @endforeach
        
        <div class="footer">
            <a href="/index">戻る</a>
        </div>
        
        <div class="edit">
            <a href="/posts/{{ $tag->id }}/edit">edit</a>
        </div>
        
    </body>
</html>
</x-app-layout>