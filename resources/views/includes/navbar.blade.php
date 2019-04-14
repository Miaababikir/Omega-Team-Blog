<div class="flex justify-between w-full h-12 p-3 text-white items-center">
    <ul class="list-reset flex">
        <li class="mr-6"><a class="text-white no-underline hover:text-white" href="#">Home</a></li>
        <li class="mr-6"><a class="text-grey no-underline hover:text-white" href="#">Posts</a></li>
        <li class="mr-6"><a class="text-grey no-underline hover:text-white" href="#">Contact</a></li>
        <li class="mr-6"><a class="text-grey no-underline hover:text-white" href="#">About</a></li>
    </ul>

    <ul class="list-reset flex">
        @guest
            <li class="mr-6"><a class="text-grey no-underline hover:text-white"
                                href="{{ route('register') }}">Register</a></li>
        @endguest

        @auth
            <li class="mr-6"><a class="text-grey no-underline hover:text-white"
                                href="{{ route('login') }}">Login</a></li>
        @endauth
    </ul>
</div>
