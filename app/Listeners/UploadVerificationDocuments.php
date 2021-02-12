<?php

namespace App\Listeners;

use App\Events\UploadInvestorDocuments;
use App\Services\Investor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class UploadVerificationDocuments implements ShouldQueue
{
    public $tries = 10;

    public function __construct()
    {
    }

    public function handle(UploadInvestorDocuments $event)
    {
        if ($event->request['documenttype'] === 'passport') {
            $data = [
                    'passport' => storage_path('app/public/'.$event->document),
            ];
        } else {
            $data = [
                    'licence' => $licence = storage_path('app/public/'.$event->document),
            ];
        }
        try {
            return (new Investor())->updateVerificationData($data, $event->investor['id']);
        } catch (\Exception $e) {
            return back()->withErrors(
                    ['error' => 'There were errors uploading and verifying your documents.']
            );
        }
    }

    public function tags()
    {
        return ['Verification Documents', 'investor:'];
    }
}
