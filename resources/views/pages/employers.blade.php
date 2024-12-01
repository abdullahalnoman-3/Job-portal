@extends('layout.app',['title' => 'Employers'])

@section('content')

    <div class="container form-container my-5">
        <div class="form-title">Post a job</div>
        <div class="form-subtitle">Find the best talent for your company</div>
        <form id="postJobForm">
            <div class="mb-3">
                <label for="jobTitle" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="jobTitle" placeholder="Add job title, role vacancies etc">
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="tags" class="form-label">Tags</label>
                    <input type="text" class="form-control" id="tags" placeholder="Job keyword, tags etc">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="jobRole" class="form-label">Job Role</label>
                    <select class="form-select" id="jobRole">
                        <option selected>Select...</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="minSalary" class="form-label">Min Salary</label>
                    <div class="container">
                        <div class="d-flex align-items-center justify-content-between">
                            <input type="text" class="form-control" id="minSalary" placeholder="Minimum Salary...">
                            <span class="input-group-text">BDT</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="maxSalary" class="form-label">Max Salary</label>
                    <div class="container">
                        <div class="d-flex align-items-center justify-content-between">
                            <input type="text" class="form-control" id="maxSalary" placeholder="Maximum Salary...">
                            <span class="input-group-text">BDT</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="salaryType" class="form-label">Salary Type</label>
                    <select class="form-select" id="salaryType">
                        <option selected>Select...</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="vacancies" class="form-label">Vacancies</label>
                    <select class="form-select" id="vacancies">
                        <option selected>Select...</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="jobLevel" class="form-label">Job Level</label>
                    <select class="form-select" id="jobLevel">
                        <option selected>Select...</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" id="country">
                        <option selected>Select...</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="city" class="form-label">City</label>
                    <select class="form-select" id="city">
                        <option selected>Select...</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="jobDescription" class="form-label">Job Description</label>
                <textarea class="form-control h-50" id="jobDescription" rows="5" placeholder="Add your description..."></textarea>
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
            <button type="submit" class="btn btn-primary py-3 px-5">Post Job</button>
        </form>
    </div>

@endSection
