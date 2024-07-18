<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Choose Registration Type</h2>
        <p class="mb-4">Select one of the following options to register:</p>
      </header>

      <div class="flex flex-col items-center space-y-4">
        <a href="/register/careseeker" class="bg-laravel text-white rounded py-2 px-4 hover:bg-pinkish_purple">
          Register as Care Seeker
        </a>

        <a href="/register/supportworker" class="bg-laravel text-white rounded py-2 px-4 hover:bg-pinkish_purple">
          Register as Support Worker
        </a>

        <a href="/login" class="bg-laravel text-white rounded py-2 px-4 hover:bg-pinkish_purple">
          Already Register Need to Login
        </a>

        <a href="/" class="bg-laravel text-white rounded py-2 px-4 hover:bg-pinkish_purple">
          Go Back to Main Page
        </a>
      </div>

    </x-card>
  </x-layout>
