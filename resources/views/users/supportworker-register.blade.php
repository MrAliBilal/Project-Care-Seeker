<x-layout>
    <x-card class="p-10 max-w-lg mx-auto my-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-4">Register as Support Worker</h2>
            <p class="mb-6">Create an Account to Find Jobs</p>
        </header>

        <form method="POST" action="/registersupportworker" enctype="multipart/form-data">
            @csrf

            <!-- First Name -->
            <div class="mb-4">
                <label for="first_name" class="inline-block text-lg mb-2">First Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="first_name" value="{{ old('first_name') }}" />
                @error('first_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Last Name -->
            <div class="mb-4">
                <label for="last_name" class="inline-block text-lg mb-2">Last Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="last_name" value="{{ old('last_name') }}" />
                @error('last_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{ old('email') }}" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="inline-block text-lg mb-2">Password</label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" value="{{ old('password') }}" />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label for="password_confirmation" class="inline-block text-lg mb-2">Confirm Password</label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" value="{{ old('password_confirmation') }}" />
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Profile Picture -->
            <div class="mb-4">
                <label for="picture_url" class="inline-block text-lg mb-2">Profile Picture</label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="picture_url" />
                @error('picture_url')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Contact Number -->
            <div class="mb-4">
                <label for="contact_number" class="inline-block text-lg mb-2">Contact Number</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="contact_number" value="{{ old('contact_number') }}" />
                @error('contact_number')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Address -->
            <div class="mb-4">
                <label for="address" class="inline-block text-lg mb-2">Address</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="address" value="{{ old('address') }}" />
                @error('address')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Preferred Jobs -->
            <div class="mb-4">
                <label for="job_skills" class="inline-block text-lg mb-2">Preferred Jobs</label>
                <input type="text" placeholder="Example: baby care, cooking, personal care, animal care, etc" class="border border-gray-200 rounded p-2 w-full" name="job_skills" value="{{ old('job_skills') }}" />
                @error('job_skills')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Hourly Rate -->
            <div class="mb-4">
                <label for="hourly_rate" class="inline-block text-lg mb-2">Hourly Rate (PKR)</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="hourly_rate" value="{{ old('hourly_rate') }}" />
                @error('hourly_rate')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Experience -->
            <div class="mb-4">
                <label for="experience" class="inline-block text-lg mb-2">Experience</label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="experience" rows="10" placeholder="Please provide details about your job experience, including the number of years you have worked in the field.">{{ old('experience') }}</textarea>
                @error('experience')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Reference One -->
            <div class="mb-4">
                <label for="reference1_name" class="inline-block text-lg mb-2">Reference One Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="reference1_name" value="{{ old('reference1_name') }}" />
                @error('reference1_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="reference1_contact" class="inline-block text-lg mb-2">Reference One Contact</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="reference1_contact" value="{{ old('reference1_contact') }}" />
                @error('reference1_contact')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="reference1_info" class="inline-block text-lg mb-2">Reference One Details</label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="reference1_info" rows="10" placeholder="Add Reference Statement">{{ old('reference1_info') }}</textarea>
                @error('reference1_info')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Reference Two -->
            <div class="mb-4">
                <label for="reference2_name" class="inline-block text-lg mb-2">Reference Two Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="reference2_name" value="{{ old('reference2_name') }}" />
                @error('reference2_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="reference2_contact" class="inline-block text-lg mb-2">Reference Two Contact</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="reference2_contact" value="{{ old('reference2_contact') }}" />
                @error('reference2_contact')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="reference2_info" class="inline-block text-lg mb-2">Reference Two Details</label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="reference2_info" rows="10" placeholder="Add Reference Statement">{{ old('reference2_info') }}</textarea>
                @error('reference2_info')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="mb-6 flex justify-center items-center space-x-4">
                <button type="submit" class="bg-pinkish_purple text-white rounded py-2 px-4 hover:bg-turquoise">
                    Create Account
                </button>
            </div>

            <!-- Login Link -->
            <div class="mt-8 text-center">
                <p>
                    Already have an account?
                    <a href="/login" class="text-pinkish_purple hover:text-turquoise">Login</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
