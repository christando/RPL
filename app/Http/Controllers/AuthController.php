<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
// view
public function login(){
    return view('login');
}

// validate
public function validateLogin(Request $request){
    // validate
    $request -> validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    // validate input request
    $datalogin = [
        'email' => $request -> email,
        'password' => $request -> password,
    ];
    if(Auth::attempt($datalogin)){
        //hak akses
        if(Auth::user()->role == 'penngguna'){
            return redirect('/dashboard/pengguna');
        }
        elseif(Auth::user()->role == 'bank'){
            return redirect('/dashboard/bank');
        }
        elseif(Auth::user()->role == 'pengambil'){
            return redirect('/dashboard/pengambil');
        }
    }
    else{
        return redirect('/')->withErrors('Email atau Password tidak sesuai!');
    }
}

// logout
public function logout(){
    Auth::logout();
    return redirect('/');
}
}
