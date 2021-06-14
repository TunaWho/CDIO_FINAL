<?php

namespace App\Observers;

use App\Models\AcceptRequest;
use App\Models\SendRequest;

class SendRequestObserver
{
    /**
     * Handle the send request "created" event.
     *
     * @param  \App\SendRequest  $sendRequest
     * @return void
     */
    public function created(SendRequest $sendRequest)
    {
        AcceptRequest::create([
            'send_request_id' => $sendRequest->id,
            'accept' => 0,
            'partner_id' => $sendRequest->partner_id
        ]);
    }

    /**
     * Handle the send request "updated" event.
     *
     * @param  \App\SendRequest  $sendRequest
     * @return void
     */
    public function updated(SendRequest $sendRequest)
    {
        //
    }

    /**
     * Handle the send request "deleted" event.
     *
     * @param  \App\SendRequest  $sendRequest
     * @return void
     */
    public function deleted(SendRequest $sendRequest)
    {
        //
    }

    /**
     * Handle the send request "restored" event.
     *
     * @param  \App\SendRequest  $sendRequest
     * @return void
     */
    public function restored(SendRequest $sendRequest)
    {
        //
    }

    /**
     * Handle the send request "force deleted" event.
     *
     * @param  \App\SendRequest  $sendRequest
     * @return void
     */
    public function forceDeleted(SendRequest $sendRequest)
    {
        //
    }
}
