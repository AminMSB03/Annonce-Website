<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Annonce;
use Illuminate\Auth\Access\HandlesAuthorization;

class AnnoncePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function delete(User $user,Annonce $Annonce)
    {
        return $user->id === $Annonce->user_id;
    }
    public function edit(User $user,Annonce $Annonce)
    {
        return $user->id === $Annonce->user_id;
    }
}
