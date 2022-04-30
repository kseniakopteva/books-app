<x-layout>
    <div class="bg-gray-100 h-screen w-screen">
        <div class="border-x-gray-300 max-w-2xl m-auto border-x-solid border-x bg-white px-5 py-5 h-screen">
            <h1 class="text-4xl mb-3 mt-4 text-red-500 italic"><a class="text-red-500 italic" href="/">Book reviews</a>
            </h1>

            <article class="rounded-lg p-3 mt-5">
                <hr>
                <p> Genres:
                    @foreach ($book->genres as $genre)
                    <a class="text-red-400 underline @if($loop->first)capitalize @endif" href="/?genre={{$genre->slug}}">{{$genre->name}}</a>
                    @endforeach
                </p>
                <p>@if ($book->year != NULL)Year: {{$book->year}}@endif</p>
                <p>Author:

                    @foreach ($book->authors as $author)
                    <a class="text-red-400 underline @if($loop->first)capitalize @endif" href="/?author={{$author->slug}}">{{$author->name}}</a>@if(!$loop->last),@endif
                    @endforeach
                </p>


                <hr>
                <br>
                <h1 class="text-xl pb-3 mb-3">
                    <span class="font-bold">{{ $book->title }}</span>
                </h1>


                <p> {{ $book->body }} </p>
            </article>

            <a class="text-md text-red-500 mt-5 block" href="/">Go Back</a>
        </div>
    </div>
</x-layout>
