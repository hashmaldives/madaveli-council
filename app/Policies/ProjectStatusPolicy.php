<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectStatusPolicy
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
        return Gate::any(['Project Status View', 'Project Status Create', 'Project Status Update', 'Project Status Delete', 'Project Status Restore', 'Project Status Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Project Status View', 'Project Status Create', 'Project Status Update', 'Project Status Delete', 'Project Status Restore', 'Project Status Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Project Status Create');
    }

    public function update($user, $post)
    {
        return $user->can('Project Status Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Project Status Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Project Status Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Project Status Force Delete', $post);
    }
    
}
