<x-layout>
    <x-card class=" max-w-lg mx-auto mt-10 pb-5">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Login
            </h2>
            <p class="mb-4 font-bold">Login into your account to post gigs</p>
        </header>

        <form action="/users/authenticate" method="POST">

            @csrf

            <div class="mb-2">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                    value="{{ old('email') }}" />

                @error('email')
                    <p class="text-red-500 text-lg mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">
                    Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                    value="{{ old('password') }}" />

                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-2 flex">
                <button type="submit" class="bg-slate-950  text-white rounded py-2 px-4 hover:bg-black">
                    Sign In
                </button>
            </div>

            <div class="mt-4 pb-6">
                <p class="font-bold">
                    don't have an account?
                    <a href="/register"
                        class="text-black text-bold border-2 rounded border-slate-950 px-5 py-2">Register</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
