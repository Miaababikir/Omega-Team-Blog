@extends('layouts.app')

@section('container-class', '-mt-12')

@section('body')

    <div class="py-32">
        <div class="text-center">
            <p class="text-base font-bold">
                <span class="text-teal uppercase">08 FEBRUARY 2019</span> / <span class="text-teal uppercase">{{ $post->subtitle }}</span>
            </p>
            <p class="font-bold text-5xl">{{ $post->title }}</p>
        </div>

        <div class="bg-cover w-full mx-auto rounded max-w-5xl mt-8"
             style="background-image: url('https://source.unsplash.com/collection/325867/800x600'); height: 32rem"></div>

        <div class="flex justify-center mx-auto -mt-12 mb-12">
            <div class="w-5/6 bg-white py-12 px-10 shadow">
                <p>👋{{ $post->body }}</p>
            </div>
        </div>

        <div class="flex justify-between items-center px-24 pt-12">
            <div class="flex items-center">
                <img class="w-12 h-12 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="avatar">
                <div>
                    <p class="text-base font-bold text-black">{{ $post->user->name }}</p>
                    <p class="text-sm text-grey-dark">Software Engineer, Web Developer, Clean Coder, In Love with Laravel</p>
                </div>
            </div>
            <div>
                <a class="text-grey text-sm no-underline border border-solid border-grey px-3 py-1 rounded-full hover:text-teal hover:border-teal" href="#">Read more</a>
            </div>
        </div>

    </div>

@endsection
