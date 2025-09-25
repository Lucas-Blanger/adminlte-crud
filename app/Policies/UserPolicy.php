<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function edit(User $user)
    {
        return $user->roles()->where('name', 'admin')->exists();
    }

    public function destroy(User $user)
    {
        return $user->roles()->where('name', 'admin')->exists();
    }
}
