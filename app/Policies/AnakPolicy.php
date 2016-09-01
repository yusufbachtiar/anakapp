<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class AnakPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function destroy(Anak $anak /** Overtime $overtima */)
    {
        // return $istri-> id === $overtime->user_id;
        return $anak;
    }
}
