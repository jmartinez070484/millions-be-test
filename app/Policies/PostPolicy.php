<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user){
        return $user -> isAdmin;
    }

    public function view(User $user, Post $model){
        return $user -> isAdmin || $user -> id === $model -> id;
    }

    public function update(User $user, Post $model){
        return $user -> isAdmin || $user -> id === $model -> id;
    }
}
