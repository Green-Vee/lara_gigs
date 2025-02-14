<x-layout>
    <x-card class=" max-w-lg mx-auto mt-6">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Register
            </h2>
            <p class="mb-2 font-bold">Create an account to post gigs</p>
        </header>

        <form action="/users" method="POST">

            @csrf

            <div class="mb-2">
                <label for="name" class="inline-block text-lg mb-2">
                    Name
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                    value="{{ old('name') }}" />

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-2">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                    value="{{ old('email') }}" />

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <!-- Error Example -->
                {{-- <p class="text-red-500 text-xs mt-1">
                    Please enter a valid email
                </p> --}}
            </div>

            <div class="mb-2">
                <label for="password" class="inline-block text-lg mb-2">
                    Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                    value="{{ old('password') }}" />

                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-2">
                <label for="password2" class="inline-block text-lg mb-2">
                    Confirm Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation"
                    value="{{ old('password_confirmation') }}" />

                @error('password_confirmation')
                    <p class="text-red-500 text-bold text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-2">
                <button type="submit" class="bg-slate-950 text-white rounded py-2 px-4 hover:bg-black">
                    Sign Up
                </button>
            </div>

            <div class="mt-8">
                <p class="font-bold">
                    Already have an account?
                    <a href="/login"
                        class="text-black text-bold border-2 rounded border-slate-950 px-5 py-2">Login</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
