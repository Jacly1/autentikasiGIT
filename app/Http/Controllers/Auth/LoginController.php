<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | LoginController
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Handle an authentication attempt.
     *
     * @return RedirectResponse
     */
    public function login(Request $request): RedirectResponse
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $input['email'], 'password' => $input['password']])) {
            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin.home');
            } elseif (auth()->user()->type == 'super admin') {
                return redirect()->route('superadmin.home');
            } elseif (auth()->user()->type == 'dosen') {
                return redirect()->route('dosen.home');
            } elseif (auth()->user()->type == 'tendik') {
                return redirect()->route('tendik.home');
            } elseif (auth()->user()->type == 'admin akademik') {
                return redirect()->route('adminakademik.home');
            } elseif (auth()->user()->type == 'admin keuangan') {
                return redirect()->route('adminkeuangan.home');
            } elseif (auth()->user()->type == 'direktur') {
                return redirect()->route('direktur.home');
            } elseif (auth()->user()->type == 'wakil direktur1') {
                return redirect()->route('wakildirektur1.home');
            } elseif (auth()->user()->type == 'wakil direktur2') {
                return redirect()->route('wakildirektur2.home');
            } elseif (auth()->user()->type == 'wakil direktur3') {
                return redirect()->route('wakildirektur3.home');
            } elseif (auth()->user()->type == 'admin lppm') {
                return redirect()->route('adminlppm.home');
            } elseif (auth()->user()->type == 'admin sdm') {
                return redirect()->route('adminsdm.home');
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->with('error', 'Email-Address and Password are wrong.');
        }
    }
}
