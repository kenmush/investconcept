<?php

namespace App\Listeners;

use App\Events\UploadInvestorDocuments;
use App\Services\Investor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;
use function info;

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
            $data = (new Investor())->updateVerificationData($data, $event->investor['id']);
            info("Upload", [
                    $data
            ]);
            return $data;
        } catch (\Exception $e) {
            info("Questionnare data", [
                    $e->getMessage()
            ]);
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
