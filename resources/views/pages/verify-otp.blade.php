@extends('layout.app',['title' => 'Admin'])

@section('content')

    <div class="container send-otp py-5">
        <div class="email-form">
            <h2>ENTER OTP CODE</h2>
            <form>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Enter 6 Digit Code Here">
                </div>
                <button type="submit" class="btn" formaction="{{ route('reset-password') }}">Next</button>
            </form>
        </div>
    </div>


@endSection
