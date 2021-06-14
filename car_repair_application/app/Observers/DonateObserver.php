<?php

namespace App\Observers;

use App\Models\Donate;
use App\Models\Partner;

class DonateObserver
{
    /**
     * Handle the donate "created" event.
     *
     * @param  \App\Donate  $donate
     * @return void
     */
    public function created(Donate $donate)
    {
    }

    /**
     * Handle the donate "updated" event.
     *
     * @param  \App\Donate  $donate
     * @return void
     */
    public function updated(Donate $donate)
    {
    }

    /**
     * Handle the donate "deleted" event.
     *
     * @param  \App\Donate  $donate
     * @return void
     */
    public function deleting(Donate $donate)
    {
        $partner = Partner::where('id', $donate->partner_id);
        $query = clone $partner->first();
        $amounts = $query['account_balance'] + $donate->amounts;
        $partner->update([
            'account_balance' => $amounts
        ]);
    }

    /**
     * Handle the donate "restored" event.
     *
     * @param  \App\Donate  $donate
     * @return void
     */
    public function restored(Donate $donate)
    {
    }

    /**
     * Handle the donate "force deleted" event.
     *
     * @param  \App\Donate  $donate
     * @return void
     */
    public function forceDeleted(Donate $donate)
    {
    }
}
