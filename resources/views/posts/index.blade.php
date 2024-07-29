<!DOCTYPE html>
<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($tags as $tag)
                <div class='post'>
                   @foreach($tag->posts as $post)
                        <h2 class='title'>
                             <a href="/posts/{{ $tag->id }}">タイトル：{{ $post->title }}</a>
                        </h2>
                        <p class='body'>本文：{{ $post->body }}</p>
                    @endforeach
                     <p class='title'>値段：{{ $tag->price->price}}</p>
                      <p class='title'>カテゴリー：{{ $tag->category->category}}</p>
                       <p class='title'>エリア：{{ $tag->area->area}}</p>
                    <form action="/posts/{{ $tag->id }}" id="form_{{ $tag->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $tag->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        
        
        
        <a href='/posts/create'>create</a>
        
        <script>
            function deletePost(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
        
    </body>
</html>
</x-app-layout>