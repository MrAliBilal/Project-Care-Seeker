<!-- profile.blade.php -->

<x-layout>
    @if ($userHasProfile)

    <section>
        <section class="my-16">
            <div class="mx-4 mt-8">
                <x-card class="p-10">
                    <div class="flex flex-col items-center justify-center text-center space-y-6">
                        <img class="w-48 h-48 object-cover rounded-full shadow-md mb-6"
                             src="{{ $user->picture_url ? asset('storage/' . $user->picture_url) : asset('/images/no-image.png') }}"
                             alt="User Image" />
                        <h3 class="text-3xl font-bold mb-4">{{ $user->first_name }} {{ $user->last_name }}</h3>

                        <x-profile-details fieldTitle="Job Skills" :fieldData="$user->job_skills" :isList="true" />
                        <x-profile-details fieldTitle="Languages" :fieldData="$user->profiledetail->languages" :isList="true" />
                        <x-profile-details fieldTitle="Personality Traits" :fieldData="$user->profiledetail->personality_traits" :isList="true" />
                        <x-profile-details fieldTitle="Qualifications" :fieldData="$user->profiledetail->qualifications_and_additional_details" :isList="true" />
                            <x-profile-details fieldTitle="Experience" :fieldData="$user->experience" :isList="true" />

                        <div class="mb-6">
                            <x-profile-details fieldTitle="Availability" :fieldData="$user->profiledetail->availability" :isList="true" />
                        </div>

                        <div class="text-lg">
                            <i class="fas fa-money-bill text-green-500"></i> ₨ {{ $user->hourly_rate }}/HOUR
                        </div>

                        <div class="text-lg my-4">
                            <i class="fa-solid fa-location-dot text-purple-500"></i> {{ $user->address }}
                        </div>

                        <div class="text-lg">
                            <i class="far fa-clock"></i> Member Since: {{ $user->created_at->format('M Y') }}
                        </div>

                        <div class="border-t border-gray-200 w-full my-6"></div>

                        <div>
                            <h3 class="text-2xl font-bold mb-4">Profile Description</h3>
                            <div class="text-lg leading-relaxed space-y-6 text-gray-700">
                                {{ $user->profiledetail->profile_description }}
                            </div>
                        </div>

                        <a href="mailto:{{ $user->email }}"
                           class="inline-block bg-pinkish_purple text-white px-8 py-3 rounded-full hover:bg-turquoise transition duration-300 mt-6">
                            <i class="fa-solid fa-envelope mr-2"></i> Contact Care Seeker
                        </a>
                    </div>
                </x-card>
            </div>
        </section>
    </section>
    @else
        <!-- User doesn't have a profile -->
        <section>
            <x-card class="p-10 max-w-lg mx-auto my-24">
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
                        <label for="availability" class="inline-block text-lg mb-2">Availability (Comma
                            Separated)</label>
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
                        <label for="personality_traits" class="inline-block text-lg mb-2">Personality Traits(Comma
                            Separated)</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full"
                            name="personality_traits" placeholder="Example: Creative, Calm, Friendly etc"
                            value="{{ old('personality_traits') }}" />
                        @error('personality_traits')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="qualifications_and_additional_details"
                            class="inline-block text-lg mb-2">Qualifications and Additional Details</label>
                        <textarea class="border border-gray-200 rounded p-2 w-full" name="qualifications_and_additional_details" rows="5"
                            placeholder="Add your qualifications and additional details">{{ old('qualifications_and_additional_details') }}</textarea>
                        @error('qualifications_and_additional_details')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <button type="submit"
                            class="bg-pinkish_purple text-white rounded py-2 px-4 hover:bg-turquoise block mx-auto">
                            Create Profile
                        </button>
                    </div>

                    <div class="mb-6 text-center">
                        <a href="/"
                            class="text-lg text-pinkish_purple hover:text-turquoise transition duration-300">
                            <i class="fa-solid fa-arrow-left text-xl mr-2"></i>Back
                        </a>
                    </div>
                </form>
            </x-card>
        </section>
    @endif
</x-layout>
