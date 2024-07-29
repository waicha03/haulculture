<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\CategoryPost;
use App\Models\Tag;

class PostController extends Controller
{
    public function index(Tag $tag)
    {
        return view('posts.index')->with([
            'tags' => $tag->get(),
            ]);
    } 
    
    
    /**
     * 特定IDのpostを表示する
     *
     * @params Object Post // 引数の$postはid=1のPostインスタンス
     * @return Reposnse post view
     */
    public function show(Tag $tag)
    {
        return view('posts.show')->with(['tag' => $tag]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
        //
   public function create(Tag $tag)
    {
    return view('posts.create')->with(['tag' => $tag->get()]);
    }
    
    public function store(PostRequest $request, Tag $tag)
    {
        $input = $request['post'];
        $input = $request[''];
        $post->fill($input)->save();
        return redirect('/posts/' . $tag->id);
    }
    
    public function edit(Tag $tag)
    {
        return view('posts.edit')->with(['tag' => $tag]);
    }
    
    public function update(PostRequest $request,Tag $tag)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

         return redirect('/posts/' . $post->id);
    }
    
    public function delete(Tag $tag)
    {
    $test->delete();
    return redirect('/');
    }
    
}
