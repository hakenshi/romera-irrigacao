<header class="p-5 bg-romera-green-50 ">
    <nav class="flex items-center justify-between md:justify-around w-full sticky">
        <div class="flex items-center gap-10">
            <img class="w-16 h-16 md:w-24 md:h-24" src="{{ asset("romera.png") }}" alt="romera-logo">
        </div>
        <div>
            <ul class="flex gap-2 md:gap-10">
                @foreach ($links as $link)
                    <li ><a class="text-sm md:text-base
                        hover:text-romera-green-600
                         " 
                        href="{{ route($link['route']) }}">{{ $link['text'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>
