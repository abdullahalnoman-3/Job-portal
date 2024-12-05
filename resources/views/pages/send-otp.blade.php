@extends('layout.app',['title' => 'Admin'])

@section('content')

    <div class="container send-otp py-5">
        <div class="email-form">
            <h2>EMAIL ADDRESS</h2>
            <form>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Your Email">
                </div>
                <button type="submit" class="btn" formaction="{{ route('verify-otp') }}">Next</button>
            </form>
        </div>
    </div>




@endSection
