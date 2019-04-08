<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;


class ShowPostsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_see_all_posts()
    {

        $posts = new EloquentCollection([
            factory(Post::class)->create(),
            factory(Post::class)->create(),
            factory(Post::class)->create(),
        ]);

        $response = $this->get('/');

        $posts->assertEquals($response->data('posts'));

    }
}
