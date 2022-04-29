<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    use HandlesAuthorization;

    public function create(User $user): Response|bool
    {
        return $user->email === 'alexander.flatley@example.com';
    }

    public function edit(User $user, User $model): Response|bool
    {
        return (bool) mt_rand(0, 1);
    }
}
