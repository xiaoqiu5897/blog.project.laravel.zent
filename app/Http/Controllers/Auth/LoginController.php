<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

     public function username()
    {
        $login = request()->username;
        $field = filter_var($login, FILTER_VALIDATE_EMAIL)?'email':'username';
        request()->merge([$field=>$login]);
        return $field;
    }
       /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut()
    {
        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        // $data = request()->only('username','password');
        // $field = filter_var($login, FILTER_VALIDATE_EMAIL)?'email':'username';
        // request()->merge([$field=>$login]);
        if (Auth::attempt(['username'=>$request->username,'password'=>$request->password])) {
            return redirect()->intended('home');
        }else{
            return redirect('login');;
        }
    }
}
