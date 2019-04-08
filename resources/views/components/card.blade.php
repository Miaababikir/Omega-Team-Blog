{{--Card--}}
<div class="w-1/2 flex flex-col flex-grow flex-shrink  p-6">
    <div class="flex-1 bg-white shadow-lg overflow-hidden rounded">
        <img class="w-full h-64" src="{{ $post->image }}" alt="">
        <div class="p-3">
            <p class="text-grey text-sm uppercase">{{ $post->subtitle }}</p>
            <a class="text-black font-semibold text-lg">{{ $post->title }}</a>
            <p class="ext-grey-darkest text-base font-serif">{{ $post->body }}</p>
        </div>
    </div>
    <div class="flex-none bg-white mt-auto rounded-t-none rounded-b shadow-lg overflow-hidden">
        <div class="flex justify-between items-center p-6">
            <div class=""><img class="rounded-full w-8 h-8" src="http://i.pravatar.cc/300" alt=""></div>
            <div class="text-grey-dark text-sm">{{ $post->reading_time }} MIN READ</div>
        </div>
    </div>
</div>

