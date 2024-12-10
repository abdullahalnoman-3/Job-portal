<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use App\Models\Job;
use App\Models\User;
use App\Models\citie;
use App\Models\countrie;
use App\Models\Job_Role;
use App\Models\WorkMode;
use App\Models\Job_types;
use Illuminate\Http\Request;
use App\Models\Job_functions;
use App\Models\experience_level;

class JobController extends Controller
{

    function job_post()
    {
        $jobLevels = experience_level::orderBy('id', 'desc')->get();
        $jobroles = Job_Role::orderBy('id', 'desc')->get();
        $cityname = citie::orderBy('id', 'desc')->get();
        $countrye = countrie::orderBy('id', 'desc')->get();

        $jobTypes = job_types::orderBy('id', 'desc')->get();
        $jobFunctions = job_functions::orderBy('id', 'desc')->get();
        $jobWorkModes = WorkMode::orderBy('id', 'desc')->get();

        return view("pages.employer.job_post", compact('countrye', 'cityname', 'jobroles', 'jobLevels', 'jobTypes', 'jobFunctions', 'jobWorkModes'));
    }

    public function job_post_store(Request $request)
    {


        // $user = User::where('email', '=', $request->header('email'))->first();
        // $userEmail = $request->header('email');
        // $userId = $request->header('id');

        // Directly insert into the database without validation
        Job::create([

            'job_title' => $request->input('job_title'),
            'company_name' => $request->input('companyName'),
            'company_website' => $request->input('companyWebsite'),
            'job_type_id' => $request->input('jobType'),
            'job_role_id' => $request->input('job_role_id'),
            'job_tags' => $request->input('tags'),
            'job_function_id' => $request->input('jobFunction'),
            'min_salary' => $request->input('minSalary'),
            'max_salary' => $request->input('maxSalary'),
            'vacancies' => $request->input('vacancies'),
            'work_mode_id' => $request->input('jobWorkMode'),
            'experience_level_id' => $request->input('jobLevel'),
            'country_id' => $request->input('country_id'),
            'city_id' => $request->input('city_id'),
            'description' => $request->input('jobDescription'),
            'user_id' => $request->header('id'), // Assuming the user is logged in
            'contact_email' => $request->header('email') ?? null, // Assuming user email
        ]);

        // return redirect()->back()->with('success', 'Job posted successfully!');
        return ResponseHelper::Out('success', 'Job posted successfully', 200);
    }

    public function jobViewDetails(Request $request)
    {
        $job = Job::findOrFail($request->job_id);

        return view('pages.user.job_details', compact('job'));
    }
}
