<?php

namespace App\Providers;

use App\Events\UploadInvestorDocuments;
use App\Listeners\UploadQuestionnareData;
use App\Listeners\UploadVerificationDocuments;
use App\Listeners\UploadW9Form;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
            Registered::class              => [
                    SendEmailVerificationNotification::class,
            ],
            UploadInvestorDocuments::class => [
                    UploadVerificationDocuments::class,
                    UploadW9Form::class,
                    UploadQuestionnareData::class,
            ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
