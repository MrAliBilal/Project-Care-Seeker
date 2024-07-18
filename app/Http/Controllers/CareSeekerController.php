<?php

namespace App\Http\Controllers;

use App\Models\jobs;
use App\Models\User;
use App\Models\Careseeker;
use Illuminate\Http\Request;
use App\Models\ProfileDetail;
use Illuminate\Support\Facades\Storage;

class CareSeekerController extends Controller
{
    public function postJob () {
        return view ('care-seeker.job-create');
    }

    public function manageJob()
    {
        // Retrieve the authenticated user
        $user = auth()->user();

        // Use the listings relationship to get jobs associated with the user
        $listings = $user->listings;

        // Pass the jobs to the view
        return view('care-seeker.manage-job', ['listings' => $listings]);
    }

    public function addJob(Request $request)
    {

        $formFields = $request->validate([
            'job_title' => 'required',
            'job_location' => 'required',
            'hourly_budget' => 'required',
            'service_category' => 'required',
            'service_time' => 'required',
            'job_description' => 'required',
        ]);

        // Add created_at and updated_at fields to the formFields array
        $formFields['created_at'] = now();
        $formFields['updated_at'] = now();

        if ($request->hasFile('job_image')) {
            $formFields['job_image'] = $request->file('job_image')->store('jobimages', 'public');
        }

        $formFields['user_id'] = auth()->id();
        // Create User
        jobs::create($formFields);

        return redirect('/careseeker/manage-job')->with('message', 'Job has been posted and now Suppot Worker will contact soon');
    }

    public function editJob(jobs $listing) {
        // dd($listing);
        return view('care-seeker.edit-job', ['listing' => $listing]);
    }

    public function updateJob(Request $request, jobs $listing) {
        // Make sure logged in user is owner
        if($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'job_title' => 'required',
            'job_location' => 'required',
            'hourly_budget' => 'required',
            'service_category' => 'required',
            'service_time' => 'required',
            'job_description' => 'required',
        ]);

        if ($request->hasFile('job_image')) {
            $formFields['job_image'] = $request->file('job_image')->store('jobimages', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Job updated successfully!');
    }

    public function workerlist()
    {
        $listings = ProfileDetail::with('user') // Eager load the 'users' relationship
            ->latest()
            ->filter(request(['tag', 'search']))
            ->paginate(8);

        return view('care-seeker.worker-list', compact('listings'));
    }

    public function findworker(ProfileDetail $listing) {
        $listing = $listing->load('user');
        return view('care-seeker.worker-profile', [
            'listing' => $listing
        ]);
    }

        // Delete Listing
        public function destroy(jobs $listing) {
            // Make sure logged in user is owner
            if($listing->user_id != auth()->id()) {
                abort(403, 'Unauthorized Action');
            }

            if($listing->job_image && Storage::disk('public')->exists($listing->job_image)) {
                Storage::disk('public')->delete($listing->job_image);
            }
            $listing->delete();
            return redirect('/')->with('message', 'Listing deleted successfully');
        }

}
