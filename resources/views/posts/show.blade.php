@extends('layouts.app')

@section('container-class', '-mt-12')

@section('body')

    <div class="py-32">
        <div class="text-center">
            <p class="text-base font-bold">
                <span class="text-teal uppercase">{{ $post->created_at }}</span> / <span
                    class="text-teal uppercase">{{ $post->subtitle }}</span>
            </p>
            <p class="font-bold text-5xl">{{ $post->title }}</p>
        </div>

        <div class="bg-cover w-full mx-auto rounded max-w-5xl mt-8"
             style="background-image: url('{{ asset($post->image) }}'); height: 32rem"></div>

        <div class="flex justify-center mx-auto -mt-12 mb-12">
            <div class="w-5/6 bg-white py-12 px-10 shadow">
                <p>👋{{ $post->body }}</p>
            </div>
        </div>

        <div class="flex justify-between items-center px-24 pt-12 mb-12">
            <div class="flex items-center">
                <img class="w-12 h-12 rounded-full mr-4" src="{{ asset($post->user->image) }}" alt="avatar">
                <div>
                    <p class="text-base font-bold text-black">{{ $post->user->name }}</p>
                    <p class="text-sm text-grey-dark">Software Engineer, Web Developer, Clean Coder, In Love with
                        Laravel</p>
                </div>
            </div>
            <div>
                <a class="text-grey text-sm no-underline border border-solid border-grey px-3 py-1 rounded-full hover:text-teal hover:border-teal"
                   href="#">Read more</a>
            </div>
        </div>

        @guest
            <div class="flex mx-auto px-10 mb-12 items-center justify-center">
                <p class="text-xl text-grey-dark">Please <a class="text-teal no-underline" href="/login">Login</a> first
                    to start contributing</p>
            </div>
        @endguest

        @auth
            <div class="flex mx-auto px-10 mb-12">
                <div class="p-6">Add Comment</div>
                <div class="flex-1">
                    <form action="{{ route('replies.store', $post->slug) }}" method="POST">
                        @csrf
                        <textarea class="border border-solid border-grey-light shadow w-full mb-3 py-4 px-4 text-lg" name="body" rows="4"
                                  required></textarea>
                        <button class="bg-green-light text-white py-2 px-8 rounded" type="submit">Reply</button>
                    </form>
                </div>
            </div>
        @endauth

        @foreach($post->replies as $reply)

            <div class="flex mx-auto px-10 mb-6">
                <div class="flex justify-center px-4"><img class="w-16 h-16 rounded-full mr-4"
                                                           src="{{ asset($reply->user->image) }}" alt="avatar"></div>
                <div class="flex-1 bg-white py-6 px-10 shadow">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-xl font-semibold">{{ $reply->user->name }}</span>
                        <span class="text-sm text-grey">{{ $reply->created_at }}</span>
                    </div>
                    <p class="text-lg">
                        {{ $reply->body }}
                    </p>
                </div>
            </div>

        @endforeach

    </div>

@endsection
