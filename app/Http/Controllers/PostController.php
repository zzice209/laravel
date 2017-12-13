<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{


    public function  create()
    {
        return view('posts.create');
    }

    public function update()
    {
        return view('post.update');
    }
    public function show($postid)
    {
        $post = Post::findOrFail($postid);
        $post->delete();
        return view('posts.show', compact('post'));
    }

    public function store(Request $request){
        $user = Auth::user();
        $post = Post::create([
            'title' => $request->title,
            'content'=> $request->post_content,
            'user_id'=> $user->id
        ]);
        return redirect('/posts');
    }

}
