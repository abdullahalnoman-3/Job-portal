@extends('layout.app', ['title' => 'Admin'])

@section('content')
    <div class="container send-otp py-5">
        <div class="email-form">
            <h2>SET NEW PASSWORD</h2>
            {{-- <form> --}}
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" placeholder="New Password">
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                </div>
                <button onclick="ResetPass()" type="submit" class="btn">Next</button>
            {{-- </form> --}}
        </div>
    </div>

    <script>
        async function ResetPass() {

            let password = document.getElementById('password').value;
            let confirmPassword = document.getElementById('confirmPassword').value;

            if (password.length === 0) {
                errorToast('Password is required !');
            } 
            else if (confirmPassword.length === 0) {
                errorToast('Confirm password is required !');
            } 
            else if (password !== confirmPassword) {
                errorToast('Password and confirm password must be same !');
            } 
            else {

                let res = await axios.post("/api/reset-password-api", {
                    password: password
                });

                if (res.status === 200 && res.data['message'] === 'success') {
                    successToast(res.data['data']);
                    setTimeout(function() {
                        window.location.href = '/login';
                    }, 1000);
                } 
                else {
                    errorToast(res.data['data']);
                }
            }
        }
    </script>
@endSection
