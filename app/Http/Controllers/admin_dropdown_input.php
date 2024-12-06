<?php

namespace App\Http\Controllers;

use App\Models\experience_level;
use Illuminate\Http\Request;

class admin_dropdown_input extends Controller
{
    function manage_job_lavel()
    {
        $jobLevels = experience_level::orderBy('id', 'desc')->get(); // ডিসেন্ডিং অর্ডারে ডেটা আনুন
        return view("pages.admin.manage_job_lavel", compact('jobLevels'));
    }

    function job_level_store(Request $request){
        $name = $request->get('name');

        // Insert into Database
        experience_level::create([
            'experience_name' => $name,
        ]);

        // Redirect with Success Message
        return redirect()->back()->with('success', 'Job Level added successfully!');
        // return ResponseHelper::Out('success', "Registration Completed Successfully !", 200);
    }
}
