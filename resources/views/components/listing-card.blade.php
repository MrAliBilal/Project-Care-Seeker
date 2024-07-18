@props(['listing'])

<x-card class="p-6">
    <div class="flex items-center">
        <img class="w-32 h-32 object-cover rounded-full md:w-48 md:h-48 mr-6"
             src="{{$listing->job_image ? asset('storage/' . $listing->job_image) : asset('/images/no-image.png')}}"
             alt="Job Image" />

        <div>
            <h3 class="text-2xl font-bold mb-2">
                <a class="text-pinkish_purple hover:underline transition duration-300" href="/supportworker/joblist/{{ $listing->id }}">
                    {{$listing->job_title}}
                </a>
            </h3>

            <div class="text-gray-700 mb-2">
                <i class="fas fa-user"></i>
                <span>{{$listing->user->first_name}} {{$listing->user->last_name}}</span>
            </div>

            <div class="mb-2 text-green-600 ">
                <i class="fas fa-money-bill"></i>
                <span class="text-green-600 font-bold">₨ {{$listing->hourly_budget}}/HOUR</span>
            </div>

            <div class="mb-2">
                <x-listing-tags :tagsCsv="$listing->service_category" />
            </div>

            <div class="text-gray-800">
                <i class="fa-solid fa-location-dot"></i>
                {{$listing->job_location}}
            </div>
        </div>
    </div>
</x-card>
