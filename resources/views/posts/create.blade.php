@extends('layouts.app')

@section('container-class', '-mt-12')

@section('body')

    <div class="h-screen flex items-center justify-center">
        <div class="bg-white w-4/5 py-8 px-4 shadow rounded text-center">
            <h2 class="mb-8">Publish new post</h2>

            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input class="border border-grey-light border-solid py-3 px-4 rounded text-lg w-4/5 mb-4" type="text"
                       name="title" placeholder="Title" required>
                @if ($errors->has('title'))
                    <p class="text-red text-sm mb-2" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </p>
                @endif

                <input class="border border-grey-light border-solid py-3 px-4 rounded text-lg w-4/5 mb-4" type="text"
                       name="subtitle" placeholder="Subtitle" required>
                @if ($errors->has('subtitle'))
                    <p class="text-red text-sm mb-2" role="alert">
                        <strong>{{ $errors->first('subtitle') }}</strong>
                    </p>
                @endif

                <input class="border border-grey-light border-solid py-3 px-4 rounded text-lg w-4/5 mb-4" type="number"
                       name="reading_time" placeholder="Reading time" required>
                @if ($errors->has('reading_time'))
                    <p class="text-red text-sm mb-2" role="alert">
                        <strong>{{ $errors->first('reading_time') }}</strong>
                    </p>
                @endif

                <input class="border border-grey-light border-solid py-3 px-4 rounded text-lg w-4/5 mb-4" type="file"
                       name="image" required>
                @if ($errors->has('image'))
                    <p class="text-red text-sm mb-2" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                    </p>
                @endif

                <textarea class="border border-grey-light border-solid py-3 px-4 rounded text-lg w-4/5 mb-4" type="text"
                          name="body" placeholder="Your post" rows="6" required>
                </textarea>
                @if ($errors->has('body'))
                    <p class="text-red text-sm mb-2" role="alert">
                        <strong>{{ $errors->first('body') }}</strong>
                    </p>
                @endif


                <button class="bg-green py-3 px3 rounded text-white w-4/5 hover:bg-green-light mb-6" type="submit">
                    Publish
                </button>

            </form>

        </div>
    </div>

@endsection
