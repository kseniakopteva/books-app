<x-layout>
    <form action="/books/{{ $book->slug }}/reviews/{{ $review->id }}/update" method="POST" class="">
        @csrf

        <header class="font-semibold">Edit review</header>
        <div class="mt-5 flex space-x-3">
            <img src="/images/pfp/{{ auth()->user()->image }}?v={{ time() }}" alt="" width="40" height="40"
                class="rounded-full self-start" onerror="this.onerror=null;this.src='/images/user.jpg';">

            <textarea name="body" class="w-full p-4 text-sm focus:outline-none focus:ring-2" cols="30" rows="20"
                placeholder="What do you have to say?" required>{{ $review->body }}</textarea>
        </div>

        @error('body')
        <span class="text-xs text-red-500">{{ $message }}</span>
        @enderror

        <div class="flex justify-end mt-4">
            <x-submit-button>Edit</x-submit-button>
        </div>
    </form>
</x-layout>
