<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UploadInvestorDocuments
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $investor;
    public $request;
    public $document;
    public $wnineForm;

    public function __construct($investor,$request,$document,$w9Form)
    {
        $this->investor = $investor;
        $this->request = $request;
        $this->document = $document;
        $this->wnineForm = $w9Form;
    }


}