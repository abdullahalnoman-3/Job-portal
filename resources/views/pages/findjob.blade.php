@extends('layout.app',['title' => 'Find Job'])

@section('content')

    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="fw-bold job-search-title">
                Job Search
            </h1>
            <p>
                Search for your desired job matching your skills
            </p>
        </div>
        {{--        Search area start--}}

        <div style="padding: 50px;">

        <div class="container">
            <div class="search-container">
                <div class="input-group">
                <span class="input-group-text">
                    <i class="fas fa-search" style="color: #5e6670;"></i>
                </span>
                    <input type="text" class="form-control" placeholder="Job title, Keyword..." aria-label="Job title, Keyword...">
                </div>
                <div class="divider"></div>
                <div class="input-group">
                <span class="input-group-text">
                    <i class="fas fa-map-marker-alt" style="color: #5e6670;"></i>
                </span>
                    <input type="text" class="form-control" placeholder="Location" aria-label="Location">
                </div>

                <div class="input-group">
                <span class="input-group-text">
                    <i class="fas fa-briefcase" style="color: #5e6670;"></i>
                </span>
                    <input type="text" class="form-control experience-input" placeholder="Years of experience" aria-label="Location">
                </div>
                <button class="btn job-search-btn">Search</button>
            </div>
        </div>

        </div>

        {{--        Search area end--}}



        <div class="row">
            <div class="col-md-3">
                <div id="jobfilter" class="filter-section">
                    <h5>
                        Filter
                    </h5>
                    <div class="mb-3">
                        <label class="form-label">
                            Salary Range
                        </label>
                        <div class="d-flex">
                            <input class="form-control me-2" placeholder="Min" type="text"/>
                            <input class="form-control" placeholder="Max" type="text"/>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label class="form-label">
                            Job Type
                        </label>
                        <div class="form-check">
                            <input checked="" class="form-check-input" id="allJobs" type="checkbox"/>
                            <label class="form-check-label" for="allJobs">
                                All (2657)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="fullTime" type="checkbox"/>
                            <label class="form-check-label" for="fullTime">
                                Full-Time (450)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="partTime" type="checkbox"/>
                            <label class="form-check-label" for="partTime">
                                Part-Time (145)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="internship" type="checkbox"/>
                            <label class="form-check-label" for="internship">
                                Internship (65)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="contract" type="checkbox"/>
                            <label class="form-check-label" for="contract">
                                Contract (12)
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label class="form-label">
                            Work Mode
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" id="onSite" type="checkbox"/>
                            <label class="form-check-label" for="onSite">
                                On-Site
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="remote" type="checkbox"/>
                            <label class="form-check-label" for="remote">
                                Remote (180)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="hybrid" type="checkbox"/>
                            <label class="form-check-label" for="hybrid">
                                Hybrid (200)
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label class="form-label">
                            Job Functions
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" id="marketing" type="checkbox"/>
                            <label class="form-check-label" for="marketing">
                                Marketing (21)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="engineering" type="checkbox"/>
                            <label class="form-check-label" for="engineering">
                                Engineering (45)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="design" type="checkbox"/>
                            <label class="form-check-label" for="design">
                                Design (71)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="sales" type="checkbox"/>
                            <label class="form-check-label" for="sales">
                                Sales (24)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="customerService" type="checkbox"/>
                            <label class="form-check-label" for="customerService">
                                Customer Service (109)
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label class="form-label">
                            Experience Level
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" id="entryLevel" type="checkbox"/>
                            <label class="form-check-label" for="entryLevel">
                                Fresh/Entry-Level (285)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="junior" type="checkbox"/>
                            <label class="form-check-label" for="junior">
                                Junior (21)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="midLevel" type="checkbox"/>
                            <label class="form-check-label" for="midLevel">
                                Mid-Level (221)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="senior" type="checkbox"/>
                            <label class="form-check-label" for="senior">
                                Senior (12)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="leadManagerial" type="checkbox"/>
                            <label class="form-check-label" for="leadManagerial">
                                Lead/Managerial (24)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="directorExecutive" type="checkbox"/>
                            <label class="form-check-label" for="directorExecutive">
                                Director/Executive (10)
                            </label>
                        </div>
                    </div>
                    <a class="text-primary" href="#">
                        Expand all
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5>
                        All Jobs (2310)
                    </h5>
                    <div class="dropdown">
                        <button aria-expanded="false" class="btn btn-outline-secondary dropdown-toggle"
                                data-bs-toggle="dropdown" id="dropdownMenuButton" type="button">
                            Popular
                        </button>
                        <ul aria-labelledby="dropdownMenuButton" class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    Popular
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Newest
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Oldest
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="job-card">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Technical Support Specialist</h5>
                                    <span class="badge bg-success">PART-TIME</span>
                                    <p>Salary: 20,000 BDT - 25,000 BDT</p>
                                </div>
                                <div>
                                    <i class="far fa-bookmark"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img alt="Google Inc. logo" class="company-logo me-2" height="40"
                                     src="{{asset('/images/google.png')}}" width="40"/>
                                <div>
                                    <p class="mb-0">
                                        Google Inc.
                                    </p>
                                    <p class="text-muted mb-0">
                                        <i class="fas fa-map-marker-alt">
                                        </i>
                                        New Delhi, India
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="applicants d-flex pr-2">
                                    <img alt="Applicant 1" height="30" src="{{asset('/images/Ellipse 6.png')}}"
                                         width="30"/>
                                    <img alt="Applicant 2" height="30" src="{{asset('/images/Ellipse 7.png')}}"
                                         width="30"/>
                                    <img alt="Applicant 3" height="30" src="{{asset('/images/Ellipse 8.png')}}"
                                         width="30"/>
                                </div>
                                <p class="mb-0 ms-2 px-2">
                                    10+ applicants
                                </p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary">
                                    View details
                                </button>
                                <button class="btn btn-primary">
                                    Apply now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="job-card">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>
                                        Senior UI/UX Designer
                                    </h5>
                                    <span class="badge bg-primary">FULL-TIME</span>
                                    <p>
                                        Salary: $30,000 - $55,000
                                    </p>
                                </div>
                                <div>
                                    <i class="far fa-bookmark">
                                    </i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img alt="Apple logo" class="company-logo me-2" height="40"
                                     src="{{asset('/images/apple-logo 1.png')}}" width="40"/>
                                <div>
                                    <p class="mb-0">
                                        Apple
                                    </p>
                                    <p class="text-muted mb-0">
                                        <i class="fas fa-map-marker-alt">
                                        </i>
                                        Boston, USA
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="applicants d-flex pr-2">
                                    <img alt="Applicant 1" height="30" src="{{asset('/images/Ellipse 6.png')}}"
                                         width="30"/>
                                    <img alt="Applicant 2" height="30" src="{{asset('/images/Ellipse 7.png')}}"
                                         width="30"/>
                                    <img alt="Applicant 3" height="30" src="{{asset('/images/Ellipse 8.png')}}"
                                         width="30"/>
                                </div>
                                <p class="mb-0 ms-2 px-2">
                                    9+ applicants
                                </p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary">
                                    View details
                                </button>
                                <button class="btn btn-primary">
                                    Apply now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="job-card">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>
                                        Marketing Officer
                                    </h5>
                                    <span class="badge bg-success">PART-TIME</span>
                                    <p>
                                        Salary: 10,000 BDT - 15,000 BDT
                                    </p>
                                </div>
                                <div>
                                    <i class="far fa-bookmark">
                                    </i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img alt="Intel Corp logo" class="company-logo me-2" height="40"
                                     src="{{asset('/images/intel.png')}}"
                                     width="40"/>
                                <div>
                                    <p class="mb-0">
                                        Intel Corp
                                    </p>
                                    <p class="text-muted mb-0">
                                        <i class="fas fa-map-marker-alt">
                                        </i>
                                        Bangalore, India
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="applicants d-flex pr-2">
                                    <img alt="Applicant 1" height="30" src="{{asset('/images/Ellipse 6.png')}}"
                                         width="30"/>
                                    <img alt="Applicant 2" height="30" src="{{asset('/images/Ellipse 7.png')}}"
                                         width="30"/>
                                    <img alt="Applicant 3" height="30" src="{{asset('/images/Ellipse 8.png')}}"
                                         width="30"/>
                                </div>
                                <p class="mb-0 ms-2 px-2">
                                    30+ applicants
                                </p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary">
                                    View details
                                </button>
                                <button class="btn btn-primary">
                                    Apply now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="job-card">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>
                                        Senior UI/UX Designer
                                    </h5>
                                    <span class="badge bg-primary">FULL-TIME</span>
                                    <p>
                                        Salary: $30,000 - $55,000
                                    </p>
                                </div>
                                <div>
                                    <i class="far fa-bookmark">
                                    </i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img alt="Apple logo" class="company-logo me-2" height="40"
                                     src="{{asset('/images/apple-logo 1.png')}}"
                                     width="40"/>
                                <div>
                                    <p class="mb-0">
                                        Apple
                                    </p>
                                    <p class="text-muted mb-0">
                                        <i class="fas fa-map-marker-alt">
                                        </i>
                                        Boston, USA
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="applicants d-flex pr-2">
                                    <img alt="Applicant 1" height="30" src="{{asset('/images/Ellipse 6.png')}}"
                                         width="30"/>
                                    <img alt="Applicant 2" height="30" src="{{asset('/images/Ellipse 7.png')}}"
                                         width="30"/>
                                    <img alt="Applicant 3" height="30" src="{{asset('/images/Ellipse 8.png')}}"
                                         width="30"/>
                                </div>
                                <p class="mb-0 ms-2 px-2">
                                    9+ applicants
                                </p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary">
                                    View details
                                </button>
                                <button class="btn btn-primary">
                                    Apply now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="job-card">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>
                                        Technical Support Specialist
                                    </h5>
                                    <span class="badge bg-success">PART-TIME</span>
                                    <p>
                                        Salary: 20,000 INR - 25,000 INR
                                    </p>
                                </div>
                                <div>
                                    <i class="far fa-bookmark">
                                    </i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img alt="Google Inc. logo" class="company-logo me-2" height="40"
                                     src="{{asset('/images/google.png')}}" width="40"/>
                                <div>
                                    <p class="mb-0">
                                        Google Inc.
                                    </p>
                                    <p class="text-muted mb-0">
                                        <i class="fas fa-map-marker-alt">
                                        </i>
                                        New Delhi, India
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="applicants d-flex pr-2">
                                    <img alt="Applicant 1" height="30" src="{{asset('/images/Ellipse 6.png')}}"
                                         width="30"/>
                                    <img alt="Applicant 2" height="30" src="{{asset('/images/Ellipse 7.png')}}"
                                         width="30"/>
                                    <img alt="Applicant 3" height="30" src="{{asset('/images/Ellipse 8.png')}}"
                                         width="30"/>
                                </div>
                                <p class="mb-0 ms-2 px-2">
                                    10+ applicants
                                </p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary">
                                    View details
                                </button>
                                <button class="btn btn-primary">
                                    Apply now
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="job-card">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>
                                        Senior UI/UX Designer
                                    </h5>
                                    <span class="badge bg-primary">FULL-TIME</span>
                                    <p>
                                        Salary: $30,000 - $55,000
                                    </p>
                                </div>
                                <div>
                                    <i class="far fa-bookmark">
                                    </i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img alt="Apple logo" class="company-logo me-2" height="40"
                                     src="{{asset('/images/apple-logo 1.png')}}" width="40"/>
                                <div>
                                    <p class="mb-0">
                                        Apple
                                    </p>
                                    <p class="text-muted mb-0">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Boston, USA
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="applicants d-flex pr-2">
                                    <img alt="Applicant 1" height="30" src="{{asset('/images/Ellipse 6.png')}}"
                                         width="30"/>
                                    <img alt="Applicant 2" height="30" src="{{asset('/images/Ellipse 7.png')}}"
                                         width="30"/>
                                    <img alt="Applicant 3" height="30" src="{{asset('/images/Ellipse 8.png')}}"
                                         width="30"/>
                                </div>
                                <p class="mb-0 ms-2 px-2">
                                    9+ applicants
                                </p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary">
                                    View details
                                </button>
                                <button class="btn btn-primary">
                                    Apply now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-all">
                    <a href="#">
                        View More
                    </a>
                </div>
            </div>
        </div>
    </div>

@endSection
