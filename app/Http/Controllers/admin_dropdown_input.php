<?php

namespace App\Http\Controllers;

use App\Models\citie;
use App\Models\countrie;
use App\Models\experience_level;
use App\Models\job_functions;
use App\Models\Job_Role;
use App\Models\job_types;
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

    // job role

    function manage_job_role()
    {

        $jobroles = Job_Role::orderBy('id', 'desc')->get(); // ডিসেন্ডিং অর্ডারে ডেটা আনুন
        return view("pages.admin.manage_job_role", compact('jobroles'));
    }

    function job_role_store(Request $request){
        $name = $request->get('name');

        // Insert into Database
        Job_Role::create([
            'job_role_name' => $name,
        ]);

        // Redirect with Success Message
        return redirect()->back()->with('success', 'Job role added successfully!');
        // return ResponseHelper::Out('success', "Registration Completed Successfully !", 200);
    }

     // job type

     function manage_job_type()
     {
         $jobtypes = job_types::orderBy('id', 'desc')->get(); // ডিসেন্ডিং অর্ডারে ডেটা আনুন
         return view("pages.admin.manage_job_type", compact('jobtypes'));
     }
 
     function job_type_store(Request $request){
         $name = $request->get('name');
         job_types::create([
             'job_type_name' => $name,
         ]);
         return redirect()->back()->with('success', 'Job type added successfully!');
     }
     //  job functions

     function manage_job_function()
     {
         $jobfunctions = job_functions::orderBy('id', 'desc')->get(); // ডিসেন্ডিং অর্ডারে ডেটা আনুন
         return view("pages.admin.manage_job_function", compact('jobfunctions'));
     }
 
     function job_function_store(Request $request){
         $name = $request->get('name');
         job_functions::create([
             'name' => $name,
         ]);
         return redirect()->back()->with('success', 'Job function added successfully!');
     }

    // country

    function manage_country()
    {

        $countrye = countrie::orderBy('id', 'desc')->get(); // ডিসেন্ডিং অর্ডারে ডেটা আনুন
        return view("pages.admin.manage_country", compact('countrye'));
    }

    function country_name_store(Request $request){
        $name = $request->get('name');

        // Insert into Database
        countrie::create([
            'country_name' => $name,
        ]);

        // Redirect with Success Message
        return redirect()->back()->with('success', 'country name added successfully!');
        // return ResponseHelper::Out('success', "Registration Completed Successfully !", 200);
    }

    function manage_city_name()
    {

        $countrye = countrie::orderBy('id', 'desc')->get(); // ডিসেন্ডিং অর্ডারে ডেটা আনুন

        $cityname = citie::orderBy('id', 'desc')->get(); // ডিসেন্ডিং অর্ডারে ডেটা আনুন

        return view("pages.admin.manage_city_name", compact('countrye','cityname'));
        
    }

    public function city_name_store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255', // City name validation
            'country_id' => 'required|exists:countries,id', 
        ]);
    

        citie::create([
            'city_name' => $request->name,
            'country_id' => $request->country_id,
        ]);
    

        return redirect()->back()->with('success', 'City name added successfully!');
    }
    
}
