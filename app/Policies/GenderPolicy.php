<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class GenderPolicy
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
        return Gate::any(['Gender View', 'Gender Create', 'Gender Update', 'Gender Delete', 'Gender Restore', 'Gender Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Gender View', 'Gender Create', 'Gender Update', 'Gender Delete', 'Gender Restore', 'Gender Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Gender Create');
    }

    public function update($user, $post)
    {
        return $user->can('Gender Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Gender Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Gender Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Gender Force Delete', $post);
    }
    
}
