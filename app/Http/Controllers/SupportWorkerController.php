<?php

namespace App\Http\Controllers;

use App\Models\jobs;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ProfileDetail;
use App\Http\Controllers\Controller;

class SupportWorkerController extends Controller
{
    public function joblist()
    {
        $listings = Jobs::latest()
            ->filter(request(['tag', 'search']))
            ->with('user')
            ->paginate(8);

        return view('support-worker.job-listing', compact('listings'));
    }


    public function show(Jobs $listing) {
        return view('support-worker.show-job', [
            'listing' => $listing
        ]);
    }


    public function createProfile() {
        return view('support-worker.new-profile');
    }

public function addprofile(Request $request)
{
    // Validate form fields
    $formFields = $request->validate([
        'profile_description' => 'required',
        'availability' => 'required',
        'languages' => 'required',
        'personality_traits' => 'required',
        'qualifications_and_additional_details' => 'required',
    ]);

    // Add created_at and updated_at fields to the formFields array
    $formFields['created_at'] = now();
    $formFields['updated_at'] = now();

    // Add user_id to the formFields array
    $formFields['user_id2'] = auth()->id();

    // Create Profile
    ProfileDetail::create($formFields);

    return redirect('/supportworker/profile')->with('message', 'Profile created successfully!');
}


// public function showProfile(ProfileDetail $listing) {
//     // Assuming you have a User model with a profiledetails relationship
//     $user = auth()->user();
//     $listing = $listing->load('users');

//     // Check if the user has a profiledetails relationship
//     $userHasProfile = $user->profiledetails()->exists();

//     return view('support-worker.profile', [
//         'userHasProfile' => $userHasProfile,
//         'listing' => $listing
//     ]);
// }


// public function showProfile(ProfileDetail $listing) {
//     $listing = $listing->load('users');
//     $user = auth()->user();
//     $userHasProfile = $user->profiledetails()->exists();
//     return view('support-worker.profile', [
//         'userHasProfile' => $userHasProfile,
//         'listing' => $listing
//     ]);
// }


public function showProfile() {
// Assuming there's a one-to-one relationship between User and ProfileDetail
$user = auth()->user();

// Eager load the associated profiledetail
$userWithProfile = User::with('profiledetail')->find($user->id);

// Check if the user has a profile
$userHasProfile = $userWithProfile->profiledetail !== null;

if (!$userHasProfile) {
    session()->flash('message', 'Create your profile to view your profile details.');
}

return view('support-worker.profile', [
    'user' => $userWithProfile,
    'userHasProfile' => $userHasProfile,
]);

}

}
