<?php

namespace App\Policies;

use App\User;
use App\user_profiles;
use Illuminate\Auth\Access\HandlesAuthorization;

class profilepolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any user_profiles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the user_profiles.
     *
     * @param  \App\User  $user
     * @param  \App\user_profiles  $userProfiles
     * @return mixed
     */
    public function view(User $user, user_profiles $userProfiles)
    {
        //
    }

    /**
     * Determine whether the user can create user_profiles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the user_profiles.
     *
     * @param  \App\User  $user
     * @param  \App\user_profiles  $userProfiles
     * @return mixed
     */
    public function update(User $user, user_profiles $userprofile)
    {
       return $user->id === $userprofile->user_id;
    }

    /**
     * Determine whether the user can delete the user_profiles.
     *
     * @param  \App\User  $user
     * @param  \App\user_profiles  $userProfiles
     * @return mixed
     */
    public function delete(User $user, user_profiles $userProfiles)
    {
        //
    }

    /**
     * Determine whether the user can restore the user_profiles.
     *
     * @param  \App\User  $user
     * @param  \App\user_profiles  $userProfiles
     * @return mixed
     */
    public function restore(User $user, user_profiles $userProfiles)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the user_profiles.
     *
     * @param  \App\User  $user
     * @param  \App\user_profiles  $userProfiles
     * @return mixed
     */
    public function forceDelete(User $user, user_profiles $userProfiles)
    {
        //
    }
}
