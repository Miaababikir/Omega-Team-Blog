@extends('layouts.app')

@section('container-class', '-mt-12')

@section('body')

    <div class="h-screen flex items-center justify-center">
        <div class="bg-white w-3/5 py-8 px-4 shadow rounded text-center">
            <h2 class="mb-8">Register</h2>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input class="border border-grey-light border-solid py-2 px-3 rounded text-lg w-4/5 mb-4" type="text"
                       name="name" placeholder="Full name" required>
                @if ($errors->has('name'))
                    <p class="text-red text-sm mb-2" role="alert">
                        <strong>{{ $errors->first('name') }} This field is required</strong>
                    </p>
                @endif

                <input class="border border-grey-light border-solid py-2 px-3 rounded text-lg w-4/5 mb-4" type="email"
                       name="email" placeholder="Email" required>
                @if ($errors->has('email'))
                    <p class="text-red text-sm mb-2" role="alert">
                        <strong>{{ $errors->first('email') }} This field is required</strong>
                    </p>
                @endif

                <input class="border border-grey-light border-solid py-2 px-3 rounded text-lg w-4/5 mb-4"
                       type="password" name="password" placeholder="Your password" required>
                @if ($errors->has('password'))
                    <p class="text-red text-sm mb-2" role="alert">
                        <strong>{{ $errors->first('password') }} This field is required</strong>
                    </p>
                @endif

                <input class="border border-grey-light border-solid py-2 px-3 rounded text-lg w-4/5 mb-4"
                       type="password" name="password_confirmation" placeholder="Confirm your password" required>
                @if ($errors->has('password_confirmation'))
                    <p class="text-red text-sm mb-2" role="alert">
                        <strong>{{ $errors->first('password_confirmation') }} This field is required</strong>
                    </p>
                @endif

                <button class="bg-green py-3 px3 rounded text-white w-4/5 hover:bg-green-light mb-6" type="submit">
                    Create Account
                </button>

                <p class="text-sm text-grey-dark">By signing up, you agree to the Terms of Service and Privacy
                    Policy</p>

            </form>

        </div>
    </div>

@endsection
