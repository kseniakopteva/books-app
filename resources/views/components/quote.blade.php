@props(['quote'])
<article {{ $attributes->merge(['class' => 'bg-white p-8 rounded-sm']) }}>
    <div class="flex space-x-4">
        <div class="flex-shrink-0 self-start">
            <img class="p-5 opacity-50"
                src="https://www.themillions.com/wp-content/uploads/2015/04/Quote-mark-blackandwhite.png" alt=""
                width="70" height="70">
        </div>
        <div class="flex-grow self-start">
            <header class="mb-2">
                <h3 class="text-xs">
                    Posted by <a class="text-red-400 hover:underline hover:text-red-500"
                        href="/profile/{{ $quote->author->username }}">{{ $quote->author->username }}</a>
                </h3>
            </header>
            <p class="text-2xl italic ">
                {{ $quote->body }}
            </p>
            @if ($quote->author->username === auth()->user()?->username)
                <div class="flex justify-start mt-2">
                    <form action="/books/{{ $quote->book->slug }}/quotes/{{ $quote->id }}/destroy" method="POST">
                        @csrf
                        <x-button :extrasmall="true">Delete</x-button>
                    </form>
                    {{-- @if ($quote->created_at->format('Y-m-d') === Carbon\Carbon::today()->format('Y-m-d')) --}}
                    @if ($quote->created_at->format('h') < Carbon\Carbon::now()->subHours(3)->format('h'))
                        <form action="/books/{{ $quote->book->slug }}/quotes/{{ $quote->id }}/edit" method="POST">
                            @csrf
                            <x-button :extrasmall="true">Edit</x-button>
                        </form>
                    @endif
                </div>
            @endif
        </div>
        <div class="justify-self-end text-center self-center">

            <form action="/books/{{ $quote->book->slug }}/quotes/{{ $quote->id }}/favorite" method="POST">
                @csrf

                <x-button :small="true">♥Add as a favorite</x-button>
            </form>


        </div>

    </div>
</article>
