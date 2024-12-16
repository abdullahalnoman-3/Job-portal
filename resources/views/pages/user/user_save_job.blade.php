@extends('layout.app',['title' => 'Find Job'])

@section('content')

<h1>hello all</h1>
<div class="container">
    <h3>Your Saved Jobs</h3>

    @if($userSaveJobs->isEmpty())
        <p>You have not saved any jobs yet.</p>
    @else
        <div class="row">
            @foreach($userSaveJobs as $job)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Job ID: {{ $job->job_id }}</h5>
                            <p class="card-text">Saved on: {{ $job->created_at->format('d M, Y') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endSection
