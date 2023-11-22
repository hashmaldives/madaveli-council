<?php

namespace App\Policies;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function viewAny($user)
    {
        return Gate::any(['Access Permission'], $user);
    }

    public function view($user, Permission $permission)
    {
        return Gate::any(['Access Permission'], $user, $permission);
    }

    public function create($user)
    {
        return $user->can('Access Permission');
    }

    public function update($user, Permission $permission)
    {
        return $user->can('Access Permission', $permission);
    }

    public function delete($user, Permission $permission)
    {
        return $user->can('Access Permission', $permission);
    }

    public function restore($user, Permission $permission)
    {
        return $user->can('Access Permission', $permission);
    }

    public function forceDelete($user, Permission $permission)
    {
        return $user->can('Access Permission', $permission);
    }

}
