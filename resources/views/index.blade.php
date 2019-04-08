@extends('layouts.app')

@section('container-class', '-mt-32')

@section('body')

    @include('components.main-card')

    <div class="flex flex-wrap justify-between mb-12">
        @foreach($posts as $post)
            @component('components.card', ['post' => $post])
            @endcomponent
        @endforeach
    </div>

    @include('components.subscribe')

@endsection
