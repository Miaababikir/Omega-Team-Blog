<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body class="bg-grey-lighter font-sans antialiased text-black leading-tight">
<div id="app">
    @include('includes.header')
    <div class="container mx-auto bg-transparent -mt-32">
        @include('includes.navbar')

        <div class="bg-grey-lighter w-full text-2xl text-grey-darkest leading-normal rounded-t">
            @yield('body')
        </div>

    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
