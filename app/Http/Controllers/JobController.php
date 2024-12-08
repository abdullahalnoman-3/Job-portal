<?php

namespace App\Http\Controllers;

use App\Models\citie;
use App\Models\countrie;
use App\Models\experience_level;
use App\Models\Job;
use App\Models\Job_Role;
use App\Models\User;
use Illuminate\Http\Request;

class JobController extends Controller
{
   
    function job_post()
    {
        $jobLevels = experience_level::orderBy('id', 'desc')->get();
        $jobroles = Job_Role::orderBy('id', 'desc')->get();
        $cityname = citie::orderBy('id', 'desc')->get();
        $countrye = countrie::orderBy('id', 'desc')->get(); 
        return view("pages.employer.job_post", compact('countrye','cityname','jobroles','jobLevels'));
    }    

    public function job_post_store(Request $request)
    {
    
    
        $user = User::where('email', '=', $request->header('email'))->first();
        // Directly insert into the database without validation
        Job::create([

            'job_title' => $request->input('job_title'),
            'job_role_id' => $request->input('job_role_id'),
            'job_tags' => $request->input('tags'),
            'min_salary' => $request->input('minSalary'),
            'max_salary' => $request->input('maxSalary'),
            'remark' => $request->input('salaryType'),
            'vacancies' => $request->input('vacancies'),
            'experience_level_id' => $request->input('jobLevel'),
            'country_id' => $request->input('country_id'),
            'city_id' => $request->input('city_id'),
            'description' => $request->input('jobDescription'),
            'user_id' => $user->id, // Assuming the user is logged in
            'contact_email' => $user->email ?? null, // Assuming user email
        ]);
    
        return redirect()->back()->with('success', 'Job posted successfully!');
    }
    












}
