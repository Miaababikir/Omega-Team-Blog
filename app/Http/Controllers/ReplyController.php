<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReplyRequest;
use App\Http\Requests\UpdateReplyRequest;
use App\Post;
use App\Reply;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ReplyController extends Controller
{
    public function store(Post $post, CreateReplyRequest $request)
    {
        return $request->save($post);
    }

    /**
     * @param Reply $reply
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Reply $reply, UpdateReplyRequest $request)
    {
        // TODO Find way to refactor this
        $this->authorize('update', $reply);

        return $request->save($reply);
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
