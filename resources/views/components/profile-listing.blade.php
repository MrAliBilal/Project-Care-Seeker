@props(['listing'])
<x-card class="p-6">
    <div class="flex items-center">
        <img class="w-32 h-32 object-cover rounded-full md:w-48 md:h-48 mr-6"
             src="{{$listing->user->picture_url ? asset('storage/' . $listing->user->picture_url) : asset('/images/no-image.png')}}"
             alt="Job Image" />

        <div>
            <h3 class="text-2xl font-bold mb-2">
                <a class="text-pinkish_purple hover:underline transition duration-300" href="/careseeker/worker-list/{{ $listing->id }}">
                    {{$listing->user->first_name}} {{$listing->user->last_name}}
                </a>
            </h3>

            <div class="mb-2 text-green-600 ">
                <i class="fas fa-money-bill"></i>
                <span class="text-green-600 font-bold">₨ {{$listing->user->hourly_rate}}/HOUR</span>
            </div>

            <div class="mb-2">
                <x-profile-tags :tagsCsv="$listing->user->job_skills" />
            </div>

            <div class="text-gray-800">
                <i class="fa-solid fa-location-dot"></i>
                {{$listing->user->address}}
            </div>
        </div>
    </div>
</x-card>
