<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any posts.
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can create a post.
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }


}
