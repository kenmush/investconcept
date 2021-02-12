<?php

namespace App\Http\Controllers;

use App\Events\UploadInvestorDocuments;
use App\Services\Investor;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;

class RegisterInvestorController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            $investor = (new Investor())->registerInvestor([
                    'phoneNumber'  => 'NA',
                    'firstName'    => $request->firstname,
                    'middleName'   => '',
                    'lastName'     => $request->lastname,
                    'username'     => $request->investoremail,
                    'language'     => 'English',
                    'email'        => $request->investoremail,
                    'organization' => 'NA',
                    'password'     => $request->investorpassword,
                    'avatar'       => null,
            ]);

            if ($request->hasFile('passport')) {
                $document = $request->file('passport')->store('documents', 'public');
            }
            if ($request->hasFile('w9form')) {
                $w9Form = $request->file('w9form')->store('w9s', 'public');
            }
            UploadInvestorDocuments::dispatch($investor, $request->except('passport', 'w9form'), $document, $w9Form);
        } catch (ClientException $e) {
            $errors = collect(json_decode($e->getResponse()->getBody()->getContents()));

            return response()->json($errors, 422);
        }
    }
}
