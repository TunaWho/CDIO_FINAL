<?php

namespace App\Observers;

use App\Models\Partner;
use App\Models\User;

class ProfileObserver
{
    /**
     * Handle the users "created" event.
     *
     * @param  \App\users  $users
     * @return void
     */
    public function created(User $users)
    {
        Partner::create([
            'user_id' => $users->id
        ]);
    }

    /**
     * Handle the users "updated" event.
     *
     * @param  \App\users  $users
     * @return void
     */
    public function updated(User $users)
    {
        //
    }

    /**
     * Handle the users "deleted" event.
     *
     * @param  \App\users  $users
     * @return void
     */
    public function deleted(User $users)
    {
        //
    }

    /**
     * Handle the users "restored" event.
     *
     * @param  \App\users  $users
     * @return void
     */
    public function restored(User $users)
    {
        //
    }

    /**
     * Handle the users "force deleted" event.
     *
     * @param  \App\users  $users
     * @return void
     */
    public function forceDeleted(User $users)
    {
        //
    }
}
