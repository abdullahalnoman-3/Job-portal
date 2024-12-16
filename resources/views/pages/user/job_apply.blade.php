@extends('layout.app',['title' => 'Apply'])

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Apply for {{ $job->job_title }}</h2>
    <form method="POST" enctype="multipart/form-data" action="{{ route('apply_job') }}">
        @csrf
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        <input type="hidden" name="job_id" value="{{ $job->id }}">

        <div class="mb-3">
            <label for="user_name" class="form-label">User Name</label>
            <input type="text" id="user_name" class="form-control" value="{{ $user->full_name }}" readonly>
        </div>

        <!-- Applicant Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $email }}" readonly>
        </div>


        <!-- CV Upload -->
        <div class="mb-3">
            <label for="cv" class="form-label">Upload Your CV</label>
            <input type="file" class="form-control" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
        </div>

        <!-- Submit Button -->
        <button onclick="JobApply()" type="submit" class="btn btn-primary">Submit Application</button>
    </form>
</div>

<script>
    async function JobApply(){
        successToast('Your application has been submitted successfully!')
    }
</script>

@endSection
