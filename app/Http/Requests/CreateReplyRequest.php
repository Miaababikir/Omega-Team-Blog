<?php

namespace App\Http\Requests;

use App\Post;
use Illuminate\Foundation\Http\FormRequest;

class CreateReplyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'body' => 'required'
        ];
    }

    public function save(Post $post)
    {
        $post->replies()->create([
            'body' => $this->body,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('posts.show', $post->slug);
    }
}
