@extends('layout.app',['title' => 'Admin'])

@section('content')

    <div class="container send-otp py-5">
        <div class="email-form">
            <h2>SET NEW PASSWORD</h2>
            <form>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="New Password">
                    <input type="email" class="form-control" placeholder="Confirm Password">
                </div>
                <button type="submit" class="btn">Next</button>
            </form>
        </div>
    </div>

@endSection
