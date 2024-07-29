<!-- body内だけを表示しています。 -->
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $tag->id }}" method="POST">
            @csrf
            @method('PUT')
             @foreach($tag->posts as $post)
                <div class='content__title'>
                    <h2>タイトル</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
                <div class='content__body'>
                    <h2>本文</h2>
                    <input type='text' name='post[body]' value="{{ $post->body }}">
            </div>
            @endforeach
            <div class='tag'>
                <h2>カテゴリー</h2>
                <input type='text' name='' value="{{ $tag->category->category}}">
            </div>
            
   
            <input type="submit" value="保存">
        </form>
    </div>
</body>