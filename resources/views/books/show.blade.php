<x-layout>
        <article class="m-5 mt-10">
            <div class="flex justify-between items-center my-3">
                <h1 class="text-2xl font-bold">{{ $book->title }}</h1>
                <a class="text-md block text-red-400 hover:underline hover:text-red-500" href="/">&#8592 Go Back</a>

            </div>

            <hr class="mb-3">

            <div class="grid grid-cols-12 space-x-10">
                <div class="col-span-12 sm:col-span-7 md:col-span-8 lg:col-span-9 mb-10 sm:mb-0">

                    <p> @if (count($book->genres)>1)Genres:@else Genre: @endif

                        @foreach ($book->genres as $genre)
                        <a class="text-red-400 hover:underline hover:text-red-500 @if($loop->first)capitalize @endif"
                            href="/?genre={{$genre->slug}}">{{$genre->name}}</a>@if(!$loop->last),@endif
                        @endforeach

                    </p>
                    <p>
                        @if ($book->year != null)
                        Year: {{ $book->year }}
                        @endif
                    </p>
                    <p> @if (count($book->authors)>1)Authors:@else Author: @endif

                        @foreach ($book->authors as $author)
                        <a class="text-red-400 hover:underline hover:text-red-500 @if($loop->first)capitalize @endif"
                            href="/?author={{$author->slug}}">{{$author->name}}</a>@if(!$loop->last),@endif
                        @endforeach

                    </p>

                    <hr>
                    <br>
                    <p class="whitespace-pre-wrap"> {{ $book->body }} </p>

                </div>

                <div class="col-span-12 sm:col-span-5 md:col-span-4 lg:col-span-3 text-center">
                    <img src="/images/covers/{{ $book->cover }}" alt="{{$book->title}} book cover"
                        class="w-full shadow-md object-cover mb-4 self-start">
                       @if (auth()->check())
                        <form action="/profile/favorite/{{ $book->slug }}" method="POST">
                            @csrf
                            @if (in_array($book->id, auth()->user()->books->pluck('id')->toArray()))
                            <button type="submit" class="py-2 px-5 bg-gray-300 rounded hover:bg-gray-400">Remove from wishlist</button>
                            @else
                            <button type="submit" class="py-2 px-5 bg-red-300 rounded hover:bg-red-400">Want to read!</button>
                            @endif
                        </form>
                        @endif
                </div>
            </div>

            {{-- /* --------------------------------- quotes --------------------------------- */ --}}

            <style>
                :root {
                    --swiper-navigation-size: 20px;
                    --swiper-navigation-color: #000;
                    --swiper-theme-color: #000
                }
            </style>

            @if (count($book->quotes))
            <!-- Slider main container -->
            <section class="swiper mt-10 border border-solid border-gray-200">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach ($book->quotes as $quote)
                    <x-quote :quote="$quote" class="swiper-slide rounded-sm" />
                    @endforeach
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                @if (count($book->quotes)>1)
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                @endif
                <!-- If we need scrollbar -->
                {{-- <div class="swiper-scrollbar"></div> --}}
            </section>
            @endif




            {{-- /* --------------------------------- reviews -------------------------------- */ --}}

            <section class="mt-5 border-t border-t-gray-200 border-t-solid">
                @auth

                <form action="/books/{{ $book->slug }}/reviews/create" method="POST" class="inline-block p-2">
                    @csrf
                    <button type="submit" class="text-red-400 hover:underline hover:text-red-500">
                        Add a review</button>
                </form>

                <form action="/books/{{ $book->slug }}/quotes/create" method="POST" class="inline-block p-2">
                    @csrf
                    <button type="submit" class="text-red-400 hover:underline hover:text-red-500">
                        Add a quote</button>
                </form>

                @else
                <p class="mb-5 ">
                    <a href="/register" class="text-red-400 hover:underline hover:text-red-500">Register</a> or <a
                        href="/login" class="text-red-400 hover:underline hover:text-red-500">log in</a> to leave a
                    review!
                </p>
                @endauth

                <div class="space-y-5">
                    @foreach ($book->reviews as $review)
                    <x-review :review="$review" id="{{ $review->id }}" />
                    @endforeach
                </div>

            </section>
        </article>


    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
</x-layout>
