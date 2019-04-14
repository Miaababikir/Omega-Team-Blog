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





















    {{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
    {{--<div class="col-md-8">--}}
    {{--<div class="card">--}}
    {{--<div class="card-header">{{ __('Register') }}</div>--}}

    {{--<div class="card-body">--}}
    {{--<form method="POST" action="{{ route('register') }}">--}}
    {{--@csrf--}}

    {{--<div class="form-group row">--}}
    {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}

    {{--@if ($errors->has('name'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('name') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row">--}}
    {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

    {{--@if ($errors->has('email'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('email') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row">--}}
    {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

    {{--@if ($errors->has('password'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('password') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row">--}}
    {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row mb-0">--}}
    {{--<div class="col-md-6 offset-md-4">--}}
    {{--<button type="submit" class="btn btn-primary">--}}
    {{--{{ __('Register') }}--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection
