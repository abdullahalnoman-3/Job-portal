@extends('layout.app',['title' => 'About Us'])

@section('content')

    <div class="container text-center pb-5">
        <h2>About <span style="color: #6300b3">Alwayapply</span></h2>
        <p class="lead">As the fastest-growing online Job board, <br> our mission is to help great individuals connect with great companies.</p>
        <div class="row mt-5">
            <div class="col-md-3 col-6">
                <div class="stats">52,015</div>
                <div class="description">Jobs posted</div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stats">24,325</div>
                <div class="description">Successful hires</div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stats">1,532</div>
                <div class="description">Verified companies</div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stats">1.2M</div>
                <div class="description">Monthly visitors</div>
            </div>
        </div>
    </div>


{{--    Team section start--}}
    <div class="container text-center my-5">
        <h2 class="section-title">The team behind <span style="color: #6300b3">this mission</span></h2>
        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            <br/>
            Rutrum libero lectus nunc posuere egestas.
        </p>
        <div class="row mt-4">
            <div class="col-md-6 image-container">
                <img alt="Team 1" class="img-fluid" height="300" src="https://storage.googleapis.com/a1aa/image/9MZOFM4mxbJpEdFVdY9w3kV1SmBghiUhbzIa8MajGGkWCf6JA.jpg" width="600"/>
            </div>
            <div class="col-md-6 image-container">
                <img alt="Team 2" class="img-fluid" height="300" src="https://storage.googleapis.com/a1aa/image/UQeh56pf0JuEv0fxtK9lJIeNFFXsf3v25ko7fYT5fueqcJ81TA.jpg" width="600"/>
            </div>
        </div>
    </div>
{{--    Team section end--}}















{{--Testimonial section start--}}

{{--    Testimonial section end--}}

@endSection
