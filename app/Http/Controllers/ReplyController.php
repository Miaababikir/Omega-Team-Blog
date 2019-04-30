<?php

namespace App\Http\Controllers;

use App\Post;
use App\Reply;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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

    /**
     * @param Reply $reply
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Reply $reply, Request $request)
    {
        $this->authorize('update', $reply);

        $reply->update([
            'body' => $request->body
        ]);

        return response('updated', Response::HTTP_ACCEPTED);
    }

    /**
     * @param Reply $reply
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @throws \Exception
     */
    public function delete(Reply $reply)
    {
        $this->authorize('update', $reply);

        $reply->delete();

        return response('updated', Response::HTTP_ACCEPTED);
    }
}
