@extends('layout.user.user_layout',['title' => 'Save Job'])

@section('content')

<div class="container">
    <h3>Your Saved Jobs</h3>

    @if($userSaveJobs->isEmpty())
        <p>You have not saved any jobs yet.</p>
    @else
        <div class="row">
            @foreach($userSaveJobs as $saveJob)
                <div class="col-md-4">
                    <div class="job-card">

                        <div class="d-flex justify-content-between">
                                                    
                            <div>
                                <h5>{{ $saveJob->job->job_title ?? 'Job Not Found' }}</h5>
                                    <span class="badge bg-success">{{ $saveJob->job->job_type_name  }}</span>
                                <p>Salary: {{ $saveJob->job->min_salary  }} BDT - {{ $saveJob->job->max_salary  }} BDT</p>
                            </div>

                            <div>
                                <button onclick="" type="submit" style="background: none; border: none; cursor: pointer;" >
                                    <i class="fa fa-bookmark" style="font-size: 20px; color:rgb(6, 214, 34);"></i>
                                </button>
                            </div>
                        </div>
                                                
                        <div class="d-flex align-items-center mb-3">
                            <img alt="Google Inc. logo" class="company-logo me-2" height="40" src="{{asset('/images/google.png')}}" width="40"/>
                                <div>
                                    <p class="mb-0">{{ $saveJob->job->company_name  }}</p>
                                    <p class="text-muted mb-0">
                                        <i class="fas fa-map-marker-alt"></i>{{ $saveJob->job->citie->city_name  }}, {{ $saveJob->job->countrye->country_name  }}
                                    </p>
                                </div>
                        </div>
                                                
                        <div class="d-flex align-items-center mb-3">
                            <div class="applicants d-flex pr-2">
                                <img alt="Applicant 1" height="30" src="{{asset('/images/Ellipse 6.png')}}" width="30"/>
                                <img alt="Applicant 2" height="30" src="{{asset('/images/Ellipse 7.png')}}" width="30"/>
                                <img alt="Applicant 3" height="30" src="{{asset('/images/Ellipse 8.png')}}" width="30"/>
                            </div>
                                <p class="mb-0 ms-2 px-2">10+ applicants</p>
                        </div>
                                            
                        <div class="d-flex justify-content-between">
                            <form action="{{ route('jobViewDetails') }}" method="POST">
                                @csrf
                                    <input type="hidden" name="job_id" value="{{ $saveJob->job_id }}">
                                    <button class="btn btn-outline-primary" type="submit">View details</button>
                            </form>
                                                
                            <form action="{{ route('applyForm') }}" method="POST">
                                @csrf
                                    <input type="hidden" name="job_id" value="{{ $saveJob->job_id }}">
                                    <button class="btn btn-primary" type="submit">Apply now</button>
                            </form>
                        </div>
                                            
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@endSection



