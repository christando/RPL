<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function home()
    {
        return view("home");
    }
    public function login()
    {
        return view("login");
    }
    public function register()
    {
        return view("register");
    }
    public function post_register(Request $request)
    {
        User::created($request->user());
        return redirect("/dashboard");
    }
    public function dashboardPengambil()
    {
        return view("dashboard_pengambil");
    }
    
    public function dashboardPemilik()
    {
        return view("dashboard_pemilik");
    }
    
    public function dashboardBank()
    {
        return view("dashboard_bank");
    }
    
}
