<?php

namespace App\Http\Controllers;

use App\Models\citie;
use App\Models\countrie;
use App\Models\experience_level;
use App\Models\Job;
use App\Models\job_functions;
use App\Models\Job_Role;
use App\Models\job_types;
use Illuminate\Http\Request;

class FindJobController extends Controller
{

    // Show job search page
    public function jobs_data(Request $request)
    {
        // সার্চ ইনপুটগুলি ধরুন
        $searchTitle = $request->input('job_title'); // Job title বা keyword
        $searchLocation = $request->input('location'); // Location
        $searchExperience = $request->input('experience'); // Years of experience
    
        // ডাটাবেস থেকে সিটি, দেশ, জব ফাংশন, টাইপ, রোল এবং লেভেল ফেচ করুন
        $cityname = citie::orderBy('id', 'desc')->get();
        $countrye = countrie::orderBy('id', 'desc')->get();
        $jobtypes = job_types::orderBy('id', 'desc')->get();
    
        // Jobs query
        $jobsQuery = Job::with('citie', 'countrye', 'jobtypes')->orderBy('id', 'desc');

        // সার্চ ফিল্টার অ্যাপ্লাই করুন
        if ($searchTitle) {
            $jobsQuery->where('job_tags', 'like', '%' . $searchTitle . '%'); // এখানে title এর পরিবর্তে job_tags ব্যবহার করা হয়েছে
        }
        
        if ($searchLocation) {
            $jobsQuery->whereHas('citie', function ($query) use ($searchLocation) {
                $query->where('city_name', 'like', '%' . $searchLocation . '%');
            });
        }
        
        if ($searchExperience) {
            $jobsQuery->where('experience', '<=', $searchExperience);
        }
        
        // ফিল্টার করা জব ফেচ করুন
        $jobs = $jobsQuery->paginate();
        
        // ভিউতে ডেটা পাঠান
        return view('pages.findjob', compact('jobs', 'cityname', 'countrye', 'jobtypes'));
    }
    



    
}
