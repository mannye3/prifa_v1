<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\VerifyEmail;
use App\Models\VerifyUser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->with('error', 'Invalid email or password.');
        }
        if (Hash::check($request->password, $user->password)) {

            Auth::login($user);
            return redirect()->intended('home');
        } else {

            return back()->with('error', 'Incorrect email or password.');
        }
    }





    public function register(Request $request)
    {
        //return $request;
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [
                'required',
                'string',
                'min:8',
            ],

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        VerifyUser::create([
            'token' => Str::random(60),
            'user_id' => $user->id,
        ]);

        Mail::to($user->email)->send(new VerifyEmail($user));
        return \redirect()->route('login')->with('success', 'Please click on the link sent to your email');
    }




    public function verifyEmail($token)
    {
        $verifiedUser = VerifyUser::where('token', $token)->first();
        if (isset($verifiedUser)) {
            $user = $verifiedUser->user;
            if (!$user->email_verified_at) {
                $user->email_verified_at = Carbon::now();
                $user->save();
                return \redirect(route('login'))->with('success', 'Your email has been verified');
            } else {
                Auth::logout();
                return \redirect(route('login'))->with('success', 'Your email has already been verified. Login to contine');
            }
        } else {
            return \redirect(route('login'))->with('error', 'Something went wrong!!');
        }
    }
}
