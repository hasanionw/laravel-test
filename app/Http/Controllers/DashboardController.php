<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index() {
        if(!Auth::user()) {
            return back()->with('error', 'Please login first');
        } else {
            return view('dashboard');
        }
    }
}
