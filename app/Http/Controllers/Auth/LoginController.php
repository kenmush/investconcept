<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Services\Investor;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
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
        return view('auth.login');
    }

    protected function attemptLogin(Request $request)
    {
        $data = [
                'username' => $request->email,
                'password' => $request->password,
        ];
        try {
            $userFromAPI = (new Investor())->investorLogin($data);
            $user = User::firstOrCreate(
                    ['email' => $userFromAPI['email']],
                    [
                            'password' => bcrypt($request->password),
                            'name'     => $userFromAPI['firstName'].' '.$userFromAPI['lastName'],
                            'api_id'   => $userFromAPI['id'],
                            'first_login'   => $userFromAPI['first_login'],
                            'avatar'   => $userFromAPI['avatar'],
                    ]
            );
//            if ($userFromAPI['status'] === false) {
//                return redirect()->route('verifyinvestor');
//            }
            Auth::loginUsingId($user->id);
        } catch (\Exception $exception) {
            $this->sendFailedLoginResponse($request);
        }
    }

    public function logout(Request $request)
    {
        $id = $request->user()->id;
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        User::findorFail($id)->delete();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
                ? new JsonResponse([], 204)
                : redirect('/');
    }
}
