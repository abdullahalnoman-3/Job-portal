@extends('layout.app',['title' => 'Job Details'])

@section('content')
    <div class="container mt-5">

        <h2 class="mb-4"> Job Title : {{ $job->job_title }}</h2>
        <p class="mb-4">Company : <a href="http://{{ $job->company_website }}">{{ $job->company_name }}</a></p>
        <h4 class="mb-4"> Job Type : {{ $job->jobtypes->job_type_name }}</h4>
        <h4 class="mb-4"> Description : {{ $job->description }}</h4>
        <h4 class="mb-4"> Salary Range : BDT {{ $job->min_salary }} - BDT {{ $job->max_salary }}</h4>
        <h4 class="mb-4"> Vacancies : {{ $job->vacancies }}</h4>
        <h4 class="mb-4"> Office Location : {{ $job->citie->city_name }}, {{ $job->countrye->country_name }}</h4>
        <form action="{{ route('applyForm') }}" method="POST">
            @csrf
            <input type="hidden" name="job_id" value="{{ $job->id }}">
            <button class="btn btn-primary" type="submit">
                Apply now
            </button>
        </form>
    </div>
@endsection