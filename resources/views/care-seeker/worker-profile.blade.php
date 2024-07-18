<!-- main-page.blade.php -->

<x-layout>
    <section class="my-16">
        <div class="mx-4 mt-8">
            <x-card class="p-10">
                <div class="flex flex-col items-center justify-center text-center space-y-6">
                    <img class="w-48 h-48 object-cover rounded-full shadow-md mb-6"
                         src="{{ $listing->user->picture_url ? asset('storage/' . $listing->user->picture_url) : asset('/images/no-image.png') }}"
                         alt="User Image" />

                    <h3 class="text-3xl font-bold mb-4">{{ $listing->user->first_name }} {{ $listing->user->last_name }}</h3>

                    <x-profile-details fieldTitle="Job Skills" :fieldData="$listing->user->job_skills" :isList="true" />
                    <x-profile-details fieldTitle="Languages" :fieldData="$listing->languages" :isList="true" />
                    <x-profile-details fieldTitle="Personality Traits" :fieldData="$listing->personality_traits" :isList="true" />
                    <x-profile-details fieldTitle="Qualifications" :fieldData="$listing->qualifications_and_additional_details" :isList="true" />
                        <x-profile-details fieldTitle="Experience" :fieldData="$listing->user->experience" :isList="true" />

                    <div class="mb-6">
                        <x-profile-details fieldTitle="Availability" :fieldData="$listing->availability" :isList="true" />
                    </div>

                    <div class="text-lg">
                        <i class="fas fa-money-bill text-green-500"></i> ₨ {{ $listing->user->hourly_rate }}/HOUR
                    </div>

                    <div class="text-lg my-4">
                        <i class="fa-solid fa-location-dot text-purple-500"></i> {{ $listing->user->address }}
                    </div>

                    <div class="text-lg">
                        <i class="far fa-clock"></i> Member Since: {{ $listing->user->created_at->format('M Y') }}
                    </div>

                    <div class="border-t border-gray-200 w-full my-6"></div>

                    <div>
                        <h3 class="text-2xl font-bold mb-4">Profile Description</h3>
                        <div class="text-lg leading-relaxed space-y-6 text-gray-700">
                            {{ $listing->profile_description }}
                        </div>
                    </div>

                    <a href="mailto:{{ $listing->user->email }}"
                       class="inline-block bg-pinkish_purple text-white px-8 py-3 rounded-full hover:bg-turquoise transition duration-300 mt-6">
                        <i class="fa-solid fa-envelope mr-2"></i> Contact Care Seeker
                    </a>
                </div>
            </x-card>
        </div>
    </section>
</x-layout>
