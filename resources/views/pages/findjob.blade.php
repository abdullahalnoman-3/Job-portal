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
                    <form method="GET" action="{{ route('findjob') }}">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="job_title" class="form-control" placeholder="Job title, Keyword..." value="{{ request('job_title') }}">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="location" class="form-control" placeholder="Location" value="{{ request('location') }}">
                            </div>
                            <div class="col-md-4">
                                <input type="number" name="experience" class="form-control" placeholder="Years of experience" value="{{ request('experience') }}">
                            </div>
                            <div class="col-md-12 text-end mt-3">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
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
                    <form method="GET" action="{{ url()->current() }}">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5>Sort Jobs</h5>
                            <div class="dropdown">
                                <select name="order_by" class="form-select me-2" onchange="this.form.submit()">
                                    <option value="desc" {{ request('order_by') == 'desc' ? 'selected' : '' }}>Newest</option>
                                    <option value="asc" {{ request('order_by') == 'asc' ? 'selected' : '' }}>Oldest</option>
                                </select>
                            </div>
                        </div>
                        <!-- Hidden Fields for Existing Filters -->
                        @foreach(request()->except('order_by') as $key => $value)
                            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                        @endforeach
                    </form>
                    </div>
                </div>
                <!-- job card -->
                <div class="row">
                @foreach ($jobs as $job)
                    <div class="col-md-6">
                        
                            <div class="job-card">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5>{{ $job->job_title }}</h5>
                                        <span class="badge bg-success">{{ $job->jobtypes->job_type_name }}</span>
                                        
                                        <p>Salary: {{ $job->min_salary }} BDT - {{ $job->max_salary	}} BDT</p>
                                    </div>
                                    <div>
                                    {{-- <form action="{{ route('save_jobs') }}" method="POST"> --}}
                                     {{-- @csrf --}}
                                        <input type="hidden" name="job_id" value="{{ $job->id }}">

                                        <button onclick="SaveJob({{ $job->id }})" type="submit" style="background: none; border: none; cursor: pointer;" >
                                            <i class="fa fa-bookmark" style="font-size: 20px; color: #333;"></i>
                                        </button>
                                    {{-- </form> --}}

                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <img alt="Google Inc. logo" class="company-logo me-2" height="40"
                                        src="{{asset('/images/google.png')}}" width="40"/>
                                    <div>
                                        <p class="mb-0">
                                        {{ $job->company_name }}
                                        </p>
                                        <p class="text-muted mb-0">
                                            <i class="fas fa-map-marker-alt">
                                            </i>
                                            {{ $job->countrye->country_name }}, {{ $job->citie->city_name }}
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
                                    <form action="{{ route('jobViewDetails') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="job_id" value="{{ $job->id }}">
                                        <button class="btn btn-outline-primary" type="submit">
                                            View details
                                        </button>
                                    </form>
                                    <form action="{{ route('applyForm') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="job_id" value="{{ $job->id }}">
                                        <button class="btn btn-primary" type="submit">
                                            Apply now
                                        </button>
                                    </form>
                                </div>
                            
                            </div>
                        
                    </div>

                    @endforeach


                </div>
                <div class="view-all">
                    <a href="#">
                        View More
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>

        async function SaveJob(jobId){

            let res = await axios.post('/save_jobs', {job_id: jobId});

            if(res.status === 200 && res.data['message'] === 'success'){
                successToast(res.data['data']);
            }
            else if(res.status === 200 && res.data['message'] === 'info'){
                infoToast(res.data['data']);
            }
            else{
                errorToast(res.data['data']);
            }
        }

    </script>

@endSection
