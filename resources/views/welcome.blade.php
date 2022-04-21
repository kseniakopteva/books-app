<x-layout>
    <div class="bg-gray-100 min-h-screen w-screen">
        <!-- <div class="bg-red-500 h-screen w-screen"> -->
        <div class=" max-w-2xl m-auto">
            <h1 class="text-4xl mb-3 pt-4">Book reviews</h1>
            <h2 class="text-2xl mb-3"><a class="text-red-500 italic" href="/">All Books</a></h2>

            @foreach ($books as $book)

            <article class="border-gray-300 border-solid border rounded-sm p-5 mt-5 bg-white ">
                <h1 class="block mb-3">
                    <a class="text-xl text-red-500" href="/books/{{ $book->slug }}">
                        {{ $book->title }}
                    </a>
                </h1>
                <hr>
                <div>
                    <p> Genres:
                        @foreach ($book->genres as $genre)
                        <a class="text-red-400 underline @if($loop->first)capitalize @endif" href="/genres/{{$genre->slug}}">{{$genre->name}}</a>@if(!$loop->last),@endif
                        @endforeach
                    </p>
                    <p>@if ($book->year != NULL)Year: {{$book->year}}@endif</p>
                    <p>Author:

                        @foreach ($book->authors as $author)
                        <a class="text-red-400 underline @if($loop->first)capitalize @endif" href="/authors/{{$author->slug}}">{{$author->name}}</a>@if(!$loop->last),@endif
                        @endforeach
                    </p>
                </div>
                <hr>
                <br>

                <p> {{ $book->excerpt }} </p>
            </article>

            @endforeach

        </div>
    </div>
</x-layout>