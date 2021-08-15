<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    //Logout method
    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
