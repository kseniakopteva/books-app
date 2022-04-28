<x-layout>
    <div class="bg-gray-100 min-h-screen w-screen">
        <!-- <div class="bg-red-500 h-screen w-screen"> -->
        <div class="max-w-6xl m-auto">
            <div class="max-w-2xl m-auto">
                <h1 class="text-4xl mb-3 pt-4">Book reviews</h1>
                <h2 class="text-2xl mb-3"><a class="text-red-500 italic" href="/">All Books</a></h2>
            </div>
            <div>

                <div class="relative flex sm:inline-flex bg-white rounded mx-3 sm:mx-0">
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button class="py-2 pl-3 pr-9 text-sm font-semibold shadow-sm w-full sm:w-32 text-left flex sm:inline-flex">

                                {{ isset($currentGenre) ? ucwords($currentGenre->name) : 'Genres' }}

                                <x-icon class="absolute pointer-events-none" name="down-arrow" style="right: 12px;"></x-icon>

                            </button>
                        </x-slot>


                        <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>

                        @foreach ($genres as $genre)
                        <x-dropdown-item href="/?genre={{ $genre->slug }}" :active='request()->is("genres/{$genre->slug}")'>
                            {{ ucwords($genre->name) }}
                        </x-dropdown-item>

                        @endforeach
                    </x-dropdown>
                </div>

                <div class="relative flex sm:inline-flex items-cener bg-white rounded">
                    <form method="GET" action="#">
                        <input type="text" name="search" placeholder="Search" class="placeholder-black font-semibold text-sm px-3 py-2" value="{{ request('search') }}">
                    </form>
                </div>

            </div>
            <div class=" lg:grid lg:grid-cols-12 md:grid md:grid-cols-9 sm:grid sm:grid-cols-6">
                @foreach ($books as $book)
                <x-post-card :book="$book" class="col-span-3" />
                @endforeach
            </div>
        </div>
    </div>
</x-layout>