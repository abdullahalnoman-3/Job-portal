<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\applications;
use Illuminate\Http\Request;

class user_apply_job extends Controller
{
    public function user_apply_job(Request $request)
    {
        
        $userId = $request->header('id');

        
        if (!$userId) {
            abort(400, 'User ID not provided in header.');
        }

        // সেভ করা জব
        $userApplyJobs = Application::with('job') 
            ->where('user_id', $userId)
            ->orderBy('id', 'desc')
            ->get();

        
        return view('pages.user.user_apply_job', compact('userApplyJobs'));
    }
}
