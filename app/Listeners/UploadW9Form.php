<?php

namespace App\Listeners;

use App\Events\UploadInvestorDocuments;
use App\Services\Investor;
use Illuminate\Contracts\Queue\ShouldQueue;

class UploadW9Form implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    public function handle(UploadInvestorDocuments $event)
    {
        $data = [
                'w9_form' => storage_path('app\\public\\'.$event->wnineForm),
        ];

        try {
           $investor = (new Investor())->updateW9Form($data, $event->investor['id']);
           info("In W9",[
                   $investor
           ]);

        } catch (\Exception $e) {
            return back()->withErrors(
                    ['error' => 'There were errors uploading and verifying your documents.']
            );
        }
    }
}