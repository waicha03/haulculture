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
            @foreach ($categoryposts as $categorypost)
                <div class='post'>
                    <h2 class='title'>
                         <a href="/posts/{{ $categorypost->id }}">{{ $categorypost->post->title }}</a>
                    </h2>
                    <p class='body'>{{ $categorypost->post->body }}</p>
                    <p class='title'>{{ $categorypost->tag->id}}</p>
                     <p class='title'>{{ $categorypost->tag->price->price}}</p>
                      <p class='title'>{{ $categorypost->tag->category->category}}</p>
                       <p class='title'>{{ $categorypost->tag->area->area}}</p>
                    <form action="/posts/{{ $categorypost->id }}" id="form_{{ $categorypost->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $categorypost->post->id }})">delete</button> 
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