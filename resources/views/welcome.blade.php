@extends('layouts.app')

@section('body')

    @include('components.main-card')

    <div class="w-full h-16 bg-teal-lightest shadow text-center py-4 mb-12">
        <p class="text-grey-dark">Visit <a class="no-underline text-xl text-black border-b-2 border-teal hover:text-teal" href="#">www.github.com/Miaababikir</a> Please.</p>
    </div>

    @include('components.card')

@endsection
