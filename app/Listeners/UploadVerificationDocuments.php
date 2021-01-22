<?php

namespace App\Listeners;

use App\Events\UploadInvestorDocuments;
use App\Services\Investor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class UploadVerificationDocuments implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    public function handle(UploadInvestorDocuments $event)
    {
        $data = [
                'passport' => storage_path('app/public/'.$event->document),
                'licence' => $licence =storage_path('app/public/'.$event->document),
        ];

        try {
         $investor = (new Investor())->updateVerificationData($data, $event->investor['id']);

//            Storage::delete(storage_path('app\\public\\'.$event->document));
        } catch (\Exception $e) {
            info("error in W9",[
                    $e->getMessage()
            ]);
            return back()->withErrors(
                    ['error' => 'There were errors uploading and verifying your documents.']
            );
        }
    }
}