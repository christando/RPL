<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankController extends Controller
{
    public function dashboard(){
        return view('dashboard_bank');
    }
}
