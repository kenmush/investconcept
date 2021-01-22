<?php

namespace App\Listeners;

use App\Events\UploadInvestorDocuments;
use App\Services\Investor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use function _HumbugBoxd1d863f2278d\RingCentral\Psr7\parse_header;

class UploadW9Form implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    public function handle(UploadInvestorDocuments $event)
    {
        $data = [
                'w9_form' => $w9 =storage_path('app/public/'.$event->wnineForm),
        ];

        try {
           $investor = (new Investor())->updateW9Form($data, $event->investor['id']);

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