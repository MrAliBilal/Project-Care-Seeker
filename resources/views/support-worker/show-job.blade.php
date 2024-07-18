<x-layout>
    <div class="flex items-center justify-between mx-4">
        <a href="/supportworker/joblist" class="flex items-center text-lg text-pinkish_purple hover:text-turquoise transition duration-300">
            <i class="fa-solid fa-arrow-left text-xl mr-2"></i> Back
        </a>
    </div>

    <div class="mx-4 mt-8">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center space-y-6">
                <img class="w-48 h-48 object-cover rounded-full shadow-md mb-6"
                     src="{{$listing->job_image ? asset('storage/' . $listing->job_image) : asset('/images/no-image.png')}}"
                     alt="Job Image" />

                <h3 class="text-3xl font-bold mb-4">{{$listing->job_title}}</h3>

                <div class="text-lg mb-2"><i class="fas fa-user text-gray-600"></i> {{$listing->user->first_name}} {{$listing->user->last_name}}</div>

                <x-listing-tags :tagsCsv="$listing->service_category" class="mb-4" />

                <div class="text-lg"><i class="fas fa-money-bill text-green-500"></i> ₨ {{$listing->hourly_budget}} per hour</div>

                <div class="text-lg my-4"><i class="fa-solid fa-clock text-blue-500"></i> {{$listing->service_time}}</div>

                <div class="text-lg"><i class="fa-solid fa-location-dot text-purple-500"></i> {{$listing->job_location}}</div>

                <div class="border-t border-gray-200 w-full my-6"></div>

                <div>
                    <h3 class="text-2xl font-bold mb-4">Job Description</h3>
                    <div class="text-lg leading-relaxed space-y-6 text-gray-700">
                        {{$listing->job_description}}
                    </div>
                </div>

                <a href="mailto:{{$listing->user->email}}"
                   class="inline-block bg-pinkish_purple text-white px-8 py-3 rounded-full hover:bg-turquoise transition duration-300 mt-6">
                    <i class="fa-solid fa-envelope mr-2"></i> Contact Care Seeker
                </a>
            </div>
        </x-card>
    </div>


</x-layout>
