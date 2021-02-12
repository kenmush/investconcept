<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Services\Investor;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PragmaRX\Countries\Package\Countries;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $countries = new Countries();

        return view('auth.registernew', [
                'countries' => $countries->all(),

        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
//        Auth::login($user);
//        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return view('auth.registered');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
                'firstname' => ['required', 'string', 'max:255'],
                'lastname'  => ['required', 'string', 'max:255'],
                'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password'  => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     */
    protected function create(array $data)
    {
        $investor['phoneNumber'] = 'NA';
        $investor['firstName'] = $data['firstname'];
        $investor['middleName'] = $data['firstname'];
        $investor['lastName'] = $data['lastname'];
        $investor['username'] = $data['email'];
        $investor['language'] = 'English';
        $investor['email'] = $data['email'];
        $investor['organization'] = 'NA';
        $investor['password'] = $data['password'];
        $investor['accredited'] = $data['accredited_investor'] === 'Yes' ? true : false;
        $investor['investor_type'] = $data['accredited_type'];
        try {
            $userFromAPI = (new Investor())->signupInvestor($investor);

            return User::firstOrCreate(
                    ['email' => $userFromAPI['email']],
                    [
                            'password' => bcrypt($data['password']),
                            'name'     => $userFromAPI['firstName'].' '.$userFromAPI['lastName'],
                            'api_id'   => $userFromAPI['id'],
                            'avatar'   => $userFromAPI['id'],

                    ]
            );
        } catch (\Exception $exception) {
            return redirect()->route('register');
        }
    }

    protected function registered(Request $request, $user)
    {
    }
}
