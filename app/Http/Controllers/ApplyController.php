<?php

namespace App\Http\Controllers;

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
    // যদি আপনি ভিউ রিটার্ন করতে চান
    return view('pages.user.job_apply', compact('job','email','user'));
}
}
