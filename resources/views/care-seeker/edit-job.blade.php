<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Update a Care Seeker Job</h2>
            <p class="mb-4">Update a Job to Find a Support Worker</p>
        </header>

        <form method="POST" action="/careseeker/{{ $listing->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="job_title" class="text-lg block mb-2">Job Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="job_title"
                    placeholder="Example: Babysitting" value="{{ $listing->job_title }}" />
                @error('job_title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="job_location" class="inline-block text-lg mb-2">Job Location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="job_location"
                    placeholder="Example: Islamabad etc" value="{{ $listing->job_title }}" />

                @error('job_location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="hourly_budget" class="inline-block text-lg mb-2">
                    Hourly Budget
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="hourly_budget"
                    placeholder="Example: 200 PKR" value="{{ $listing->job_title }}"" />

                @error('hourly_budget')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="service_category" class="inline-block text-lg mb-2">
                    Service Category (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="service_category"
                    placeholder="Example: baby care, cooking, personal care, animal care, etc"
                    value="{{ $listing->service_category }}" />

                @error('service_category')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="service_time" class="inline-block text-lg mb-2">
                    Service Time
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="service_time"
                    placeholder="Example: Monday to Friday, 9 hour per day, etc" value="{{ $listing->service_time }}" />

                @error('service_time')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="job_image" class="inline-block text-lg mb-2">
                    Image
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="job_image" />

                <img class="w-48 mx-auto mb-6 mt-6 "
                    src="{{ $listing->job_image ? asset('storage/' . $listing->job_image) : asset('/images/no-image.png') }}"
                    alt="" />

                @error('job_image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="job_description" class="inline-block text-lg mb-2">
                    Job Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="job_description" rows="10"
                    placeholder="Example: Looking for a babysitter for my 6-month-old baby">{{ $listing->job_description }}</textarea>

                @error('job_description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit"
                    class="bg-pinkish_purple text-white rounded py-2 px-4 hover:bg-turquoise block mx-auto">
                    Update Job
                </button>
            </div>

            <div class="mb-6 text-center">
                <a href="/" class=" text-lg text-pinkish_purple hover:text-turquoise transition duration-300">
                    <i class="fa-solid fa-arrow-left text-xl mr-2"></i>Back</a>
            </div>
        </form>
    </x-card>
</x-layout>
