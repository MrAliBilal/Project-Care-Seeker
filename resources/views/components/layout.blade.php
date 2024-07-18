<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>


    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: '#0a4444',
                        pinkish_purple: '#cd46a2',
                        turquoise: '#00c2bc',
                        navbar: '#94a3b8',
                    },
                },
            },
        }
    </script>

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* Ensure the body takes at least the full viewport height */
        }

        main {
            flex-grow: 1;
            /* Allow the main content to grow and take the remaining space */
        }


        .user-name {
            display: inline-block;
            font-size: 1.2rem;
            font-weight: bold;
            letter-spacing: 1px;
            animation: colorChange 3s infinite alternate;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        @keyframes colorChange {
            0% {
                color: #cd46a2;
                /* pinkish_purple */
            }

            100% {
                color: #00c2bc;
                /* turquoise */
            }
        }
    </style>
</head>

<title>CareSeeker | Find Support Worker & Care Seeker Jobs</title>
</head>

<body class="flex flex-col min-h-screen">
    <nav class="bg-laravel p-4">
        <div class="container mx-auto flex flex-col md:flex-row md:justify-between items-center">
            <a href="/" class="text-white font-bold text-lg mb-2 md:mb-0">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-24" />
            </a>

            <ul class="flex flex-col md:flex-row space-y-4 md:space-x-6 text-lg md:items-center">

                <ul class="flex space-x-6 text-lg">
                    @auth

                        @if (auth()->user()->account_type === 'CareSeeker')
                            <li>
                                <a href="/about" class="text-turquoise hover:text-pinkish_purple">
                                    <i class="fas fa-info-circle"></i> About
                                </a>
                            </li>
                            <li>
                                <a href="/testimonials" class="text-turquoise hover:text-pinkish_purple">
                                    <i class="fas fa-star"></i> Testimonials
                                </a>
                            </li>
                            <li>
                                <a href="/careseeker/postjob" class="text-turquoise hover:text-pinkish_purple">
                                    <i class="fas fa-file-alt"></i> Post Job
                                </a>
                            </li>
                            <li>
                                <a href="/careseeker/manage-job" class="text-turquoise hover:text-pinkish_purple">
                                    <i class="fas fa-tasks"></i> Manage Jobs
                                </a>
                            </li>
                            <li>
                                <a href="/careseeker/worker-list" class="text-turquoise hover:text-pinkish_purple">
                                    <i class="fas fa-search"></i> Find Worker
                                </a>
                            </li>

                            <li>
                                <a href="/chat" class="text-turquoise hover:text-pinkish_purple">
                                    <i class="fas fa-comments"></i> Chat
                                </a>
                            </li>

                            <li>
                                <form class="inline" method="POST" action="/logout">
                                    @csrf
                                    <button type="submit" class="text-turquoise hover:text-pinkish_purple">
                                        <i class="fas fa-door-closed"></i> Logout
                                    </button>
                                </form>
                            </li>
                        @else
                            <li>
                                <a href="/about" class="text-turquoise hover:text-pinkish_purple">
                                    <i class="fas fa-info-circle"></i> About
                                </a>
                            </li>
                            <li>
                                <a href="/testimonials" class="text-turquoise hover:text-pinkish_purple">
                                    <i class="fas fa-star"></i> Testimonials
                                </a>
                            </li>
                            <li>
                                <a href="/supportworker/joblist" class="text-turquoise hover:text-pinkish_purple">
                                    <i class="fas fa-clipboard-list"></i> Job Listing
                                </a>
                            </li>
                            <li>
                                <a href="/supportworker/profile" class="text-turquoise hover:text-pinkish_purple">
                                    <i class="fas fa-user"></i> Profile
                                </a>
                            </li>

                            <li>
                                <a href="/chat" class="text-turquoise hover:text-pinkish_purple">
                                    <i class="fas fa-comments"></i> Chat
                                </a>
                            </li>

                            <li>
                                <form class="inline" method="POST" action="/logout">
                                    @csrf
                                    <button type="submit" class="text-turquoise hover:text-pinkish_purple">
                                        <i class="fas fa-door-closed"></i> Logout
                                    </button>
                                </form>
                            </li>
                        @endif

                        <li>
                            <span class="user-name">{{ auth()->user()->first_name }}</span>
                            <span class="mr-2 text-turquoise">{{ auth()->user()->last_name }}</span>
                        </li>
                    @else
                        <li>
                            <a href="/about" class="text-turquoise hover:text-pinkish_purple">
                                <i class="fas fa-info-circle"></i> About
                            </a>
                        </li>
                        <li>
                            <a href="/postjob" class="text-turquoise hover:text-pinkish_purple">
                                <i class="fas fa-file-alt"></i> Post Job
                            </a>
                        </li>
                        <li>
                            <a href="/find-worker" class="text-turquoise hover:text-pinkish_purple">
                                <i class="fas fa-search"></i> Find Worker
                            </a>
                        </li>
                        <li>
                            <a href="/testimonials" class="text-turquoise hover:text-pinkish_purple">
                                <i class="fas fa-star"></i> Testimonials
                            </a>
                        </li>
                        <li>
                            <a href="/join" class="text-turquoise hover:text-pinkish_purple">
                                <i class="fas fa-user-plus"></i> Register
                            </a>
                        </li>
                        <li>
                            <a href="/login" class="text-turquoise hover:text-pinkish_purple">
                                <i class="fas fa-arrow-right-to-bracket"></i> Login
                            </a>
                        </li>
                    @endauth
                </ul>
        </div>
    </nav>

    <main>
        {{ $slot }}
    </main>
    <footer class="bottom-0 left-0 w-full bg-laravel text-white p-4  ">
        <div class="container mx-auto flex flex-col items-center justify-center">
            <p class="text-lg font-bold mb-2">Final Year Project: Care Seeker</p>
            <p class="text-sm">
                Developed by
                <span class="text-pinkish_purple font-semibold">Ali Bilal (BC180404460)</span>
                <span class="mx-1">&vert;</span>
                <span class="text-turquoise font-semibold">Group ID: S2302148F7</span>
                <span class="mx-1">&vert;</span>
                <span class="text-pinkish_purple font-semibold">Supervised by Faizan Tahir</span>
                <span class="mx-1">&vert;</span>
                <span class="text-turquoise font-semibold"> <a href="https://github.com/AliBilal-1/"> Github: AliBilal-1 </a> </span>
            </p>
        </div>
    </footer>
    <x-flash-message />
</body>

</html>
