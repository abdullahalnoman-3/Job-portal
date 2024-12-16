@extends('layout.user.user_layout',['title' => 'Apply Job'])

@section('content')

<div class="container">
    <h3>Your Apply Jobs</h3>

    @if($userApplyJobs->isEmpty())
        <p>You have not apply any jobs yet.</p>
    @else
        <div class="row">
            @foreach($userApplyJobs as $applyJob)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            
                            <h5 class="card-title">{{ $applyJob->job->job_title ?? 'Job Not Found' }}</h5>
                            <p class="card-text">Saved on: {{ $applyJob->created_at->format('d M, Y') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endSection
