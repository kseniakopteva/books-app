<x-layout>
    <main class=" mt-2 max-w-5xl m-auto">
        <header class="flex mb-10 bg-white p-8">
            <img src="/images/pfp/{{ $user->image }}?v={{ time() }}" alt="User's profile picture"
                class="object-contain w-44 h-44 rounded-lg">
            <div class="pl-8 w-full">

                <div class="flex justify-between items-baseline w-full mb-5">
                    <div>
                        <h1 class="text-2xl font-bold">{{ $user->username }}
                            @if ($user?->isAdmin())
                                <span class="text-red-500 bg-red-100 text-lg uppercase">Admin</span>
                            @endif
                            @if ($user?->isMod())
                                <span class="text-light-green-500 bg-light-green-100 text-lg uppercase">Mod</span>
                            @endif
                        </h1>
                        @if (isset($user->name) && !is_null($user->name) && isset($user->age) && !is_null($user->age))
                            <p class="">
                                @if (isset($user->name) && !is_null($user->name))
                                    <span class="">{{ $user->name }}</span>
                                @endif
                                @if (isset($user->age) && !is_null($user->age))
                                    , <span class="">{{ $user->age }}</span>
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


                        @if (isset($user->bio) && !is_null($user->bio))
                            <p class="mt-5">{{ $user->bio }}</p>
                        @endif
                    </div>

                    <div>
                        <p class="text-sm text-gray-600">Registered on {{ $user->created_at->format('F j, Y') }}</p>

                        @if (auth()->check() && $user->username === auth()->user()->username)
                            <div class="float-right mt-5">
                                <a href="/profile/{{ $user->username }}/edit"
                                    class="bg-blue-200 hover:bg-blue-300 text-black py-1 px-1.5 rounded text-sm m-1 float-right">
                                    Edit profile</a><br>
                                <form method="POST" action="/logout" class="float-right">
                                    @csrf

                                    <x-button :extrasmall="true">Log out</x-button>
                                </form>
                            </div>
                        @elseif(auth()->user()
                            ?->isAdmin() && $user !== auth()->user())
                            <div class="float-right mt-5">
                                @if ($user->role->name !== 'admin')
                                    <form action="/admin/promote/{{ $user->username }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="bg-red-200 hover:bg-red-300 text-black py-1 px-1.5 rounded text-sm m-1 float-right border border-red-500 border-solid">
                                            @if ($user->role->name === 'user')
                                                Promote to moderator
                                            @elseif ($user->role->name === 'mod')
                                                Promote to admin
                                            @endif
                                        </button>
                                    </form>
                                @endif

                                @if ($user->role->name !== 'user')
                                    <form action="/admin/demote/{{ $user->username }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="bg-red-200 hover:bg-red-300 text-black py-1 px-1.5 rounded text-sm m-1 float-right border border-red-500 border-solid">
                                            @if ($user->role->name === 'admin')
                                                Demote to moderator
                                            @elseif ($user->role->name === 'mod')
                                                Demote to user
                                            @endif
                                        </button>
                                    </form>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>


                {{-- /* ----------------------------- favorite genres ---------------------------- */ --}}
                @if (!$user->genres->isEmpty())
                    <section class="mt-5">
                        <span class="mt-5 text-red-400">Favorite genres: </span>
                        @foreach ($user->genres as $genre)
                            <span>{{ $genre->name }}@if (!$loop->last)
                                    ,
                                @endif
                            </span>
                        @endforeach
                    </section>
                @endif
            </div>
        </header>

        <div class="grid grid-cols-12 gap-5">
            @if (((!$user->list && auth()->check() && $user->username === auth()->user()->username) || $user->list) && count($user->books))
                <div class="col-span-7">
                @else
                    <div class="col-span-12">
            @endif

            {{-- /* ----------------------------- favorite quote ----------------------------- */ --}}
            @php
                $quote = App\Models\Quote::find($user->quote_id);
            @endphp

            @if (isset($quote) && !is_null($quote))
                <section class="mb-10 bg-white p-5 flex">
                    <div class="flex-grow">
                        <h3 class="text-xl">Favorite quote</h3>
                        <p class="text-2xl italic p-3">{{ $quote->body }}</p>
                        <span>from the book <a href="/books/{{ $quote->book->slug }}"
                                class="text-red-400 hover:text-red-500 hover:underline">{{ $quote->book->title }}</a>
                            by
                            @foreach ($quote->book->authors as $author)
                                {{ $author->name }}
                            @endforeach
                        </span>
                    </div>
                    <form action="/profile/{{ $user->username }}/remove-quote" method="POST"
                        class="justify-self-end self-center text-sm text-gray-500 w-20">
                        @csrf

                        <x-button :extrasmall="true">Remove favorite quote</x-button>
                    </form>
                </section>
            @endif


            {{-- /* --------------------------------- reviews -------------------------------- */ --}}

            <section class="mb-10">
                <h3 class="text-xl">All reviews</h3>
                @if (!$user->reviews->isEmpty())
                    <div class="space-y-5 mt-5">
                        @foreach ($user->reviews as $review)
                            <x-review :review="$review" :book="true" />
                        @endforeach
                    </div>
                @else
                    <p class="">
                        <span class="text-sm text-gray-600">No reviews here:/</span>
                    </p>
                @endif

            </section>
        </div>
        {{-- /* -------------------------------- book list ------------------------------- */ --}}


        @if ((!$user->list && auth()->check() && $user->username === auth()->user()->username) || $user->list)
            @if (count($user->books))
                <div class="col-span-5">
                    <section class="mb-10 items-start" id="list">
                        <h3 class="text-xl mb-5">Book list</h3>
                        <table class="w-full rounded-lg">
                            <tr class="border-b border-b-solid border-b-gray-300 text-left bg-white text-gray-500">
                                <th class="p-2"></th>
                                <th class="p-2">Title</th>
                                <th class="p-2">Author</th>
                                {{-- <th class="border border-solid border-black p-1">Added at</th> --}}
                            </tr>
                            <tbody>
                                @foreach ($user->books->reverse() as $book)
                                    <tr class="text-left odd:bg-white even:bg-gray-200">
                                        {{-- <td class="p-2 pl-3">&bull;</td> --}}
                                        <td class="p-2 pl-3">{{ $loop->iteration }}.</td>
                                        <td class="p-2"><a
                                                href="/books/{{ $book->slug }}">{{ $book->title }}</a></td>
                                        <td class="p-2">
                                            @foreach ($book->authors as $author)
                                                <a href="/?author={{ $author->slug }}">{{ $author->name }}</a>
                                                @if (!$loop->last)
                                                    ,
                                                @endif
                                            @endforeach
                                        </td>
                                        {{-- <td class="border border-solid border-black p-1">
                                        {{ $book->created_at->format('jS \of F Y \a\t h:i a') }}</td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                </section>
            @endif
            {{-- @elseif (!$user->list && auth()->check() && $user->username !== auth()->user()->username) --}}
        @endif

        </div>
    </main>
</x-layout>
