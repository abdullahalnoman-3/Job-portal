@extends('layout.app', ['title' => 'Admin'])

@section('content')
    <div class="container send-otp py-5">
        <div class="email-form">
            <h2>ENTER OTP CODE</h2>
            {{-- <form> --}}
                <div class="mb-3">
                    <input type="text" class="form-control" id="otp" placeholder="Enter 6 Digit Code Here">
                </div>
                <button onclick="VerifyOtp()" type="submit" class="btn">Next</button>
            {{-- </form> --}}
        </div>
    </div>

    <script>
        async function VerifyOtp() {

            let otp = document.getElementById('otp').value;

            if (otp.length !== 6) {
                errorToast('Invalid OTP !');
            } 
            else {

                let res = await axios.post("/api/verify-otp-api", {
                    otp: otp,
                    email: sessionStorage.getItem('email')
                });

                if (res.status === 200 && res.data['message'] === 'success') {
                    successToast(res.data['data']);
                    sessionStorage.clear();
                    setTimeout(function() {
                        window.location.href = '/reset-password';
                    }, 1000);
                } 
                else {
                    errorToast(res.data['data']);
                }
            }
        }
    </script>
@endSection
