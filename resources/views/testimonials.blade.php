<!-- testimonials.blade.php -->

<x-layout>
    <div x-data="{ currentTestimonial: 0 }" class="flex items-center justify-center h-screen">
        <div class="max-w-2xl mx-auto">
            @foreach ($testimonials as $index => $testimonial)
                <div x-show="currentTestimonial === {{ $index }}" x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 transform translate-x-{{ $index === 0 ? '-full' : 'full' }}"
                    x-transition:enter-end="opacity-100 transform translate-x-0" x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform translate-x-0" x-transition:leave-end="opacity-0 transform translate-x-{{ $index === 0 ? '-full' : 'full' }}">
                    <div class="p-6 bg-white shadow-md rounded-lg mb-4">
                        <p class="text-xl font-semibold mb-2">{{ $testimonial['text'] }}</p>
                        <p class="text-gray-600">- {{ $testimonial['author'] }}</p>
                    </div>
                </div>
            @endforeach

            <div class="flex justify-between mt-4">
                <button x-show="currentTestimonial > 0" @click="currentTestimonial--"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Previous
                </button>

                <button x-show="currentTestimonial < {{ count($testimonials) - 1 }}" @click="currentTestimonial++"
                    class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Next
                </button>
            </div>
        </div>
    </div>
</x-layout>
