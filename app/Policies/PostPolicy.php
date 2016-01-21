<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Post;
use App\User;

class PostPolicy
{
    public function update(User $user, Post $post)
    {
        return $user->owns($post);
    }
}
