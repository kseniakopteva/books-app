<x-layout>
    <div class="max-w-4xl m-auto">
        <h1 class="font-bold text-xl mb-10">Create</h1>
        <form method="POST" action="/admin/books" enctype="multipart/form-data">
            @csrf


            <ul class="text-red-500 underline">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>


            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">Title</label>
                <input type="text" name="title" id="title" required
                    class="border border-gray-400 p-2 w-full">

                {{-- @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror --}}
            </div>

            <div class="mb-6">

                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="desc">Description</label>
                <textarea name="desc" id="desc" cols="10" rows="5" required
                    class="border border-gray-400 p-2 w-full"></textarea>

                {{-- @error('desc')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror --}}
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="year">Year</label>
                <input type="number" min="1900" max="2099" step="1" value="2016" name="year"
                    id="year" class="border border-gray-400 p-2 sm:w-2/12 w-6/12" />


                {{-- @error('year')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror --}}
            </div>

            <div class="mb-6">
                <span class="mb-2 uppercase font-bold text-xs text-gray-700">Genre:</span><br>

                @php
                    $genres = \App\Models\Genre::all();
                @endphp

                @foreach ($genres as $genre)
                    <input type="checkbox" id="{{ $genre->id }}" name="genres[]">
                    <label for="genres[]">{{ $genre->name }}</label><br>
                @endforeach

                {{-- @error('genre')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror --}}
            </div>

            <div class="mb-6">
                <p class="mb-2 uppercase font-bold text-xs text-gray-700">Author:</p>

                @php
                    $authors = \App\Models\Author::all();
                @endphp

                @foreach ($authors as $author)
                    <input type="checkbox" id="{{ $author->id }}" name="authors[]">
                    <label for="authors[]">{{ $author->name }}</label><br>
                @endforeach
                {{-- @error('authors[]')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror --}}

            </div>

            <div class="mb-6">
                <label class="uppercase font-bold text-xs text-gray-700 mb-2" for="cover">Book cover</label>
                <div class="flex space-x-2">
                    <input type="file" name="cover" class="border border-gray-400 p-2 w-full bg-white flex-grow">
                </div>
                {{-- @error('cover')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror --}}
            </div>

            <div class="mb-6">
                <x-submit-button>Submit</x-submit-button>
            </div>

        </form>
    </div>
</x-layout>
