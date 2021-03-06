<?php

namespace App\Listeners;

use App\Events\UploadInvestorDocuments;
use App\Services\Investor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use function info;

class UploadQuestionnareData implements ShouldQueue
{
    use InteractsWithQueue;

    public function __construct()
    {
        //
    }

    public function handle(UploadInvestorDocuments $event)
    {
        $fulladdress = $event->request['address_line1'] ?? ''.
                $event->request['address_line2'] ?? ''.
                $event->request['city'] ?? ''.
                $event->request['postal_code'] ?? '';

        $data = [
                        'investor'                  => $event->investor['id'],
                        'legal_name'                => $event->request['legal_name'],
                        'investor_location'         => "",
                        'nationality'               => $event->request['nationality'],
                        'source_of_wealth'          => "",
                        'tax_identification_number' => null,
                        'authorization'             => $event->request['authorization'],
                        'address'                   => $fulladdress,
                        'date_of_birth'             => $event->request['date_of_birth'],
                        'w9_form'                   => null,

                ];
        try {
            $data = (new Investor())->updateQuestionaireData($data, $event->investor['id']);
            info("Questionnare data", [
                    $data
            ]);
            return $data;
        } catch (\Exception $e) {
            info("Questionnare data", [
                    $e->getMessage()
            ]);
            return;
        }
    }

    public function tags()
    {
        return ['Questionnaire Data', 'investor'];
    }
}
