<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\CategoryPost;
use App\Models\Tag;

class PostController extends Controller
{
    public function index(CategoryPost $categorypost,Tag $tag)
    {
        return view('posts.index')->with([
            'categoryposts' => $categorypost->get(),
            ]);
    } 
    
    
    /**
     * 特定IDのpostを表示する
     *
     * @params Object Post // 引数の$postはid=1のPostインスタンス
     * @return Reposnse post view
     */
    public function show(CategoryPost $categorypost)
    {
        return view('posts.show')->with(['categorypost' => $categorypost]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
        //
   public function create(Category $category)
    {
    return view('posts.create')->with(['categories' => $category->get()]);
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

         return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
    $post->delete();
    return redirect('/');
    }
    
}
