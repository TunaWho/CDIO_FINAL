<?php

namespace App\Observers;

use App\Models\AcceptRequest;
use App\Models\Partner;

class AcceptObserver
{
    /**
     * Handle the accept request "created" event.
     *
     * @param  \App\AcceptRequest  $acceptRequest
     * @return void
     */
    public function created(AcceptRequest $acceptRequest)
    {

    }

    /**
     * Handle the accept request "updated" event.
     *
     * @param  \App\AcceptRequest  $acceptRequest
     * @return void
     */
    public function updated(AcceptRequest $acceptRequest)
    {
        $partner = Partner::where('id', $acceptRequest->partner_id);
        $query = clone $partner->first();
        $amounts = $query['account_balance'] - 5000;
        $partner->update([
            'account_balance' => $amounts
        ]);
    }

    /**
     * Handle the accept request "deleted" event.
     *
     * @param  \App\AcceptRequest  $acceptRequest
     * @return void
     */
    public function deleted(AcceptRequest $acceptRequest)
    {
        //
    }

    /**
     * Handle the accept request "restored" event.
     *
     * @param  \App\AcceptRequest  $acceptRequest
     * @return void
     */
    public function restored(AcceptRequest $acceptRequest)
    {
        dd('hihi');
    }

    /**
     * Handle the accept request "force deleted" event.
     *
     * @param  \App\AcceptRequest  $acceptRequest
     * @return void
     */
    public function forceDeleted(AcceptRequest $acceptRequest)
    {
        //
    }
}
