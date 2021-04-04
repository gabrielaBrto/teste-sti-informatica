<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Customer, City};

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     */
    public function index()
    {
        $data = [
            'customers' => Customer::count(),
            'cities' => City::count()
        ];
        return view('home', compact('data'));
    }
}
