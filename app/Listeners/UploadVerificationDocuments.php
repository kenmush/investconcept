<?php

namespace App\Listeners;

use App\Events\UploadInvestorDocuments;
use App\Services\Investor;
use Illuminate\Contracts\Queue\ShouldQueue;

class UploadVerificationDocuments implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    public function handle(UploadInvestorDocuments $event)
    {
        $data = [
                'passport' => storage_path('app\\public\\'.$event->document),
                'licence' => storage_path('app\\public\\'.$event->document),
        ];
        try {
          (new Investor())->updateVerificationData($data, $event->investor['id']);

        } catch (\Exception $e) {
            return back()->withErrors(
                    ['error' => 'There were errors uploading and verifying your documents.']
            );
        }
    }
}