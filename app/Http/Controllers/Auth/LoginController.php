<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    // Index method, responsible for showing the form
    public function index()
    {
        return view('auth.login');
    }

    // Login method
    public function login(Request $request)
    {
        //validate user input
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //sign the user in if credentials are correct
        if(!auth()->attempt($request->only('email','password')))
        {
            return back()->with('status', 'Invalid login credentials');
        }

        //redirect the user to their dashboard
        return redirect()->route('dashboard');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
