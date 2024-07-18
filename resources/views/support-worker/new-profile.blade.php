<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Support Worker Profile</h2>
            <p class="mb-4">Create a a profile to get more care seeker job</p>
        </header>

        <form method="POST" action="/supportworker/add-profile">
            @csrf

            <div class="mb-6">
                <label for="profile_description" class="inline-block text-lg mb-2">Profile Description</label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="profile_description" rows="5"
                    placeholder="Add your profile description">{{ old('profile_description') }}</textarea>
                    @error('profile_description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="availability" class="inline-block text-lg mb-2">Availability (Comma Separated)</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="availability"
                    placeholder="Example: Monday, Tuesday etc" value="{{ old('availability') }}" />
                    @error('availability')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="languages" class="inline-block text-lg mb-2">Languages (Comma Separated)</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="languages"
                    placeholder="Example: Urdu, English etc" value="{{ old('languages') }}" />
                    @error('languages')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="personality_traits" class="inline-block text-lg mb-2">Personality Traits(Comma Separated)</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="personality_traits"
                    placeholder="Example: Creative, Calm, Friendly etc" value="{{ old('personality_traits') }}" />
                    @error('personality_traits')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="qualifications_and_additional_details" class="inline-block text-lg mb-2">Qualifications and Additional Details</label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="qualifications_and_additional_details" rows="5"
                    placeholder="Add your qualifications and additional details">{{ old('qualifications_and_additional_details') }}</textarea>
                    @error('qualifications_and_additional_details')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-pinkish_purple text-white rounded py-2 px-4 hover:bg-turquoise block mx-auto">
                    Create Profile
                </button>
            </div>

            <div class="mb-6 text-center">
                <a href="/" class="text-lg text-pinkish_purple hover:text-turquoise transition duration-300">
                    <i class="fa-solid fa-arrow-left text-xl mr-2"></i>Back
                </a>
            </div>
        </form>
    </x-card>
</x-layout>
