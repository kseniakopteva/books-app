@props(['book'])

<article
    {{ $attributes->merge(['class' => 'border-gray-300 border-solid border rounded-sm p-5 col-span-3 bg-white']) }}>

    <img src="/images/covers/{{ $book->cover }}" alt="{{ $book->title }} book cover"
        class="w-full h-80 shadow-md object-cover mb-4 ">

    <h2 class="block">
        <a class="text-lg text-red-500" href="/books/{{ $book->slug }}">
            {{ $book->title }}
        </a>
        @if ($book->year != null)
            ({{ $book->year }})
        @endif

    </h2>
    <div class="mb-2">
        <p>
            @foreach ($book->authors as $author)
                <a class="text-black @if ($loop->first) capitalize @endif"
                    href="/?author={{ $author->slug }}">{{ $author->name }}</a>@if (!$loop->last),@endif
            @endforeach
        </p>

        <p>
            @foreach ($book->genres as $genre)
                <a class="text-black text-sm italic @if ($loop->first) capitalize @endif"
                    href="/?genre={{ $genre->slug }}">{{ $genre->name }}</a>@if(!$loop->last),@endif
            @endforeach
        </p>
    </div>
    <hr>

    <p class="text-sm mt-2"> {{ $book->excerpt }} </p>
</article>
