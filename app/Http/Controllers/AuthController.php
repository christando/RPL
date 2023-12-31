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
    public function register()
    {
        return view("register");
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
    // return redirect('/dashboard/pemilik');
        

        if(Auth::attempt($datalogin)){
            // hak akses
            if(Auth::user()->role == 'Pemilik'){
                return redirect('/dashboard/pemilik');
            }
            elseif(Auth::user()->role == 'Pengambil'){
                return redirect('/dashboard/pengambil');
            }
            elseif(Auth::user()->role == 'Bank'){
                return redirect('/dashboard/bank');
            }

        }
        else{

            return redirect('/login')->withErrors('Email atau Password tidak sesuai!');
        }
    }

    // logout
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
