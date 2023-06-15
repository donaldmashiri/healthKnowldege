<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Presc;
use App\Models\User;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function reports()
    {

        $usersTotal = User::count();
        $appointments = Appointment::count();
        $prescs = Presc::count();

        return view('reports', compact('usersTotal', 'appointments','prescs'));


//        return view('reports')->users;
    }
}
