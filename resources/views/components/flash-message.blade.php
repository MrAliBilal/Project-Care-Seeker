@if(session()->has('message'))
  <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
       class="fixed bottom-4 left-1/2 transform -translate-x-1/2 bg-pinkish_purple text-white px-6 py-3 rounded-md shadow-md">
    <div class="flex items-center justify-between">
      <p class="font-semibold text-lg">{{ session('message') }}</p>
      <button @click="show = false" class="text-white focus:outline-none ml-4">
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
             xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
  </div>
@endif
