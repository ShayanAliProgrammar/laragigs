<x-layout title="Login | Laragigs">
    <div class="mx-4">
        <div class="max-w-lg p-10 mx-auto mt-24 border border-gray-200 rounded bg-gray-50">
            <header class="text-center">
                <h2 class="mb-1 text-2xl font-bold uppercase">
                    Log In
                </h2>
                <p class="mb-4">Log in to post gigs</p>
            </header>

            <form action="/users/authenticate" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="email" class="inline-block mb-2 text-lg">Email</label>
                    <input type="email" class="w-full p-2 border border-gray-200 rounded" name="email"
                        value="{{ old('email') }}" />

                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="inline-block mb-2 text-lg">
                        Password
                    </label>
                    <input type="password" class="w-full p-2 border border-gray-200 rounded" name="password"
                        value="{{ old('password') }}" />

                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="px-4 py-2 text-white rounded bg-laravel hover:bg-black">
                        Sign In
                    </button>
                </div>

                <div class="mt-8">
                    <p>
                        Don't have an account?
                        <a href="/register" class="text-laravel">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-layout>
