<!DOCTYPE html>
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
                     <p class='title'>{{ $categorypost->tag->price->name}}</p>
                      <p class='title'>{{ $categorypost->tag->category->name}}</p>
                    <form action="/posts/{{ $categorypost->post->id }}" id="form_{{ $categorypost->post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $categorypost->post->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        
        
        @foreach ($tags as $tag)
             <p class='title'>{{ $tag->id}}</p>
             <p class='title'>{{ $tag->category->name}}</p>
              <p class='title'>{{ $tag->price->name}}</p>
               <p class='title'>{{ $tag->area->name}}</p>
        @endforeach
        
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