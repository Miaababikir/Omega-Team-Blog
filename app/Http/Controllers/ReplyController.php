<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Post $post, Request $request)
    {
        $this->validate($request, [ 'body' => 'required' ]);

        $post->replies()->create([
            'body' => $request->body,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('posts.show', $post->slug);
    }
}
