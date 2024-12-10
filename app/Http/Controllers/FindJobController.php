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

    
    public function jobs_data(Request $request)
    {
        
        $searchTitle = $request->input('job_title'); 
        $searchLocation = $request->input('location'); 
        $searchExperience = $request->input('experience'); 
    
        
        $cityname = citie::orderBy('id', 'desc')->get();
        $countrye = countrie::orderBy('id', 'desc')->get();
        $jobtypes = job_types::orderBy('id', 'desc')->get();
    
        // Jobs query
        
        $jobsQuery = Job::with('citie', 'countrye', 'jobtypes')->orderBy('id', 'desc');

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
        
      
        $jobs = $jobsQuery->paginate();
        
      
        return view('pages.findjob', compact('jobs', 'cityname', 'countrye', 'jobtypes'));
    }
    



    
}
