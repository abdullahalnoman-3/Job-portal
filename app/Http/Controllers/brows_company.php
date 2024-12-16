<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class brows_company extends Controller
{
    public function brows_company()
    {
        
        $brows_company = Job::select('company_name')
            ->distinct() 
            ->orderBy('company_name', 'asc') 
            ->get();

        
        return view('pages.user.brows_company', compact('brows_company'));
    }
}
