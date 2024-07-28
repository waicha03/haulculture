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
        <h1 class="title">
            {{ $categorypost->post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $categorypost->post->body }}</p>    
            </div>
            
        </div>
    
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
        <div class="edit">
            <a href="/posts/{{ $categorypost->id }}/edit">edit</a>
        </div>
        
    </body>
</html>
</x-app-layout>