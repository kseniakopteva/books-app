<x-layout>
    <div class="p-8 mt-2 max-w-5xl m-auto bg-white mb-10">
        <header class="flex">
            <img src="/images/pfp/{{ $user->image }}?v={{ time() }}" alt="User's profile picture"
                class="object-contain w-44 h-44 rounded-lg" onerror="this.onerror=null;this.src='/images/pfp/user.jpg';">
            <div class="pl-8 w-full">

                <div class="flex justify-between items-baseline w-full mb-5">
                    <div>
                        <h1 class="text-2xl font-bold">{{ $user->username }}
                            @if ($user?->username === 'ksenia')
                                <span class="text-red-500 bg-red-100 text-lg uppercase">Admin</span>
                            @endif
                        </h1>
                        @if (isset($user->name) && !is_null($user->name) && isset($user->age) && !is_null($user->age))
                            <p class="">
                                @if (isset($user->name) && !is_null($user->name))
                                    <span class="">{{ $user->name }}</span>
                                @endif
                                @if (isset($user->age) && !is_null($user->age)),<span class="">{{ $user->age }}</span>
                                @endif

                            </p>
                        @elseif (isset($user->name) && !is_null($user->name))
                            <p class="">
                                <span class="">{{ $user->name }}</span>
                            </p>
                        @elseif (isset($user->age) && !is_null($user->age))
                            <p class="">
                                <span class="">{{ $user->age }}</span>
                            </p>
                        @endif
                    </div>

                    <div>
                        <p class="text-sm text-gray-600">Registered on {{ $user->created_at->format('F j, Y') }}</p>

                        @if (auth()->check() && $user->username === auth()->user()->username)
                            <div class="float-right mt-5">
                                <a href="/profile/{{ $user->username }}/edit"
                                    class="mt-5 text-blue-800 hover:text-blue-600 hover:underline">
                                    Edit profile</a>
                                <form method="POST" action="/logout">
                                    @csrf
                                    <button type="submit"
                                        class="text-red-400 hover:underline hover:text-red-500 float-right">
                                        Log out</button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
                @if (isset($user->bio) && !is_null($user->bio))
                    <p class="">{{ $user->bio }}</p>
                @endif

                {{-- /* ----------------------------- favorite genres ---------------------------- */ --}}
                @if (!$user->genres->isEmpty())
                    <section class="max-w-5xl m-auto mt-5">
                        <span class="mt-5 text-red-400">Favorite genres: </span>
                        @foreach ($user->genres as $genre)
                            <span>{{ $genre->name }}@if (!$loop->last),@endif</span>
                        @endforeach
                    </section>
                @endif
            </div>
        </header>


    </div>
    {{-- /* ----------------------------- favorite quote ----------------------------- */ --}}
    @php
        $quote = App\Models\Quote::find($user->quote_id);
    @endphp

    @if (isset($quote) && !is_null($quote))
        <section class="max-w-5xl m-auto mb-10 bg-white p-5 flex">
            <div class="flex-grow">
                <h3 class="text-xl">Favorite quote</h3>
                <p class="text-2xl italic p-3">{{ $quote->body }}</p>
                <span>from the book <a href="/books/{{ $quote->book->slug }}"
                        class="text-red-400 hover:text-red-500 hover:underline">{{ $quote->book->title }}</a> by
                    @foreach ($quote->book->authors as $author)
                        {{ $author->name }}
                    @endforeach
                </span>
            </div>
            <form action="/profile/{{ $user->username }}/remove-quote" method="POST"
                class="justify-self-end self-center text-sm text-gray-500 w-20">
                @csrf
                <button>Remove favorite quote</button>
            </form>
        </section>
    @endif

    {{-- /* -------------------------------- book list ------------------------------- */ --}}

    @if ((!$user->list && auth()->check() && $user->username === auth()->user()->username) || $user->list)
        @if (count($user->books))
            <section class="max-w-5xl m-auto mb-10" id="list">
                <h3 class="mb-3 text-xl">Book list</h3>
                <table class="border border-solid border-black w-full">
                    <tr class="border border-solid border-black">
                        <th class="border border-solid border-black p-1">№</th>
                        <th class="border border-solid border-black p-1">Title</th>
                        <th class="border border-solid border-black p-1">Author</th>
                        <th class="border border-solid border-black p-1">Added at</th>
                    </tr>
                    <tbody>
                        @foreach ($user->books->reverse() as $book)
                            <tr class="border border-solid border-black">
                                <td class="border border-solid border-black p-1">{{ $loop->iteration }}</td>
                                <td class="border border-solid border-black p-1"><a
                                        href="/books/{{ $book->slug }}">{{ $book->title }}</a></td>
                                <td class="border border-solid border-black p-1">
                                    @foreach ($book->authors as $author)
                                        <a href="/?author={{ $author->slug }}">{{ $author->name }}</a>@if(!$loop->last),@endif
                                    @endforeach
                                </td>
                                <td class="border border-solid border-black p-1">
                                    {{ $book->created_at->format('jS \of F Y \a\t h:i a') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </section>
        @endif
    {{-- @elseif (!$user->list && auth()->check() && $user->username !== auth()->user()->username) --}}

    @endif


    {{-- /* --------------------------------- reviews -------------------------------- */ --}}

    <section class="max-w-5xl m-auto mb-10">
        <h3 class="mt-5 text-xl">All reviews</h3>
        @if (!$user->reviews->isEmpty())
            @foreach ($user->reviews as $review)
                <p class="mb-5">
                    <x-review :review="$review" :book="true" />
            @endforeach
        @else
            <p class="mb-5 mt-2">
                <span class="text-sm text-gray-600">No reviews here:/</span>
        @endif
        </p>
    </section>

</x-layout>
