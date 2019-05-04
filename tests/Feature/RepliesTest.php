<?php

namespace Tests\Feature;

use App\Post;
use App\Reply;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RepliesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_see_post_replies()
    {
        $reply = factory(Reply::class)->create();

        $this->get("/posts/{$reply->post->slug}")
            ->assertSee($reply->body);
    }

    /** @test */
    public function auth_user_can_create_reply_to_post()
    {
        $this->loginUser();

        $post = factory(Post::class)->create();
        $reply = factory(Reply::class)->make();

        $this->post("/posts/{$post->slug}/replies", [
            'body' => $reply->body
        ])
            ->assertRedirect("/posts/{$post->slug}");

    }

    /** @test */
    public function not_auth_user_can_not_create_reply_to_post()
    {
        $this->withExceptionHandling();

        $post = factory(Post::class)->create();
        $reply = factory(Reply::class)->make();

        $this->post("/posts/{$post->slug}/replies", [
            'body' => $reply->body
        ])
            ->assertRedirect("/login");

    }

    /** @test */
    public function auth_user_can_update_his_reply()
    {
        $reply = factory(Reply::class)->create();

        $this->loginUser($reply->owner);

        $this->put("/replies/{$reply->id}", [
            'body' => "updated reply body"
        ])
            ->assertStatus(Response::HTTP_ACCEPTED);

    }

    /** @test */
    public function Un_auth_user_can_not_update_reply()
    {
        $this->withExceptionHandling();

        $this->loginUser();

        $reply = factory(Reply::class)->create();

        $this->put("/replies/{$reply->id}", [
            'body' => "updated reply body"
        ])
            ->assertStatus(Response::HTTP_FORBIDDEN);
    }

    /** @test */
    public function auth_user_can_delete_his_reply()
    {
        $reply = factory(Reply::class)->create();

        $this->loginUser($reply->owner);

        $this->delete("/replies/{$reply->id}", [
            'body' => "updated reply body"
        ])
            ->assertStatus(Response::HTTP_ACCEPTED);
    }

    /** @test */
    public function un_auth_user_can_not_delete_a_reply()
    {
        $this->withExceptionHandling();

        $reply = factory(Reply::class)->create();

        $this->loginUser();

        $this->delete("/replies/{$reply->id}")
            ->assertStatus(Response::HTTP_FORBIDDEN);
    }

}
