<!-- _hero Partial -->

@php
    $userAccountType = auth()->check() ? auth()->user()->account_type : null;
@endphp

<!-- Care Seeker Section -->
@if ($userAccountType === 'CareSeeker')
    <section class="relative h-72 bg-[#0e6868] flex flex-col justify-center items-center text-center space-y-4 mb-4">
        <div class="absolute top-0 left-0 w-full h-full opacity-20 bg-no-repeat bg-center"
        style="background-image: url('{{ asset('images/laravel-logo.png') }}')"></div>

        <div class="z-10 text-white">
            <h1 class="text-6xl font-bold uppercase">
                Welcome, Care<span class="text-pinkish_purple">Seeker</span>
            </h1>
            <p class="text-2xl font-bold my-4">
                Discover and Connect with Support Workers
            </p>
            <div>
                <!-- Customize content for Care Seekers -->
                <a href="/careseeker/worker-list" class="inline-block bg-white text-[#00c2bc] py-2 px-6 rounded-full uppercase font-bold tracking-wide transition duration-300 hover:bg-[#00a79f] hover:text-white">
                    Explore Support Workers
                </a>
            </div>
        </div>
    </section>
@endif

<!-- Support Worker Section -->
@if ($userAccountType === 'SupportWorker')
    <section class="relative h-72 bg-[#072626] flex flex-col justify-center items-center text-center space-y-4 mb-4">
        <div class="absolute top-0 left-0 w-full h-full opacity-20 bg-no-repeat bg-center"
        style="background-image: url('{{ asset('images/laravel-logo.png') }}')"></div>

        <div class="z-10 text-white">
            <h1 class="text-6xl font-bold uppercase">
                Welcome, Support<span class="text-pinkish_purple">Worker</span>
            </h1>
            <p class="text-2xl font-bold my-4">
                Offer Your Skills and Help Care Seekers
            </p>
            <div>
                <!-- Customize content for Support Workers -->
                <a href="/supportworker/joblist" class="inline-block bg-white text-[#007f7e] py-2 px-6 rounded-full uppercase font-bold tracking-wide transition duration-300 hover:bg-[#003c3b] hover:text-white">
                    Offer Your Support
                </a>
            </div>
        </div>
    </section>
@endif

<!-- Default Section -->
@if ($userAccountType === null)
    <section class="relative h-72 bg-turquoise flex flex-col justify-center items-center text-center space-y-4 mb-4">
        <div class="absolute top-0 left-0 w-full h-full opacity-20 bg-no-repeat bg-center"
        style="background-image: url('{{ asset('images/laravel-logo.png') }}')"></div>

        <div class="z-10 text-white">
            <h1 class="text-6xl font-bold uppercase">
                Welcome to Care<span class="text-pinkish_purple">Seeker</span>
            </h1>
            <p class="text-2xl font-bold my-4">
                Discover Opportunities for Care Seekers and Support Workers
            </p>
            <div>
                <!-- Customize content for Default Section -->
                <a href="/join" class="inline-block bg-white text-[#007f7e] py-2 px-6 rounded-full uppercase font-bold tracking-wide transition duration-300 hover:bg-[#118f8d] hover:text-white">
                    Sign Up to List a Job
                </a>
            </div>
        </div>
    </section>
@endif
