<?php

namespace App\Http\Controllers;

use App\Services\Investor;
use App\User;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;

class Investors extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('management.investors.index', [
                'investors' => collect((new Investor())->getAllInvestors())->sortByDesc('created_at')->sortBy('phonenumber')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.investors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                "firstname"   => 'required',
                "secondname"  => 'required',
                "lastname"    => 'required',
                "phonenumber" => 'required',
                "username"    => 'required',
                "email"       => 'required',
                "language"    => 'required',
                "password"    => 'required',
        ]);
        try {
            (new Investor())->registerInvestor([
                    'phoneNumber'  => $request->phonenumber,
                    'firstName'    => $request->firstname,
                    'middleName'   => $request->secondname,
                    'lastName'     => $request->lastname,
                    'username'     => $request->username,
                    'language'     => $request->language,
                    'email'        => $request->email,
                    'organization' => 'NA',
                    'password'     => $request->password,
            ]);
            return redirect()->route('investors.index');

        } catch (ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            $errors = collect(json_decode($responseBodyAsString));
            $validator = \Validator::make($request->all(), [
                    "firstname"   => 'required',
                    "secondname"  => 'required',
                    "lastname"    => 'required',
                    "phonenumber" => 'required',
                    "username"    => 'required',
                    "email"       => 'required',
                    "language"    => 'required',
                    "password"    => 'required',
            ]);
            foreach ($errors as $key=>$error) {
                $validator->errors()->add($key, $error[0] ?? '');
            }
            return back()->withErrors($validator);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}