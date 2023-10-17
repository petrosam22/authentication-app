<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Requests\VerifyUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Jobs\SendEmailVerificationJob;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function registerForm(){
        return view('register');
    }
   

   
    public function register(UserRequest $request){
        $verificationCode = mt_rand(100000000, 999999999);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'job' => $request->input('job'),
            'organization' => $request->input('organization'),
            'number' => $request->input('number'),
            'verification_code' => $verificationCode,
        ]);

        dispatch(new SendEmailVerificationJob([
            'email' => $user->email,
            'verification_code' => $user->verification_code,
        ]));
        $token = $user->createToken('Api-Token')->plainTextToken;
        Auth::login($user);
        return view('code',compact('user'));

    }


    public function verifyForm(){
        $user = Auth::user();
        
       
       

        

        return view('verfiy',compact('user'));
    }



    public function verifyCode(Request $request){
     
        $user = Auth::user();
       if($user->verification_code ==$request->verification_code){
        $userVerify = User::where('verification_code',$user->verification_code)->first();
   
        $userVerify->is_verified = 1;
        $userVerify->save();

        return view('checkcode');
        
       }
        
    }
}
