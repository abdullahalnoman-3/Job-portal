<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function homePage()
    {
        return view('pages.home');
    }
    public function aboutPage()
    {
        return view('pages.aboutus');
    }
    public function adminPage()
    {
        return view('pages.admin');
    }
    public function employerPage()
    {
        return view('pages.employers');
    }
    public function findJobPage()
    {
        return view('pages.findjob');
    }
    public function aboutusPage()
    {
        return view('pages.aboutus');
    }
    public function contactusPage()
    {
        return view('pages.contactus');
    }
}
