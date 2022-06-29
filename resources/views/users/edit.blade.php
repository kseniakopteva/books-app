<x-layout>
    <div class="max-w-5xl m-auto">
        <h1 class="font-bold text-xl mb-5">Edit profile</h1>
        <form method="POST" action="/profile/{{ $user->username }}/update" enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
                <label class="uppercase font-bold text-xs text-gray-700 mb-2" for="image">Profile picture</label>
<div class="flex space-x-2">
                <img class="self-center" src="/images/pfp/{{ $user->image }}?v={{ time() }}" alt="" width="50">
                <input type="file" name="image" class="border border-gray-400 p-2 w-full bg-white flex-grow">
</div>
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="uppercase font-bold text-xs text-gray-700" for="username"
                    title="Required">Username</label><span title="Required"
                    class="text-red-400 text-xl font-bold">*</span>
                <input type="text" name="username" id="username" required value="{{ $user->username }}"
                    class="border mt-2 border-gray-400 p-2 w-full">

                @error('username')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="uppercase font-bold text-xs text-gray-700" for="age"
                    title="Required">Email</label><span title="Required" class="text-red-400 text-xl font-bold">*</span>
                <input type="email" name="email" id="email" value="{{ $user->email }}"
                    class="border mt-2 border-gray-400 p-2 w-full">

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}"
                    class="border border-gray-400 p-2 w-full">

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="uppercase font-bold text-xs text-gray-700" for="age">Age</label>
                <input type="number" name="age" id="age" value="{{ $user->age }}"
                    class="border mt-2 border-gray-400 p-2 w-full">

                @error('age')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="uppercase font-bold text-xs text-gray-700" for="bio">Bio</label>

                <textarea name="bio" id="bio" cols="10" rows="5" class="mt-2 border border-gray-400 p-2 w-full">{{ $user->bio }}</textarea>

                @error('bio')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="uppercase font-bold text-xs text-gray-700" for="genres[]">Favorite Genres</label><br>
                    @php
                        $genres = \App\Models\Genre::all();
                    @endphp

                    @foreach ($genres as $genre)
                        <input type="checkbox" id="{{ $genre->id }}" name="genres[]" value="{{ $genre->id }}"
                        @if (in_array($genre->name, $user->genres->pluck('name')->toArray()))
                        checked
                        @endif

                        >
                        <label for="genres[]">{{ $genre->name }}</label><br>
                    @endforeach
            </div>

          <style>
                /* The switch - the box around the slider */
                .switch {
                    position: relative;
                    display: inline-block;
                    width: 30px;
                    height: 17px;
                }
                /* Hide default HTML checkbox */
                .switch input {
                    opacity: 0;
                    width: 0;
                    height: 0;
                }
                /* The slider */
                .slider {
                    position: absolute;
                    cursor: pointer;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background-color: #ccc;
                    -webkit-transition: .4s;
                    transition: .4s;
                }
                .slider:before {
                    position: absolute;
                    content: "";
                    height: 13px;
                    width: 13px;
                    left: 2px;
                    bottom: 2px;
                    background-color: white;
                    -webkit-transition: .4s;
                    transition: .4s;
                }
                input:checked+.slider {
                    background-color: #F87171;
                }
                input:focus+.slider {
                    box-shadow: 0 0 1px #F87171;
                }
                input:checked+.slider:before {
                    -webkit-transform: translateX(13px);
                    -ms-transform: translateX(13px);
                    transform: translateX(13px);
                }
                /* Rounded sliders */
                .slider.round {
                    border-radius: 17px;
                }
                .slider.round:before {
                    border-radius: 50%;
                }
            </style>



            <div class="mb-6">
                <label class="uppercase font-bold text-xs text-gray-700" for="list">Book wish list</label><br>
                <div class="flex items-center space-x-3"><span>Private</span>
                <label class="switch">
                    <input type="checkbox" name="list" @if ($user->list) checked @endif>
                    <span class="slider round"></span>
                </label>
                <span>Public</span></div>
            </div>

            <div class="mb-6">
                <x-button>Submit</x-button>
            </div>

        </form>
    </div>
</x-layout>
