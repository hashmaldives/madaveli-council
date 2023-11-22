<?php

namespace App\Policies;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
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
        return Gate::any(['Access Role'], $user);
    }

    public function view($user, Role $role)
    {
        return Gate::any(['Access Role'], $user, $role);
    }

    public function create($user)
    {
        return $user->can('Access Role');
    }

    public function update($user, Role $role)
    {
        return $user->can('Access Role', $role);
    }

    public function delete($user, Role $role)
    {
        return $user->can('Access Role', $role);
    }

    public function restore($user, Role $role)
    {
        return $user->can('Access Role', $role);
    }

    public function forceDelete($user, Role $role)
    {
        return $user->can('Access Role', $role);
    }

}
