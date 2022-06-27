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
        </div>
        <div class="justify-self-end text-center self-center">

            <form action="/books/{{ $quote->book->slug }}/quotes/{{ $quote->id }}/favorite" method="POST">
                @csrf
                <button type="submit" class="text-red-400">
                    ♥Add as a favorite
                </button>
            </form>

            @if ($quote->author->username === auth()->user()?->username)
                <div>
                    <form action="/books/{{ $quote->book->slug }}/quotes/{{ $quote->id }}/destroy" method="POST"
                        class="float-right p-1 text-gray-600">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                    @if ($quote->created_at->format('Y-m-d') === Carbon\Carbon::today()->format('Y-m-d'))
                        <form action="/books/{{ $quote->book->slug }}/quotes/{{ $quote->id }}/edit" method="POST"
                            class="float-right p-1 text-gray-600">
                            @csrf
                            <button type="submit">Edit</button>
                        </form>
                    @endif
                </div>
            @endif
        </div>

    </div>
</article>
