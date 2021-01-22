<?php

namespace App\Listeners;

use App\Events\UploadInvestorDocuments;
use App\Services\Investor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UploadW9Form implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    public function handle(UploadInvestorDocuments $event)
    {
        $data = [
                'w9_form' => $w9 =storage_path('app\\public\\'.$event->wnineForm),
        ];
        info("Investor W9 Details", [
                $w9
        ]);
        try {
           $investor = (new Investor())->updateW9Form($data, $event->investor['id']);
           info("In W9",[
                   $investor
           ]);

//            Storage::delete(storage_path('app\\public\\'.$event->wnineForm));
        } catch (\Exception $e) {
            return back()->withErrors(
                    ['error' => 'There were errors uploading and verifying your documents.']
            );
        }
    }
}