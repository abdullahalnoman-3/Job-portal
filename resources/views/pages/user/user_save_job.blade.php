@extends('layout.user.user_layout',['title' => 'Save Job'])

@section('content')

<div class="container">
    <h3>Your Saved Jobs</h3>

    @if($userSaveJobs->isEmpty())
        <p>You have not saved any jobs yet.</p>
    @else
        <div class="row">
            @foreach($userSaveJobs as $saveJob)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            
                            <h5 class="card-title">{{ $saveJob->job->job_title ?? 'Job Not Found' }}</h5>
                            <p class="card-text">Saved on: {{ $saveJob->created_at->format('d M, Y') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endSection
