<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Menambahkan middleware auth
    }

    public function index()
    {
        return view('layout.dashboard');
    }
}
