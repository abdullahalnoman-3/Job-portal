<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\citie;
use App\Models\countrie;
use App\Models\Job_Role;
use App\Models\job_types;
use Illuminate\Http\Request;
use App\Models\job_functions;
use App\Helper\ResponseHelper;
use App\Models\experience_level;

class FindJobController extends Controller
{

    
    // public function jobs_data(Request $request)
    // {
    //     $orderBy = $request->input('order_by', 'desc'); // Default sorting is 'desc'
    //     $searchTitle = $request->input('job_title');
    //     $searchLocation = $request->input('location');
    //     $searchExperience = $request->input('experience');

    //     // Fetch city, country, and job types for dropdowns
    //     $cityname = citie::orderBy('id', 'desc')->get();
    //     $countrye = countrie::orderBy('id', 'desc')->get();
    //     $jobtypes = job_types::orderBy('id', 'desc')->get();

    //     // Jobs query with filters
    //     $jobsQuery = Job::with('citie', 'countrye', 'jobtypes');

    //     if ($searchTitle) {
    //         $jobsQuery->where('job_tags', 'like', '%' . $searchTitle . '%');
    //     }

    //     if ($searchLocation) {
    //         $jobsQuery->whereHas('citie', function ($query) use ($searchLocation) {
    //             $query->where('city_name', 'like', '%' . $searchLocation . '%');
    //         });
    //     }

    //     if ($searchExperience) {
    //         $jobsQuery->where('experience', '<=', $searchExperience);
    //     }

    //     // Apply sorting order
    //     $jobsQuery->orderBy('id', $orderBy);

    //     // Paginate jobs
    //     $jobs = $jobsQuery->paginate(10); // Optional: Adjust items per page as needed

    //     // Return the view with all necessary data
    //     return view('pages.findjob', compact('jobs', 'cityname', 'countrye', 'jobtypes'));
    // }




    public function findJobsPageWithFilters()
    {
        return view('pages.findjob');
    }

    public function findJobsWithFilters(Request $request)
    {
        $orderBy = $request->input('order_by', 'desc'); // Default sorting is 'desc'
        $searchTitle = $request->input('job_title');
        $searchLocation = $request->input('location');
        $searchExperience = $request->input('experience');

        $minSalary = $request->input('minSalary');
        $maxSalary = $request->input('maxSalary');

        // Jobs query with filters
        $jobsQuery = Job::with('citie', 'countrye', 'jobtypes');

        if ($searchTitle) {
            $jobsQuery->where('job_tags', 'like', '%' . $searchTitle . '%');
        }

        if ($searchLocation) {
            $jobsQuery->whereHas('citie', function ($query) use ($searchLocation) {
                $query->where('city_name', 'like', '%' . $searchLocation . '%');
            });
        }

        if ($searchExperience) {
            $jobsQuery->where('experience', '<=', $searchExperience);
        }

        if($minSalary){
            $jobsQuery->where('min_salary', '>=', $minSalary);
        }

        if($maxSalary){
            $jobsQuery->where('max_salary', '<=', $maxSalary);
        }

        // Apply sorting order
        $jobsQuery->orderBy('id', $orderBy);

        // Return the view with all necessary data

        return ResponseHelper::Out('success', $jobsQuery->get(), 200);
    }
}
