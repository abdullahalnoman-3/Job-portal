@extends('layout.user.user_layout',['title' => 'Apply Job'])

@section('content')

<div class="container">
    <h3>Your Apply Jobs</h3>

    @if($userApplyJobs->isEmpty())
        <p>You have not apply any jobs yet.</p>
    @else
        <div class="row">
            @foreach($userApplyJobs as $applyJob)
            <div class="col-md-4">
                    <div class="job-card">

                        <div class="d-flex justify-content-between">
                                                    
                            <div>
                                <h5>{{ $applyJob->job->job_title ?? 'Job Not Found' }}</h5>
                                    <span class="badge bg-success">{{ $applyJob->job->job_type_name  }}</span>
                                <p>Salary: {{ $applyJob->job->min_salary  }} BDT - {{ $applyJob->job->max_salary  }} BDT</p>
                            </div>


                        </div>
                                                
                        <div class="d-flex align-items-center mb-3">
                            <img alt="Google Inc. logo" class="company-logo me-2" height="40" src="{{asset('/images/google.png')}}" width="40"/>
                                <div>
                                    <p class="mb-0">{{ $applyJob->job->company_name  }}</p>
                                    <p class="text-muted mb-0">
                                        <i class="fas fa-map-marker-alt"></i>{{ $applyJob->job->citie->city_name  }}, {{ $applyJob->job->countrye->country_name  }}
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
                                            

                                            
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endSection
