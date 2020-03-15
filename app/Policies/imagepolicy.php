<?php

namespace App\Policies;

use App\User;
use App\post_image;
use App\posts;
use Illuminate\Auth\Access\HandlesAuthorization;

class imagepolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any post_images.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the post_image.
     *
     * @param  \App\User  $user
     * @param  \App\post_image  $postImage
     * @return mixed
     */
    public function view(posts $user, post_image $postImage)
    {
        return $user->id === $postImage->post_id;
    }

    /**
     * Determine whether the user can create post_images.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the post_image.
     *
     * @param  \App\User  $user
     * @param  \App\post_image  $postImage
     * @return mixed
     */
    public function update(User $user, post_image $postImage)
    {
        //
    }

    /**
     * Determine whether the user can delete the post_image.
     *
     * @param  \App\User  $user
     * @param  \App\post_image  $postImage
     * @return mixed
     */
    public function delete(User $user, post_image $postImage)
    {
        //
    }

    /**
     * Determine whether the user can restore the post_image.
     *
     * @param  \App\User  $user
     * @param  \App\post_image  $postImage
     * @return mixed
     */
    public function restore(User $user, post_image $postImage)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the post_image.
     *
     * @param  \App\User  $user
     * @param  \App\post_image  $postImage
     * @return mixed
     */
    public function forceDelete(User $user, post_image $postImage)
    {
        //
    }
}
