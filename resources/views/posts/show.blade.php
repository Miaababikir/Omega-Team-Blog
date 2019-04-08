@extends('layouts.app')

@section('container-class', '-mt-12')

@section('body')

    <div class="py-32">
        <div class="text-center">
            <p class="text-base font-bold">
                <span class="text-teal uppercase">08 FEBRUARY 2019</span> / <span class="text-teal uppercase">GETTING STARTED</span>
            </p>
            <p class="font-bold text-5xl">Welcome to Tailwind CSS</p>
        </div>

        <div class="bg-cover w-full mx-auto rounded max-w-5xl mt-8"
             style="background-image: url('https://source.unsplash.com/collection/325867/800x600'); height: 32rem"></div>

        <div class="flex justify-center mx-auto -mt-12 mb-12">
            <div class="w-5/6 bg-white py-12 px-10 shadow">
                <p>👋 Welcome fellow Tailwind CSS and Ghost fan. This starter template is an attempt to replicate the
                    default Ghost theme "Casper" using Tailwind CSS and vanilla Javascript. <br><br><br>
                    1. Maecenas accumsan lacus sit amet elementum porta. Aliquam eu libero lectus. Fusce vehicula dictum
                    mi. In non dolor at sem ullamcorper venenatis ut sed dui. Ut ut est quam. Suspendisse quam quam,
                    commodo sit amet placerat in, interdum a ipsum. Morbi sit amet tellus scelerisque tortor semper
                    posuere. <br><br>
                    2. Morbi varius posuere blandit. Praesent gravida bibendum neque eget commodo. Duis auctor ornare
                    mauris, eu accumsan odio viverra in. Proin sagittis maximus pharetra. Nullam lorem mauris, faucibus
                    ut odio tempus, ultrices aliquet ex. Nam id quam eget ipsum luctus hendrerit. Ut eros magna,
                    eleifend ac ornare vulputate, pretium nec felis. <br><br>
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc vitae
                    pretium elit. Cras leo mauris, tristique in risus ac, tristique rutrum velit. Mauris accumsan tempor
                    felis vitae gravida. Cras egestas convallis malesuada. Etiam ac ante id tortor vulputate pretium.
                    Maecenas vel sapien suscipit, elementum odio et, consequat tellus.
                </p>
            </div>
        </div>

        <div class="flex justify-between items-center px-24 pt-12">
            <div class="flex items-center">
                <img class="w-12 h-12 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="avatar">
                <div>
                    <p class="text-base font-bold text-black">Mosab Ibrahim</p>
                    <p class="text-sm text-grey-dark">Software Engineer, Web Developer, Clean Coder, In Love with Laravel</p>
                </div>
            </div>
            <div>
                <a class="text-grey text-sm no-underline border border-solid border-grey px-3 py-1 rounded-full hover:text-teal hover:border-teal" href="#">Read more</a>
            </div>
        </div>

    </div>

@endsection
