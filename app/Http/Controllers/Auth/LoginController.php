<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Services\Investor;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function showLoginForm()
    {
        return view('login');
    }

    protected function attemptLogin(Request $request)
    {
        $data = [
                'username' => $request->email,
                'password' => $request->password
        ];

        try {
            $userFromAPI = (new Investor())->investorLogin($data);
            $user = User::firstOrCreate(
                    ['email' => $userFromAPI['email']],
                    [
                            'password' => bcrypt($request->password),
                            'name'     => $userFromAPI['firstName'].' '.$userFromAPI['middleName'].' '.$userFromAPI['lastName']
                    ]
            );
            Auth::loginUsingId($user->id);
        } catch (\Exception $exception) {
            $this->sendFailedLoginResponse($request);
        }
    }
}
