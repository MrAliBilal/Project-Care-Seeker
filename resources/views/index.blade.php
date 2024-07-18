<x-layout>
      @include('partials._hero')

    <section class="mt-8 mx-4">
        <h2 class="text-3xl font-bold mb-6 text-center">Care and support workers are ready to help you with</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8">
            <!-- Images of services offered -->
            @foreach ($services as $service)
                <div class="flex flex-col items-center mb-8 p-4 bg-white rounded-lg shadow-md transition duration-300 transform hover:scale-105">
                    <img src="{{ asset('images/' . $service['image']) }}" alt="{{ $service['name'] }}"
                        class="w-32 h-32 object-cover rounded-full mb-4">
                    <p class="text-lg font-semibold text-center">{{ $service['name'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section>
        <div class="container mx-auto my-8">
            <h2 class="text-3xl font-bold mb-6 text-center">Meet our care and support workers</h2>

            <div class="flex flex-wrap -mx-4">
                <!-- Card 1 -->
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('images/worker1.jpeg') }}" class="w-full h-48 object-cover" alt="Support Worker 1">
                        <div class="p-4">
                            <h5 class="text-xl font-semibold mb-2"> Ahmed Ali</h5>
                            <p class="text-gray-700 mb-2">Karachi, Pakistan</p>
                            <p class="text-gray-600">Hi, I'm a compassionate support worker based in Karachi. With a focus on personal care, I strive to create a comfortable environment for my clients, promoting their well-being and independence.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('images/worker2.jpeg') }}" class="w-full h-48 object-cover" alt="Support Worker 2">
                        <div class="p-4">
                            <h5 class="text-xl font-semibold mb-2">Zainab Malik</h5>
                            <p class="text-gray-700 mb-2">Islamabad, Pakistan</p>
                            <p class="text-gray-600">I'm a dedicated support worker in Islamabad. My expertise lies in elderly care and companionship. Clients appreciate my empathy, reliability, and commitment to fostering a positive atmosphere.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('images/worker3.jpeg') }}" class="w-full h-48 object-cover" alt="Support Worker 3">
                        <div class="p-4">
                            <h5 class="text-xl font-semibold mb-2">Bilal Ahmed</h5>
                            <p class="text-gray-700 mb-2">Rawalpindi, Pakistan</p>
                            <p class="text-gray-600">Greetings! I'm a caring support worker in Rawalpindi. I specialize in household assistance and medication management, offering a friendly demeanor and trusted companionship to my clients.</p>
                        </div>
                    </div>
                </div>

                <!-- Additional Card -->
                <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('images/worker4.jpeg') }}" class="w-full h-48 object-cover" alt="Support Worker 4">
                        <div class="p-4">
                            <h5 class="text-xl font-semibold mb-2">Sadia Khan</h5>
                            <p class="text-gray-700 mb-2">Lahore, Pakistan</p>
                            <p class="text-gray-600">Hi, I'm a compassionate support worker in Lahore. My focus includes baby care and personal assistance. Clients recognize me for my patience, attention to detail, and dedication to their overall well-being.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mt-6 p-4">
      {{-- {{$listings->links()}} --}}
    </div>
  </x-layout>
