<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('pauth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ind()
    {
        return view('patient.dashboard');
    }
}

