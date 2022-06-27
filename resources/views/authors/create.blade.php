<x-layout>
    <div class="max-w-4xl m-auto p-10">
        <h1 class="font-bold text-xl mb-10">Add an author</h1>
        <form method="POST" action="/admin/authors">
            @csrf

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>
                <input type="text" name="name" id="name" required
                    class="border border-gray-400 p-2 w-full">

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="year">Birth Year</label>
                <input type="text" name="year" id="year" class="border border-gray-400 p-2 w-full">

                @error('year')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Bio</label>
                <input type="text" name="bio" id="bio" class="border border-gray-400 p-2 w-full">

                @error('bio')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <x-submit-button>Submit</x-submit-button>
            </div>

        </form>
    </div>
</x-layout>
