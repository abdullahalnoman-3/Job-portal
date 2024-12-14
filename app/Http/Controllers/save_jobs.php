<?php

namespace App\Http\Controllers;

use App\Models\SaveJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class save_jobs extends Controller
{
    public function saveJob(Request $request)
    {  
        $userId = $request->header('id');
        $jobId = $request->input('job_id');

        // Validate data
        if (!$userId || !$jobId) {
            return back()->with('error', 'User ID and Job ID are required.');
        }

        // Check if the job is already saved
        $alreadySaved = SaveJob::where('user_id', $userId)
            ->where('job_id', $jobId)
            ->exists();

        if ($alreadySaved) {
            return back()->with('message', 'Job already saved.');
        }
        // Save the job
        SaveJob::create([
            'user_id' => $userId,
            'job_id' => $jobId,
        ]);

        return back()->with('message', 'Job saved successfully.');
    }
}