@extends('layout.app',['title' => 'Login'])


@section('content')

<div class="container login-container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="login-header">Login to your Account</div>
            <div class="login-subheader">
                Welcome back! Select the below login methods.
            </div>
            {{-- <form> --}}
                <div class="mb-4">
                    <label class="form-label" for="email">
                        Email ID / Username
                    </label>
                    <input
                        class="form-control"
                        id="email"
                        placeholder="Enter email id / username"
                        type="email"
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password"> Password </label>


                    <div class="input-group align-items-center">
                        <input
                            class="form-control login-input"
                            id="password"
                            placeholder="Enter password"
                            type="password"
                        />
                        <button class="login-show" type="button">
                            Show
                        </button>
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input class="form-check-input" id="rememberMe" type="checkbox" />
                    <label class="form-check-label" for="rememberMe">
                        Remember me
                    </label>
                    <a class="forgot-password float-end mb-4" href="{{route('send-otp')}}">
                        Forgot Password?
                    </a>
                </div>
                <button onclick="SubmitLogin()" class="btn btn-login w-100" type="submit">Login</button>
            {{-- </form> --}}
            <div class="divider">or login with</div>
            <div class="social-login">
                <img
                    alt="Google login"
                    height="40"
                    src="{{asset('images/google2.png')}}"
                    width="40"
                />
                <img
                    alt="Facebook login"
                    height="40"
                    src="{{asset('images/fb2.png')}}"
                    width="40"
                />
                <img
                    alt="LinkedIn login"
                    height="40"
                    src="{{asset('images/linkdin.png')}}"
                    width="40"
                />
            </div>
            <div class="text-center">
                Don't have an account?
                <a class="register-link" href="{{route('register')}}"> Register </a>
            </div>
        </div>
        <div class="login-right col-md-6 d-flex align-items-center justify-content-center">
            <div class="">
                <img
                    alt="Illustration of a person using a laptop"
                    class="illustration"
                    height="400"
                    src="{{asset('images/login.png')}}"
                    width="400"
                />
            </div>
        </div>

    </div>
</div>
<div id="login-bottom">

</div>

<script>
    successToast(123);
    async function SubmitLogin(){
        
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;

        if(email.length === 0){
            errorToast("Email is required !");
        }
        else if(password.length === 0){
            errorToast("Password is required !");
        }
        else{

            let res = await axios.post("/api/login-api", {email: email, password: password});

            if(res.status === 200 && res.data['message'] === 'success'){
                successToast(res.data['data']);
                window.location.href = "/dashboard";
            }
            else{
                errorToast(res.data['data']);
            }
        }
    }
</script>
@endsection
