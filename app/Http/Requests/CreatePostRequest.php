<?php

namespace App\Http\Requests;

use App\Post;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{

    private $filename;

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
            'title' => 'required',
            'subtitle' => 'required',
            'reading_time' => 'required',
            'body' => 'required',
            'image' => 'required'
        ];
    }

    public function save()
    {
        Post::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'slug' => str_slug($this->title),
            'body' => $this->body,
            'reading_time' => $this->reading_time,
            'image' => $this->filename,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('home');
    }

    public function uploadPostImage()
    {
        $uploadedImage = $this->image;

        $this->filename = 'images/posts/' . $uploadedImage->store($this->filename, 'posts');

        return $this;
    }
}
