<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;


class EmployeeSectionPolicy
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
        return Gate::any(['Employee Section View', 'Employee Section Create', 'Employee Section Update', 'Employee Section Delete', 'Employee Section Restore', 'Employee Section Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Employee Section View', 'Employee Section Create', 'Employee Section Update', 'Employee Section Delete', 'Employee Section Restore', 'Employee Section Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Employee Section Create');
    }

    public function update($user, $post)
    {
        return $user->can('Employee Section Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Employee Section Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Employee Section Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Employee Section Force Delete', $post);
    }

}
