<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function register()
    {
        return view('auth.register');
    }

    public function register_action(RegisterRequest $request)
    {
        //echo 'O código chegou até aqui!';
        //dd($request);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Registrado com sucesso!');

    }


    public function login()
    {
        return view('auth.login');
    }


    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/dashboard')->with('success', 'Login Success');
        }

        return back()->with('error', 'Erro, e-mail ou login incorretos!');
    }


    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
        // return view('home');
    }



}
