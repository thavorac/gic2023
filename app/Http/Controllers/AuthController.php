<?php

namespace App\Http\Controllers;

use App\Mail\OtpMail;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function register(Request $request) {
        // 1. Verify if email already exist
        $userFound = User::where('email', $request->get('email'))->first();

        if ($userFound) {
            return response(["message"=>'User with this email exist'], 400);
        } else {
            // 2. Verify if confirm_password and password match
            if ($request->get('password') == $request->get('confirm_password')) {
                $user = new User();
                // 3. Encrypt password
                $user->name = $request->get('username');
                $user->email = $request->get('email');
                $user->password = bcrypt($request->get('password'));

                // Save OTP in the database or cache for verification
                $otp = mt_rand(100000, 999999);
                $user->otp = $otp;
                // Alternatively, you can also save it in the session but the register url must be registered in routes/web.php
                // $request->session()->put('otp', $otp);
                // $request->session()->put('userId', $user->id);
                // 4. Save user record
                $user->save();
                // 5. Send OTP to email
                // Send OTP via email
                Mail::to($user->email)->send(new OtpMail('http://localhost:9000/verify_otp?user_id='.$user->id.'&code='.$otp));

                return ["message" => "success"];
            } else {
                return response(["message"=>'Password and confirm password is not matched'], 400);
            }
        }
    }
    public function login(Request $request) {
    }
    public function verifyOTP(Request $request) {
        // The incoming url is in this format: http://localhost:9000/verify_otp?code=99999
        $code = $request->query('code');
        $userId = $request->query('user_id');

        $user = User::find($userId);
        // Verify the code with the otp that has been stored during registration
        if ($user && $code == $user->otp) {
            // Update the user account, that email is verified
            $user->email_verified_at = Carbon::now();

            $user->save();
            return ["message" => "OTP is valid, your account is registered"];
        } else {
            // The OTP is not valid
            return response(["message" => "OTP is invalid"], 400);
        }
    }
}
