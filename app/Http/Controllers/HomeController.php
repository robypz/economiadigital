<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(auth()->user()->id);

        if ($user->hasRole('admin')) {
            return redirect(route('admin'));
        }
        if ($user->hasRole('teacher')) {
            return redirect(route('teacher'));
        }
        else {
            return view('home');
        }

    }

    public function adminDashBoard(){
        return view('home.admin');
    }

    public function teacherDashboard(){
        return view('home.teacher');
    }

}
