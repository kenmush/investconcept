<?php

namespace App\Http\Controllers;


use App\Services\Investor;
use Exception;
use Illuminate\Http\Request;

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
                    'verified' => 'Documents have been submitted. You will receive an email with more information.'
            ]);
        } catch (\Exception $e) {
//            $message = $e->getResponse() ?
//                    $e->getResponse()->getReasonPhrase() :
//                    $e->getMessage();
//            throw new Exception($e->getResponse()->getBody()->getContents());
            return back()->withErrors(
                    ['error' => 'There were errors uploading and verifying your documents.']
            );
        }


    }
}