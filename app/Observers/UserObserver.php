<?php

namespace App\Observers;

use App\User;

class PostObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\User  $post
     * @return void
     */
    public function created(User $post)
    {
        //
    }

    /**
     * Handle the post "updated" event.
     *
     * @param  \App\User  $post
     * @return void
     */
    public function updated(User $post)
    {
        //
    }

    /**
     * Handle the post "deleted" event.
     *
     * @param  \App\User  $post
     * @return void
     */
    public function deleted(User $post)
    {
        //
    }

    /**
     * Handle the post "restored" event.
     *
     * @param  \App\User  $post
     * @return void
     */
    public function restored(User $post)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\User  $post
     * @return void
     */
    public function forceDeleted(User $post)
    {
        //
    }
}
