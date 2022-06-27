<x-layout>
        <div class="max-w-lg m-auto pb-10 pt-10">
            <h1 class="text-center font-bold text-xl mb-10">Log in</h1>
            <form method="POST" action="/login">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">Username</label>
                    <input type="text" name="username" id="username" required value="{{ old('username') }}" class="border border-gray-400 p-2 w-full">

                    @error('username')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
                    <input type="password" name="password" id="password" required class="border border-gray-400 p-2 w-full">

                    @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <x-submit-button>Log in</x-submit-button>
                </div>

            </form>
    </div>
</x-layout>
