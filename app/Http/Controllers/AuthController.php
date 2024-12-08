<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Mail\OTPMail;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:users',
                'fullName' => 'required|min:3|max:20|alpha_dash|not_in:admin',
                'mobile' => 'required|numeric|min_digits:11',
                'password' => 'required|min:6'
            ]);

            if ($validator->fails()) {

                $errors = $validator->errors();

                $data = [];

                foreach ($errors->all() as $error) {
                    array_push($data, $error);
                }

                return ResponseHelper::Out('invalid', $data, 200);
            }

            // Prepare file name path
            $img = $request->file('profileImg');

            $t = time();
            $fileName = $img->getClientOriginalName();
            $imgName = "{$request->input('email')}-{$t}-{$fileName}";
            $img_url = "uploads/{$imgName}";

            // Upload File
            $img->move(public_path('uploads'), $imgName);

            User::create([
                'full_name' => $request->input('fullName'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'password' => $request->input('password'),
                'role' => $request->input('role'),
                'profile_picture' => $img_url,
                'gender' => $request->input('gender'),
                'company_name' => $request->input('role') === 'employer' ? $request->input('companyName') : 'none',
                'company_website' => $request->input('role') === 'employer' ? $request->input('companyWeb') : 'none'
            ]);

            return ResponseHelper::Out('success', "Registration Completed Successfully !", 200);
        } 
        catch (Exception $e) {
            return ResponseHelper::Out('failed', "Something went wrong !", 200);
        }
    }

    public function login(Request $request)
    {
        $user = User::where('email', '=', $request->input('email'))
            ->where('password', '=', $request->input('password'))
            ->select('id', 'role')->first();

        if ($user !== null) {

            $token = JWTToken::CreateToken($request->input('email'), $user->id, $user->role);
            return ResponseHelper::Out('success', "Login Successful !", 200)->cookie('token', $token, 60);
        } 
        else {

            return ResponseHelper::Out('failed', "Invalid Email or Password !", 200);
        }
    }

    public function sendOTPCode(Request $request)
    {
        $email = $request->input('email');

        $otp = rand(100000, 999999);

        $exist = User::where('email', '=', $email)->count();

        if ($exist == 1) {

            Mail::to($email)->send(new OTPMail($otp));

            User::where('email', '=', $email)->update(['otp' => $otp]);

            return ResponseHelper::Out('success', "A 6 digit OTP code has been sent to your email !", 200);
        } 
        else {
            return ResponseHelper::Out('failed', "Sorry, there is no account with this email. Please Sign Up!", 200);
        }
    }

    public function verifyOTP(Request $request)
    {
        $email = $request->input('email');
        $otp = $request->input('otp');

        $exist = User::where('email', '=', $email)
            ->where('otp', '=', $otp)->count();

        if ($exist == 1) {

            // Database otp update

            User::where('email', '=', $email)->update(['otp' => '0']);

            // Password reset token issue

            $token = JWTToken::CreateTokenForSetPassword($request->input('email'));

            return ResponseHelper::Out('success', "OTP Verification Successful !", 200)->cookie('token', $token, 5);
        } 
        else {
            return ResponseHelper::Out('failed', "Authorization failed ! Please try again.", 200);
        }
    }

    public function resetPassword(Request $request)
    {
        try {
            $email = $request->header('email');
            $password = $request->input('password');

            User::where('email', '=', $email)->update(['password' => $password]);

            return ResponseHelper::Out('success', "Password Changed Successfully ! Please Login.", 200)->cookie('token', ' ', -1);
        } 
        catch (Exception $e) {

            return ResponseHelper::Out('failed', "Something went wrong !", 200);
        }
    }

    public function profile(Request $request)
    {
        $id = $request->header('id');

        $user = User::where('id', '=', $id)->first();

        return ResponseHelper::Out('success', $user, 200);
    }

    public function profileUpdate(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'email' => ['required', 'email', Rule::unique('users')->ignore($request->header('id'))],
                'fullName' => 'required|min:3|max:20|alpha|not_in:admin',
                'mobile' => 'required|numeric|min_digits:11',
                'password' => 'required|min:6'
            ]);

            // return $validator;

            if ($validator->fails()) {

                $errors = $validator->errors();

                $data = [];

                foreach ($errors->all() as $error) {
                    array_push($data, $error);
                }

                return ResponseHelper::Out('invalid', $data, 200);
            }

            User::where('id', '=', $request->header('id'))->update([
                'email' => $request->input('email'),
                'fullName' => $request->input('fullName'),
                'mobile' => $request->input('mobile'),
                'password' => $request->input('password')
            ]);

            return ResponseHelper::Out('success', "Profile Updated Successfully.", 200);

        } 
        catch (Exception $e) {
            return ResponseHelper::Out('failed', "Something Went Wrong !", 200);
        }
    }

    public function loginPage()
    {
        return view('pages.login');
    }

    public function registerPage()
    {
        return view('pages.register');
    }

    public function sendOTPPage()
    {
        return view('pages.send-otp');
    }

    public function verifyOTPPage()
    {
        return view('pages.verify-otp');
    }

    public function resetPasswordPage()
    {
        return view('pages.reset-password');
    }

    public function dashboardPage(Request $request)
    {
        $role =  $request->header('role');

        if($role === 'admin'){
            return view('pages.admin.dashboard');
        }
        else if($role === 'employer'){
            return view('pages.employer.dashboard');
        }
        else{
            return view('pages.frontend.dashboard');
        }
    }

    public function profilePage(Request $request)
    {
        $role =  $request->header('role');

        if($role === 'admin'){
            return view('pages.admin.profile-page');
        }
        else if($role === 'deliverer'){
            return view('pages.deliverer.profile-page');
        }
    }

    public function logout()
    {
        return redirect('/login')->cookie('token', '', -1);
    }
}
