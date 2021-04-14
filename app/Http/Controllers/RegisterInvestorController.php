<?php

namespace App\Http\Controllers;

use App\Events\UploadInvestorDocuments;
use App\Services\Investor;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use function dd;
use function info;

class RegisterInvestorController extends Controller
{
    public function __invoke(Request $request)
    {
        info("Investor",[
                $request->all()
        ]);
        dd($request->all());
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
            UploadInvestorDocuments::dispatch($investor, $request->except('passport', 'w9form'), $document, $w9Form=null);
        } catch (ClientException $e) {
            $errors = collect(json_decode($e->getResponse()->getBody()->getContents()));

            return response()->json($errors, 422);
        }
    }
}
