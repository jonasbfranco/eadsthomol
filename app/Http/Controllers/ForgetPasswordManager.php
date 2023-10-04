<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordManager extends Controller
{
    //
    function forgetPassword() {
        return view ('auth.forget-password');
    }

    function forgetPasswordPost(Request $request) {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::mow(),
        ]);

        Mail::send('emails.forget-password', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return redirect()->to(route('forget-password'))->with('success', 'E-mail enviado para resetar sua senha!');


    }

    function resetPassword() {

    }


}
