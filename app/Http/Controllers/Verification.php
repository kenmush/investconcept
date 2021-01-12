<?php

namespace App\Http\Controllers;


use App\Services\Investor;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class Verification extends Controller
{
    public function __invoke(Request $request)
    {
        $data = [
                'passport' => $request->document,
                'licence'  => $request->document
        ];
        try {
            (new Investor())->updateVerificationData($data, $request->investor_id);
            return back()->with([
                    'verified' => 'Documents have been submitted. You will receive an email with more information.',
                    'investor' => $request->investor_id,
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(
                    ['error' => 'There were errors uploading and verifying your documents.']
            );
        }


    }
}