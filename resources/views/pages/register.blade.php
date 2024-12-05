@extends('layout.app',['title' => 'Registration'])


{{--@section('content')--}}

{{--    <div class="registration-form">--}}
{{--        <h1>--}}
{{--            Registration form--}}
{{--        </h1>--}}
{{--        <p>--}}
{{--            Register to apply for jobs of your choice all over the world--}}
{{--        </p>--}}
{{--        <form action="#" id="regitrationForm">--}}
{{--            <div class="mb-5">--}}
{{--                <label class="form-label" for="fullName">--}}
{{--                    Full name--}}
{{--                    <span class="text-danger">*</span>--}}
{{--                </label>--}}
{{--                <input class="form-control" id="fullName" placeholder="Enter your full name" type="text"/>--}}
{{--            </div>--}}
{{--            <div class="mb-5">--}}
{{--                <label class="form-label" for="email">--}}
{{--                    Email ID--}}
{{--                    <span class="text-danger">*</span>--}}
{{--                </label>--}}
{{--                <input class="form-control" id="email" placeholder="Enter your email id" type="email"/>--}}
{{--                <div class="form-text">--}}
{{--                    Job notifications will be sent to this email id--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="mb-5">--}}
{{--                <label class="form-label" for="password">--}}
{{--                    Password--}}
{{--                    <span class="text-danger">* </span>--}}
{{--                </label>--}}
{{--                <input class="form-control" id="password" placeholder="(Minimum 6 characters)" type="password"/>--}}
{{--                <div class="form-text">--}}
{{--                    Remember your password--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="mb-5">--}}
{{--                <label class="form-label" for="mobile">--}}
{{--                    Mobile number--}}
{{--                    <span class="text-danger">*</span>--}}
{{--                </label>--}}
{{--                <input class="form-control" id="mobile" placeholder="Enter your mobile number" type="text"/>--}}
{{--                <div class="form-text">--}}
{{--                    Recruiters will contact you on this number--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            --}}{{-- Registration type select dropdown start --}}
{{--            <div class="mb-5">--}}
{{--                <label class="form-label" for="mobile">--}}
{{--                    Registration Type--}}
{{--                    <span class="text-danger">*</span>--}}
{{--                </label>--}}
{{--                <select class="form-select" id="type-select">--}}
{{--                    <option value="">Select User Type</option>--}}
{{--                    <option value="1">User</option>--}}
{{--                    <option value="2">Employee</option>--}}
{{--                </select>--}}
{{--                <div id="input-section">--}}
{{--                    <label class="form-label" for="">Company name</label><br>--}}
{{--                    <input class="form-control" type="text"><br>--}}
{{--                    <label class="form-label" for="">Company website</label><br>--}}
{{--                    <input class="form-control" type="text">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            --}}{{-- Registration type select dropdown end--}}

{{--            <div class="form-check mb-5 mt-5">--}}
{{--                <input class="form-check-input" id="updates" type="checkbox"/>--}}
{{--                <label class="form-check-label" for="updates">--}}
{{--                    Send me important updates &amp; promotions via SMS, email, and--}}
{{--                    <i class="fab fa-whatsapp text-success"></i>--}}
{{--                    WhatsApp--}}
{{--                </label>--}}
{{--            </div>--}}
{{--            <div class="mb-4">--}}
{{--                <p class="terms">--}}
{{--                    By clicking Register, you agree to the--}}
{{--                    <a style="color: #6a0dad" href="#">Terms and Conditions</a>--}}
{{--                    &amp;--}}
{{--                    <a style="color: #6a0dad" href="#">Privacy Policy</a> of AlwaysApply.com--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <button class="btn btn-primary px-5 py-3" type="submit">--}}
{{--                Register now--}}
{{--            </button>--}}
{{--        </form>--}}
{{--        <div class="text-center mt-4">--}}
{{--            <p>or signup with</p>--}}
{{--            <div class="social-buttons">--}}
{{--                <img alt="Google logo" height="40" src="{{asset('images/google2.png')}}" width="40"/>--}}
{{--                <img alt="Facebook logo" height="40" src="{{asset('images/fb2.png')}}" width="40"/>--}}
{{--                <img alt="LinkedIn logo" height="40" src="{{asset('images/linkdin.png')}}" width="40"/>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}


@section('content')

    <div class="registration-form">
        <h1>
            Registration form
        </h1>
        <p>
            Register to apply for jobs of your choice all over the world
        </p>
        <form action="#" id="registrationForm" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label" for="fullName">
                    Full name
                    <span class="text-danger">*</span>
                </label>
                <input class="form-control" id="fullName" placeholder="Enter your full name" type="text" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">
                    Email ID
                    <span class="text-danger">*</span>
                </label>
                <input class="form-control" id="email" placeholder="Enter your email id" type="email" />
                <div class="form-text">
                    Job notifications will be sent to this email id
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">
                    Password
                    <span class="text-danger">* </span>
                </label>
                <input class="form-control" id="password" placeholder="(Minimum 6 characters)" type="password" />
                <div class="form-text">
                    Remember your password
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="mobile">
                    Mobile number
                    <span class="text-danger">*</span>
                </label>
                <input class="form-control" id="mobile" placeholder="Enter your mobile number" type="text" />
                <div class="form-text">
                    Recruiters will contact you on this number
                </div>
            </div>


            {{-- Registration type select dropdown start --}}
            <div class="mb-3">
                <label class="form-label" for="type-select">
                    Registration Type
                    <span class="text-danger">*</span>
                </label>
                <select class="form-select" id="type-select">
                    <option value="">Select Registration Type</option>
                    <option value="1">User</option>
                    <option value="2">Employer</option>
                </select>
                <div id="input-section">
                    <label class="form-label" for="companyName">Company name</label><br>
                    <input class="form-control" id="companyName" type="text"><br>
                    <label class="form-label" for="companyWebsite">Company website</label><br>
                    <input class="form-control" id="companyWebsite" type="text">
                </div>
            </div>
            {{-- Registration type select dropdown end--}}

            <!-- Image Upload Section start -->
            <div class="mb-2">
                <label class="form-label" for="profileImage">
                    Profile Picture
                    <span class="text-danger">*</span>
                </label>
                <input class="form-control" id="profileImage" type="file" accept="image/*" />
                <div class="form-text">
                    Upload a clear profile picture in JPG, PNG, or JPEG format.
                </div>
            </div>
            <!-- Image Upload Section end -->


            <div class="form-check mb-5 mt-5">
                <input class="form-check-input updates-checkbox" id="updates" type="checkbox" />
                <label class="form-check-label" for="updates">
                    Send me important updates &amp; promotions via SMS, email, and
                    <i class="fab fa-whatsapp text-success"></i>
                    WhatsApp
                </label>
            </div>
            <div class="mb-4">
                <p class="terms">
                    By clicking Register, you agree to the
                    <a style="color: #6a0dad" href="#">Terms and Conditions</a>
                    &amp;
                    <a style="color: #6a0dad" href="#">Privacy Policy</a> of AlwaysApply.com
                </p>
            </div>
            <button class="btn btn-primary px-5 py-3" type="submit">
                Register now
            </button>
        </form>
        <div class="text-center mt-4">
            <p>or signup with</p>
            <div class="social-buttons">
                <img alt="Google logo" height="40" src="{{asset('images/google2.png')}}" width="40" />
                <img alt="Facebook logo" height="40" src="{{asset('images/fb2.png')}}" width="40" />
                <img alt="LinkedIn logo" height="40" src="{{asset('images/linkdin.png')}}" width="40" />
            </div>
        </div>
    </div>


@endsection
