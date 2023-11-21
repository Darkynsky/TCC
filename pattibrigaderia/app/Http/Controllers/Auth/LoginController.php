<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;


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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    
    public function index()
    {
        return view('login');
    }

    public function verifyUser(Request $request)
    {
        if (Auth::attempt(['email' => $request->input('txUsuario'), 'password' => $request->input('txSenha')])) {
            return redirect()->intended('/home');
        } else {
            return redirect('/login')->with('error', 'Credenciais inválidas. Tente novamente.');
        }
    }



    public function logoutUser(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
