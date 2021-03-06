<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Http\UploadedFile;
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

    /** @test */
    public function a_user_can_see_specific_post()
    {

        $post = factory(Post::class)->create();

        $this->get('/posts/' . $post->slug)
            ->assertSee($post->body);

    }

    /** @test */
    public function auth_user_can_create_post()
    {
        $this->loginUser();

        $post = factory(Post::class)->make();

        $this->post('/posts', [
            'title' => $post->title,
            'subtitle' => $post->subtitle,
            'body' => $post->body,
            'reading_time' => $post->reading_time,
            'image' => UploadedFile::fake()->image('image-series.png'),
        ]);

        $this->assertDatabaseHas('posts', ['title' => $post->title]);

    }

    /** @test */
    public function not_auth_user_can_not_create_post()
    {
        $this->withExceptionHandling();

        $post = factory(Post::class)->make();

        $this->post('/posts', [
            'title' => $post->title,
            'subtitle' => $post->subtitle,
            'body' => $post->body,
            'reading_time' => $post->reading_time,
            'image' => UploadedFile::fake()->image('image-series.png'),
        ])
            ->assertRedirect('/login');

        $this->assertDatabaseMissing('posts', ['title' => $post->title]);

    }
}
