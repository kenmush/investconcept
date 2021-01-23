<?php

namespace App\Listeners;

use App\Events\UploadInvestorDocuments;
use App\Services\Investor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class UploadVerificationDocuments implements ShouldQueue
{
    public $investor;


    public function __construct()
    {

    }

    public function handle(UploadInvestorDocuments $event)
    {
        $this->investor = $event->investor;
        if ($event->request['documenttype'] === 'passport') {
            $data = [
                    'passport' => storage_path('app/public/'.$event->document),
            ];
        }
        if ($event->request['documenttype'] === 'driverslicence') {
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
        return ['Verification Documents', 'investor:'.$this->investor['name']."-".$this->investor['id']];
    }
}