<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function applyForm(Request $request)
{
   
    $job = Job::findOrFail($request->job_id); 
    $email = $request->header('email');
    $userId = $request->header('id');

    $user = User::findOrFail($userId);
   
    return view('pages.user.job_apply', compact('job','email','user'));
}



public function store(Request $request)
{
    // Validate the form data
    // $request->validate([
    //     'user_id' => 'required|exists:users,id',
    //     'job_id' => 'required|exists:jobs,id',
    //     'email' => 'required|email',
    //     'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
    // ]);

    // Handle file upload
    $cvPath = $request->file('cv')->store('cvs', 'public');

    // Create a new application
    Application::create([
        'user_id' => $request->user_id,
        'job_id' => $request->job_id,
        'applicant_email' => $request->email,
        'cv' => $cvPath,
        'status' => 'pending',
    ]);

    // Redirect with success message
    return redirect()->route('findjob')->with('success', 'Your application has been submitted successfully!');
}







}
