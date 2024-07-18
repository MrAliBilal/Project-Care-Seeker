<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HomeController extends Controller
{
    public function index() {

        $services = [
            ['name' => 'Cooking', 'image' => 'cooking.png'],
            ['name' => 'Baby Care', 'image' => 'baby_care.png'],
            ['name' => 'Personal Care', 'image' => 'personal_care.png'],
            ['name' => 'Animal Care', 'image' => 'animal_care.png'],
            ['name' => 'Domestic Assistance', 'image' => 'domestic_assistance.png'],
            ['name' => 'Meal Preparation', 'image' => 'meal_preparation.png'],
            ['name' => 'Getting Out and About', 'image' => 'getting_out_and_about.png'],
            ['name' => 'Social Support and Companionship', 'image' => 'social_support.png'],
            ['name' => 'Maintain an Independent Life', 'image' => 'maintain_independent_life.png'],
            ['name' => 'Help with Morning and Evening Routines', 'image' => 'help_with_routines.png'],

        ];

        return view('index', compact('services'));
    }

    public function about() {
        return view('about');
    }

    public function registerPage() {
        return view('users.registerPage');
    }

    public function login() {
        return view('users.login');
    }

    public function registerCareseeker() {
        return view('users.careseeker-register');
    }

    public function registerSupportworker () {
        return view('users.supportworker-register');
    }

    public function returnfindworker() {
        return redirect('/login')->with('message','In order to find Support Worker you need to login first');
    }

    public function returmpostjob() {
        return redirect('/login')->with('message','In order to post job you need to login first');
    }

    public function homereturn () {
        return redirect('/')->with('message',"This page is for logged-out users. You're logged in and can't access it.");
    }



    public function storeCareseeker (Request $request) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'Care Seeker has registered and logged in');
    }

    public function storeSupportworker (Request $request) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
            'contact_number' => 'required',
            'address' => 'required',
            'job_skills' => 'required',
            'experience' => 'required',
            'hourly_rate' => 'required',
            'reference1_name' => 'required',
            'reference1_contact' => 'required',
            'reference1_info' => 'required',
            'reference2_name' => 'required',
            'reference2_contact' => 'required',
            'reference2_info' => 'required',
        ]);

        if($request->hasFile('picture_url')) {
            $formFields['picture_url'] = $request->file('picture_url')->store('profilepicture', 'public');
        }

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        $formFields['account_type'] = 'SupportWorker';

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'Support Woker has registered and logged in');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function testimonials()
    {
        $testimonials = [
            [
                'text' => "Careseekers has been a game-changer for me. The personalized care and attention to my needs have made a significant impact on my well-being.",
                'author' => "Emma - Elderly Care Seeker",
            ],
            [
                'text' => "I appreciate the professionalism and compassion shown by the support workers at Careseekers. It's more than just a service; it's a community that cares.",
                'author' => "Michael - Disability Support Seeker",
            ],
            [
                'text' => "The dedication of the Careseekers team is unmatched. They go above and beyond to ensure that I receive the best possible care tailored to my requirements.",
                'author' => "Sophia - Mental Health Support Seeker",
            ],
            [
                'text' => "Being part of the Careseekers community has made a positive impact on my life. The quality of care and the genuine concern for clients set them apart.",
                'author' => "Robert - Home Care Seeker",
            ],
            [
                'text' => "The platform is user-friendly, and the support team is always ready to assist. Careseekers has made finding the right support worker a seamless experience.",
                'author' => "Olivia - Personal Care Seeker",
            ],
            [
                'text' => "I am grateful for the exceptional care provided by the dedicated support workers. Careseekers has truly transformed my perspective on caregiving services.",
                'author' => "Liam - Respite Care Seeker",
            ],
            [
                'text' => "Careseekers understands the diverse needs of its clients. The flexibility and variety of services offered make it a reliable and trustworthy platform.",
                'author' => "Isabella - Child Care Seeker",
            ],
            [
                'text' => "The commitment to creating a supportive environment for both clients and support workers is what sets Careseekers apart. It's a platform that values people.",
                'author' => "Noah - Aged Care Seeker",
            ],
            [
                'text' => "Navigating through health challenges is made easier with the Careseekers community. The compassion and understanding from the team are commendable.",
                'author' => "Grace - Chronic Illness Support Seeker",
            ],
            [
                'text' => "As a busy professional, finding reliable care for my loved ones is crucial. Careseekers has been a reliable companion, offering peace of mind and quality care.",
                'author' => "Ethan - Family Care Seeker",
            ],
        ];

        return view('testimonials', compact('testimonials'));
    }
}

