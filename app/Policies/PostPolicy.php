<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
use Illumintae\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    /**
     * Create a new policy instance.
     */
        
    public function deltete(User $user, Post $post)
    {
        return $user->id===$post->user_id;
    }
}
