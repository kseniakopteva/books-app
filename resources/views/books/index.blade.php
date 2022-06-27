<x-layout>
    <div class="max-w-6xl m-auto pb-10">

        <h1 class="text-4xl mt-8"><a href="/">Library</a>
            @if (request('author'))
            <span>[ </span><span class="text-red-400">{{ \App\Models\Author::where('slug',
                request()->input('author'))->first()->name }}</span><span> ]</span>@endif

            @if (request('genre'))
            <span>[ </span><span class="text-red-400">{{ ucwords(request('genre')) }}</span><span> ]</span>@endif
        </h1>
        <h2 class="text-lg italic mt-3">Browse all books, filter by genre, author and specific words!</h2>

        <div class="mt-5">
            <div class="relative flex sm:inline-flex bg-white rounded mx-10 my-3 sm:mx-0">
                <x-genre-dropdown />
            </div>

            <div class="relative flex sm:inline-flex items-cener bg-white rounded">
                <form method="GET" action="#">

                    @if (request('genre'))
                    <input type="hidden" name="genre" value="{{ request('genre') }}">
                    @endif

                    <input type="text" name="search" placeholder="Search"
                        class="placeholder-black font-semibold text-sm px-3 py-2" value="{{ request('search') }}">
                </form>
            </div>
        </div>

        @if ($books->count())
        <div class=" lg:grid lg:grid-cols-12 md:grid md:grid-cols-9 sm:grid sm:grid-cols-6 mb-10 mt-3 -mx-3">
            @foreach ($books as $book)
            <x-book-card :book="$book" class="col-span-3 mb-6 mx-3" />
            @endforeach
        </div>

        {{-- ------------------------------- pagination ------------------------------- --}}
        {{ $books->links() }}

        @else
        @if (request('search'))
        <p class="text-center text-stone-600 mt-20 p-5 bg-white max-w-xl m-auto">We couldn't find anything:/</p>
        @else
        <p class="text-center text-stone-600 mt-20 p-5 bg-white max-w-xl m-auto">No books here:/</p>
        @endif
        @endif
    </div>
</x-layout>
