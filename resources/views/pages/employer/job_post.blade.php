@extends('layout.employer.employer_layout', ['title' => 'Employers'])

@section('content')
    <div class="container form-container my-5">
        <div class="form-title">Post a job</div>
        <div class="form-subtitle">Find the best talent for your company</div>
        {{-- <form id="postJobForm" method="post" action="{{ route('job_post_store') }}"> --}}
        {{-- @csrf --}}
        <div class="mb-3">
            <label for="jobTitle" class="form-label">Job Title</label>
            <input type="text" class="form-control" name="job_title" id="jobTitle"
                placeholder="Add job title, role vacancies etc">
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="tags" class="form-label">Tags</label>
                <input type="text" class="form-control" name="tags" id="tags"
                    placeholder="Job keyword, tags etc">
            </div>
            <div class="col-md-6 mb-3">
                <label for="jobRole" class="form-label">Job Role</label>
                <select class="form-select" id="jobRole" name="job_role_id">
                    <option value="">Select</option>
                    @foreach ($jobroles as $jobrole)
                        <option value="{{ $jobrole->id }}">{{ $jobrole->job_role_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="minSalary" class="form-label">Min Salary</label>
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between">
                        <input type="text" name="minSalary" class="form-control" id="minSalary"
                            placeholder="Minimum Salary...">
                        <span class="input-group-text">BDT</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="maxSalary" class="form-label">Max Salary</label>
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between">
                        <input type="text" class="form-control" name="maxSalary" id="maxSalary"
                            placeholder="Maximum Salary...">
                        <span class="input-group-text">BDT</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="jobType" class="form-label">Job Type</label>
                <select class="form-select" id="jobType" name="jobType">
                    <option value="">Select</option>
                    @foreach ($jobTypes as $jobType)
                        <option value="{{ $jobType->id }}">{{ $jobType->job_type_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="jobFunction" class="form-label">Job Function</label>
                <select class="form-select" id="jobFunction" name="jobFunction">
                    <option value="">Select</option>
                    @foreach ($jobFunctions as $jobFunction)
                        <option value="{{ $jobFunction->id }}">{{ $jobFunction->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="jobWorkMode" class="form-label">Job Work Mode</label>
                <select class="form-select" id="jobWorkMode" name="jobWorkMode">
                    <option value="">Select</option>
                    @foreach ($jobWorkModes as $jobWorkMode)
                        <option value="{{ $jobWorkMode->id }}">{{ $jobWorkMode->work_mode_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="vacancies" class="form-label">Vacancies</label>
                <input type="number" class="form-control" name="vacancies" id="vacancies"
                    placeholder="Vacancies available">
            </div>
            <div class="col-md-6 mb-3">
                <label for="jobLevel" class="form-label">Job Level</label>
                <select class="form-select" id="jobLevel" name="jobLevel">
                    <option value="">Select</option>
                    @foreach ($jobLevels as $jobLevel)
                        <option value="{{ $jobLevel->id }}">{{ $jobLevel->experience_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="companyName" class="form-label">Company Name</label>
                <input type="text" class="form-control" name="companyName" id="companyName"
                    placeholder="Google, Microsoft, etc">
            </div>
            <div class="col-md-6 mb-3">
                <label for="companyWebsite" class="form-label">Company Website</label>
                <input type="text" class="form-control" name="companyWebsite" id="companyWebsite"
                    placeholder="www.google.com, etc">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="country" class="form-label">Country</label>
                <select class="form-select" id="country" name="country_id">
                    <option value="">Select</option>
                    @foreach ($countrye as $country)
                        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="city" class="form-label">City</label>
                <select class="form-select" id="city" name="city_id">
                    <option value="">Select</option>
                    @foreach ($cityname as $city)
                        <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="jobDescription" class="form-label">Job Description</label>
            <textarea class="form-control h-50" name="jobDescription" rows="5" id="jobDescription"
                placeholder="Add your description..."></textarea>
            <div class="editor-toolbar">
                <div>
                    <button type="button"><i class="fas fa-font"></i></button>
                    <button type="button"><i class="fas fa-bold"></i></button>
                    <button type="button"><i class="fas fa-italic"></i></button>
                    <button type="button"><i class="fas fa-underline"></i></button>
                    <button type="button"><i class="fas fa-strikethrough"></i></button>
                </div>
                <div>
                    <button type="button"><i class="fas fa-align-left"></i></button>
                    <button type="button"><i class="fas fa-align-center"></i></button>
                    <button type="button"><i class="fas fa-align-right"></i></button>
                    <button type="button"><i class="fas fa-list-ul"></i></button>
                    <button type="button"><i class="fas fa-list-ol"></i></button>
                    <button type="button"><i class="fas fa-link"></i></button>
                    <button type="button"><i class="fas fa-image"></i></button>
                </div>
            </div>
        </div>
        <button onclick="JobPost()" type="submit" class="btn btn-primary py-3 px-5">Post Job</button>
        {{-- </form> --}}
    </div>

    <script>
        async function JobPost() {

            let jobTitle = document.getElementById('jobTitle').value;
            let tags = document.getElementById('tags').value;
            let jobRole = document.getElementById('jobRole').value;
            let minSalary = document.getElementById('minSalary').value;
            let maxSalary = document.getElementById('maxSalary').value;
            let jobType = document.getElementById('jobType').value;
            let jobFunction = document.getElementById('jobFunction').value;
            let jobWorkMode = document.getElementById('jobWorkMode').value;
            let vacancies = document.getElementById('vacancies').value;
            let jobLevel = document.getElementById('jobLevel').value;
            let companyName = document.getElementById('companyName').value;
            let companyWebsite = document.getElementById('companyWebsite').value;
            let country = document.getElementById('country').value;
            let city = document.getElementById('city').value;
            let jobDescription = document.getElementById('jobDescription').value;

            if (jobTitle.length === 0) {
                errorToast("Job Title Required !");
            } else if (tags.length === 0) {
                errorToast("Job Tag Required !");
            } else if (jobRole.length === 0) {
                errorToast("Job Role Required !");
            } else if (minSalary.length === 0) {
                errorToast("Minimum Salary Required !");
            } else if (maxSalary.length === 0) {
                errorToast("Maximum Salary Required !");
            } else if (jobType.length === 0) {
                errorToast("Job Type Required !");
            } else if (jobFunction.length === 0) {
                errorToast("Job Function Required !");
            } else if (jobWorkMode.length === 0) {
                errorToast("Job Work Mode Required !");
            } else if (vacancies.length === 0) {
                errorToast("vacancies Required !");
            } else if (jobLevel.length === 0) {
                errorToast("Job Level Required !");
            } else if (companyName.length === 0) {
                errorToast("Company Name Required !");
            } else if (companyWebsite.length === 0) {
                errorToast("Company Website Required !");
            } else if (country.length === 0) {
                errorToast("Country Name Required !");
            } else if (city.length === 0) {
                errorToast("City Name Required !");
            } else if (jobDescription.length === 0) {
                errorToast("Job Description Required !");
            } else {

                let res = await axios.post("/job_post", {
                    job_title : jobTitle,
                    tags: tags,
                    job_role_id: jobRole,
                    minSalary: minSalary,
                    maxSalary: maxSalary,
                    jobType: jobType,
                    jobFunction: jobFunction,
                    jobWorkMode: jobWorkMode,
                    vacancies: vacancies,
                    jobLevel: jobLevel,
                    companyName: companyName,
                    companyWebsite: companyWebsite,
                    country_id: country,
                    city_id: city,
                    jobDescription: jobDescription
                });

                if(res.status === 200 && res.data['message'] === 'success'){
                    successToast(res.data['data']);
                    setTimeout(() => {
                        window.location.reload();
                    }, 3000);
                }
                else{
                    errorToast(res.data['data']);
                }
            }
        }
    </script>
@endSection
