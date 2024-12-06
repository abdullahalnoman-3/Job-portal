<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin_dropdown_input extends Controller
{
    function manage_job_lavel(){
        return view("pages.admin.manage_job_lavel");
    }
}
