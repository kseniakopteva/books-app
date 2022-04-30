<x-layout>
    <div class="bg-gray-100 min-h-screen w-screen">
        <div class="max-w-6xl m-auto pb-10">
            <div class="max-w-2xl m-auto">
                <h1 class="text-4xl mb-3 pt-4">Book reviews</h1>
                <h2 class="text-2xl mb-3"><a class="text-red-500 italic" href="/">All Books</a></h2>
            </div>
            <div>

                <div class="relative flex sm:inline-flex bg-white rounded mx-3 sm:mx-0">
                    <x-genre-dropdown />
                </div>

                <div class="relative flex sm:inline-flex items-cener bg-white rounded">
                    <form method="GET" action="#">

                        @if(request('genre'))
                        <input type="hidden" name="genre" value="{{ request('genre') }}">
                        @endif

                        <input type="text" name="search" placeholder="Search" class="placeholder-black font-semibold text-sm px-3 py-2" value="{{ request('search') }}">
                    </form>
                </div>

            </div>

            @if ($books->count())

            <div class=" lg:grid lg:grid-cols-12 md:grid md:grid-cols-9 sm:grid sm:grid-cols-6">
                @foreach ($books as $book)
                <x-post-card :book="$book" class="col-span-3" />
                @endforeach
            </div>

            {{ $books->links() }}

            @else
            <p class="text-center text-stone-600 mt-20 bg-white max-w-xl m-auto">No books here:/</p>
            @endif
        </div>
    </div>
</x-layout>
