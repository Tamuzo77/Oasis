<?php

namespace App\Policies\Admin;

use App\Models\User;
use App\Models\Actualite;
use Spatie\Permission\Models\Role;
use Illuminate\Auth\Access\Response;

class ActualitePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
        return $user->hasRole(Role::ADMIN) || $user->can('view actus');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Actualite $actualite): bool
    {
        //
        return $user->hasRole(Role::ADMIN) ;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
        return $user->hasRole(Role::ADMIN) || $user->can('createActus');

    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Actualite $actualite): bool
    {
        return $user->hasRole(Role::ADMIN);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Actualite $actualite): bool
    {
        return $user->hasRole(Role::ADMIN);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Actualite $actualite): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Actualite $actualite): bool
    {
        //
    }
}
