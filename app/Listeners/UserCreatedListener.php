<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\UserCreated;
use Illuminate\Support\Facades\Log;
use Exception;
use App\Mail\NewUserNotification;
use Illuminate\Support\Facades\Mail;

class UserCreatedListener implements ShouldQueue
{

    /**
     * The number of seconds to wait before retrying the job.
     *
     * @var int
     */
    public $retryAfter = 3;

    /**
     * The time (seconds) before the job should be processed.
     *
     * @var int
     */
    public $delay = 3;

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        Mail::to('Thadingthad1945@dayrep.com')->send(new NewUserNotification());
    }
}
