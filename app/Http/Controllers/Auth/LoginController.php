<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Accounts\Player;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    protected $login_type = 'player';
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login()
    {
        return view('auth.login');
    }

    public function check(Request $request)
    {
        // Auth::login(Player::find(1));
        // dd(Auth::user());
        $is_correct_info = Auth::guard($this->login_type)
                            ->attempt([
                                'email' => $request->email,
                                'password' => $request->password,
                            ]);

        if ($is_correct_info) {
            dd('Hi! '.Auth::user()->nickname);
            return redirect('/');
        }

        return redirect('/login')->withErrors('Login Failed...');
    }
}
