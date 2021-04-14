<?php

namespace App\Http\Controllers;

use App\Applicants;
use App\Events\UploadInvestorDocuments;
use App\Services\Investor;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use function dd;
use function info;
use function response;

class RegisterInvestorController extends Controller
{
    public function __invoke(Request $request, Applicants $applicants)
    {
        if ($request->file('passport')) {
            $path = $request->file('passport')->store('files','public');
        }

        $applicants->file = $path;
        $applicants->file_type = $request->file_type;
        $applicants->invested_in_markerts = $request->invested_in_markerts;
        $applicants->interested_in_earning_fixed_income = $request->interested_in_earning_fixed_income;
        $applicants->investment_instruments = $request->investment_instruments;
        $applicants->asset_classes = $request->asset_classes;
        $applicants->geographies_interested = $request->geographies_interested;
        $applicants->accredited_investor = $request->accredited_investor;
        $applicants->qualified_investor = $request->qualified_investor;
        $applicants->amounts_placed = $request->amounts_placed;
        $applicants->firstname = $request->firstname;
        $applicants->lastname = $request->lastname;
        $applicants->investoremail = $request->investoremail;
        $applicants->investorpassword = $request->investorpassword;
        $applicants->legal_name = $request->legal_name;
        $applicants->nationality = $request->nationality;
        $applicants->authorization = $request->authorization;
        $applicants->address_line1 = $request->address_line1;
        $applicants->address_line2 = $request->address_line2;
        $applicants->city = $request->city;
        $applicants->region = $request->region;
        $applicants->postal_code = $request->postal_code;
        $applicants->date_of_birth = $request->date_of_birth;
        $applicants->documenttype = $request->documenttype;
        $applicants->save();


        $investor = (new Investor())->registerInvestor([
                'phoneNumber'                        => 'NA',
                'firstName'                          => $applicants->firstname,
                'middleName'                         => $applicants->firstname,
                'lastName'                           => $applicants->lastname,
                'username'                           => $applicants->investoremail,
                'language'                           => 'English',
                'email'                              => $applicants->investoremail,
                'organization'                       => 'NA',
                'password'                           => $applicants->investorpassword,
                'avatar'                             => null,
                'invested_in_markets'                => $applicants->invested_in_markerts,
                'interested_in_earning_fixed_income' => $applicants->interested_in_earning_fixed_income,
                'investment_instruments'             => $applicants->investment_instruments,
                'asset_classes'                      => $applicants->asset_classes,
                'geographies_interested'             => $applicants->geographies_interested,
                'accredited_investor'                => $applicants->accredited_investor,
                'qualified_investor'                 => $applicants->qualified_investor,
                'amounts_placed'                     => $applicants->amounts_placed,
        ]);
        info("investor", [$investor]);
        UploadInvestorDocuments::dispatch($investor, $request->except('passport', 'w9form'), $path, $w9Form = null);
        return response()->noContent(200);
    }
}
