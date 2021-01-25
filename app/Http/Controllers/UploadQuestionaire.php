<?php

namespace App\Http\Controllers;

use App\Services\Investor;
use Illuminate\Http\Request;

class UploadQuestionaire extends Controller
{
    public function __invoke(Request $request)
    {
        $data = [
                'investor'                  => $request->investor,
                'legal_name'                => $request->legal_name,
                'investor_location'         => $request->investor_location,
                'nationality'               => $request->nationality,
                'source_of_wealth'          => $request->source_of_wealth,
                'tax_identification_number' => $request->tax_identification_number,
                'authorization'             => $request->authorization,
                'address'                   => $request->address,
                'date_of_birth'             => $request->date_of_birth,
                'w9_form'                   => $request->w9_form,

        ];
        try {
            (new Investor())->updateQuestionaireData($data, $request->investor);

            return back()->with([
                    'verified' => 'good',
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(
                    ['error' => 'There were errors uploading and verifying your documents.']
            );
        }
    }
}
