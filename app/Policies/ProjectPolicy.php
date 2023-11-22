<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
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
        return Gate::any(['Project View', 'Project Create', 'Project Update', 'Project Delete', 'Project Restore', 'Project Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Project View', 'Project Create', 'Project Update', 'Project Delete', 'Project Restore', 'Project Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Project Create');
    }

    public function update($user, $post)
    {
        return $user->can('Project Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Project Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Project Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Project Force Delete', $post);
    }
    
}
