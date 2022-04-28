@props (['book'])

<article {{ $attributes->merge(['class' => 'border-gray-300 border-solid border rounded-sm p-5 m-3 mt-5 col-span-3 bg-white'])}}>

    <img src="/images/{{$book->slug}}.jpg" alt="{{$book->title}} book cover" class="w-full h-80 shadow-md object-cover mb-4 " onerror="this.onerror=null;this.src='/images/cover-placeholder.svg';">

    <h2 class="block mb-3">
        <a class="text-xl text-red-500" href="/books/{{ $book->slug }}">
            {{ $book->title }}
        </a>
    </h2>
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