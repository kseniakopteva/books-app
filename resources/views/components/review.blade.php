@props(['review', 'book'])
<article {{ $attributes->merge(['class' => 'bg-white p-5 rounded-sm']) }}>
    @if (isset($book))
        <h2 class="mb-2">Posted a review to the book <a class="text-red-400 hover:underline hover:text-red-500"
                href="/books/{{ $review->book->slug }}#{{ $review->id }}">{{ $review->book->title }}</a>
            <time>{{ $review->created_at->diffForHumans() }}</time>
        </h2>
        <hr class="mb-4">
    @endif

    <div class="flex space-x-4">
        <div class="flex-shrink-0">
            <a href="/profile/{{ $review->author->username }}">
                <img class="hover:outline hover:outline-2 hover:outline-red-200 rounded-sm"
                    src="/images/pfp/{{ $review->author->image }}?v={{ time() }}" alt="" width="60"
                    height="60">
            </a>
        </div>
        <div class="flex-grow">
            <header class="mb-4">
                <h3 class="font-bold">
                    <a class="text-red-400 hover:underline hover:text-red-500"
                        href="/profile/{{ $review->author->username }}">
                        {{ $review->author->username }}</a>
                    @if ($review->author?->username === 'ksenia')
                        <span class="text-red-500 bg-red-100 uppercase">Admin</span>
                    @endif
                </h3>
                <p class="text-xs">Posted <time>{{ $review->created_at->format('F j, Y, \a\t g:i a') }}</time></p>
            </header>
            <p class="whitespace-pre-line -mt-7">
                {{ $review->body }}
            </p>

            @if (!isset($book))
                {{-- /* -------------------------- leave a comment form -------------------------- */ --}}
                @if (auth()->check())
                    <div x-data="{ show: false }" @click.away="show = false" class="bg-gray-100 p-3 mt-5">
                        <div class="">
                            <div @click="show = ! show">
                                <button class="text-xs flex space-x-3 items-center w-full">
                                    <img src="/images/pfp/{{ auth()->user()->image }}?v={{ time() }}"
                                        alt="" width="30" height="30" class="rounded-full self-start">
                                    <span>Leave a comment</span>
                                </button>
                            </div>
                        </div>

                        <div x-show="show" class="py-2 rounded-b w-full overflow-auto max-h-52 p-4"
                            style="display:none">
                            <form action="/reviews/{{ $review->id }}/comments/store" method="POST" class="">
                                @csrf
                                <textarea name="body" class="w-full p-4 text-sm focus:outline-none focus:ring-2 border-2 border-solid border-red-300"
                                    cols="30" rows="5" placeholder="What do you have to say?" required></textarea>
                                <button type="submit">Post</button>
                            </form>
                        </div>
                    </div>
                @else
                    <p class="mt-4 text-xs">
                        <a href="/register" class="text-red-400 hover:underline hover:text-red-500">Register</a> or <a
                            href="/login" class="text-red-400 hover:underline hover:text-red-500">log in</a> to
                        comment!
                    </p>
                @endif

                {{-- /* ------------------------------ all comments ------------------------------ */ --}}
                @if (count($review->comments))
                    @foreach ($review->comments as $comment)
                        <div class="space-y-2 my-4">
                            <div class="text-sm flex space-x-3 items-center">
                                <img src="/images/pfp/{{ $comment->author->image }}?v={{ time() }}"
                                    alt="" width="30" height="30" class="rounded-full self-start">
                                <span><a href="/profile/{{ $comment->author->username }}"
                                        class="text-red-400 hover:text-red-500 hover:underline">
                                        {{ $comment->author->username }}
                                    </a></span>
                            </div>
                            <p class="text-sm">{{ $comment->body }}</p>
                        </div>
                    @endforeach
                @endif
            @else
                @if (count($review->comments))
                    <p class="text-sm mt-4"><a href="/books/{{ $review->book->slug }}#{{ $review->id }}"
                            class="text-red-400 hover:text-red-500 hover:underline">
                            See all comments
                        </a></p>
                @endif
            @endif

        </div>
        @if ($review->author->username === auth()->user()?->username)
            <div>
                <form action="/books/{{ $review->book->slug }}/reviews/{{ $review->id }}/destroy" method="POST"
                    class="">
                    @csrf
                    <button type="submit">Delete</button>
                </form>

                <form action="/books/{{ $review->book->slug }}/reviews/{{ $review->id }}/edit" method="POST"
                    class="">
                    @csrf
                    <button type="submit">Edit</button>
                </form>
            </div>
        @endif

    </div>

</article>
