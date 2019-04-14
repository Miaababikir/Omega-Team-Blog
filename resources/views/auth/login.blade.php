@extends('layouts.app')

@section('container-class', '-mt-12')

@section('body')

    <div class="h-screen flex items-center justify-center">
        <div class="bg-white w-3/5 py-8 px-4 shadow rounded text-center">
            <h2 class="mb-8">Login</h2>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input class="border border-grey-light border-solid py-2 px-3 rounded text-lg w-4/5 mb-4" type="email"
                       name="email" placeholder="Email" required>
                @if ($errors->has('email'))
                    <p class="text-red text-sm mb-2" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </p>
                @endif

                <input class="border border-grey-light border-solid py-2 px-3 rounded text-lg w-4/5 mb-4"
                       type="password" name="password" placeholder="Your password" required>
                @if ($errors->has('password'))
                    <p class="text-red text-sm mb-2" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </p>
                @endif

                <button class="bg-green py-3 px3 rounded text-white w-4/5 hover:bg-green-light mb-6" type="submit">
                    Login
                </button>

            </form>

        </div>
    </div>

@endsection
