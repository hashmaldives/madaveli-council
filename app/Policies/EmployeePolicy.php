<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmployeePolicy
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
        return Gate::any(['Employee View', 'Employee Create', 'Employee Update', 'Employee Delete', 'Employee Restore', 'Employee Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Employee View', 'Employee Create', 'Employee Update', 'Employee Delete', 'Employee Restore', 'Employee Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Employee Create');
    }

    public function update($user, $post)
    {
        return $user->can('Employee Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Employee Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Employee Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Employee Force Delete', $post);
    }
    
}
