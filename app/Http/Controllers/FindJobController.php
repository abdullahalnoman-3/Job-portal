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
    public function jobs_data()
    {
        $cityname = citie::orderBy('id', 'desc')->get();
        $countrye = countrie::orderBy('id', 'desc')->get();
        $jobfunctions = job_functions::orderBy('id', 'desc')->get();
        $jobtypes = job_types::orderBy('id', 'desc')->get();
        $jobroles = Job_Role::orderBy('id', 'desc')->get();
        $jobLevels = experience_level::orderBy('id', 'desc')->get();
        $jobs = Job::with('citie','countrye','jobtypes')->orderBy('id', 'desc')->paginate(6); // Fetch latest jobs with pagination

        return view('pages.findjob', compact('jobs','cityname','countrye','jobtypes'));
    }
}
