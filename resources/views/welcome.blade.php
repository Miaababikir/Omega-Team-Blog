@extends('layouts.app')

@section('container-class', '-mt-32')

@section('body')

    @include('components.main-card')

    <div class="w-full bg-teal-lightest shadow text-center py-4 mb-12">
        <p class="text-grey-dark">Visit <a class="no-underline text-xl text-black border-b-2 border-teal hover:text-teal" href="#">www.github.com/Miaababikir</a> Please.</p>
    </div>

    @include('components.card')

    @include('components.subscribe')

@endsection
