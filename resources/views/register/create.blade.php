<x-layout>
        <div>
            <h1>Register</h1>
            <form method="POST" action="/register">
                @csrf

                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required value="{{ old('username') }}">

                    @error('username')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div>

                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" required value="{{ old('email') }}">

                    @error('email')
                    <p>{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>

                    @error('password')
                    <p>{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <x-button>Submit</x-button>
                </div>

            </form>
    </div>
</x-layout>
