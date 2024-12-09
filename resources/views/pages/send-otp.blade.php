@extends('layout.app', ['title' => 'Admin'])

@section('content')
    <div class="container send-otp py-5">
        <div class="email-form">
            <h2>EMAIL ADDRESS</h2>
            {{-- <form> --}}
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                </div>
                <button onclick="VerifyEmail()" type="submit" class="btn">Next</button>
            {{-- </form> --}}
        </div>
    </div>

    <script>
        async function VerifyEmail() {

            let email = document.getElementById('email').value;

            if (email.length === 0) {
                errorToast('Please enter your email address');
            } 
            else {

                let res = await axios.post("/api/send-otp-api", {
                    email: email
                });

                if (res.status === 200 && res.data['message'] === 'success') {
                    successToast(res.data['data']);
                    sessionStorage.setItem('email', email);
                    setTimeout(function() {
                        window.location.href = '/verify-otp';
                    }, 1000);
                } else {
                    errorToast(res.data['data']);
                }
            }
        }
    </script>
@endSection
