<?php

namespace App\Http\Controllers;

use App\Models\SaveJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class user_save_job extends Controller
{
    public function user_save_job(Request $request)
    {
        // হেডার থেকে ইউজার আইডি ধরুন
        $userId = $request->header('id');

        // Validate user ID
        if (!$userId) {
            abort(400, 'User ID not provided in header.');
        }

        // সেভ করা জবগুলো খুঁজুন
        $userSaveJobs = SaveJob::where('user_id', $userId)
            ->orderBy('id', 'desc')
            ->get();

        // ভিউতে পাঠানো
        return view('pages.user.user_save_job', compact('userSaveJobs'));
    }
}
