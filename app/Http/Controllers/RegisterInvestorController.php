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
            $path = $request->file('passport')->store('files');
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

        return response()->noContent(200);
    }
}
