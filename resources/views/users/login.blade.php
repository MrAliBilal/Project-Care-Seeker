<x-layout>
    <section class="flex items-center justify-center h-screen">
        <x-card class="p-10 max-w-md mx-auto">
            <header class="text-center mb-6">
                <h2 class="text-2xl font-bold uppercase">Login</h2>
                <p>Log into your account to post a job or find jobs</p>
            </header>

            <form method="POST" action="/users/authenticate">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-lg mb-2">Email</label>
                    <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                        value="{{ old('email') }}" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-lg mb-2">Password</label>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                        value="{{ old('password') }}" />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 text-center">
                    <button type="submit" class="bg-pinkish_purple text-white rounded py-2 px-4 hover:bg-turquoise">
                        Sign In
                    </button>
                </div>

                <div class="text-center mb-4">
                    <p class="text-pinkish_purple">
                        <a href="/register/careseeker" class="hover:text-turquoise">Register as a Care Seeker</a>
                        <span class="mx-0 text-pinkish_purple">|</span>
                        <a href="/register/supportworker" class="hover:text-turquoise">Register as a Support Worker</a>
                    </p>
                </div>
                <div class="text-center">
                    <a href="/" class="bg-pinkish_purple text-white rounded py-2 px-4 hover:bg-turquoise inline-flex items-center">
                        <i class="fas fa-arrow-left mr-2"></i> Back
                    </a>
                </div>
            </form>
        </x-card>
    </section>
</x-layout>
