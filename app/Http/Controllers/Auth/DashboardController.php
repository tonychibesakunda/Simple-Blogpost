<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    //call construct middleware controller
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    //index method
    public function index()
    {
        return view('auth.dashboard');
    }
}
