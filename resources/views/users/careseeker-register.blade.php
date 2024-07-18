<x-layout>
  <x-card class="p-10 max-w-lg mx-auto my-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Register as Care Seeker</h2>
      <p class="mb-4">Create an Account to Post Job or Find Support Worker</p>
    </header>

    <form method="POST" action="/register">
      @csrf
      <div class="mb-6">
        <label for="first_name" class="inline-block text-lg mb-2"> First Name </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="first_name" value="{{old('first_name')}}" />

        @error('first_name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="last_name" class="inline-block text-lg mb-2"> Last Name </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="last_name" value="{{old('last_name')}}" />

        @error('last_name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">Email</label>
        <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="password" class="inline-block text-lg mb-2">
          Password
        </label>
        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
          value="{{old('password')}}" />

        @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="password2" class="inline-block text-lg mb-2">
          Confirm Password
        </label>
        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation"
          value="{{old('password_confirmation')}}" />

        @error('password_confirmation')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6 text-center">
        <button type="submit" class="bg-pinkish_purple text-white rounded py-2 px-4 hover:turquoise">
          Sign Up
        </button>
      </div>

      <div class="mt-8">
        <p>
          Already have an account?
          <a href="/login" class="text-pinkish_purple hover:text-turquoise">Login</a>
        </p>
      </div>
    </form>
  </x-card>
</x-layout>
