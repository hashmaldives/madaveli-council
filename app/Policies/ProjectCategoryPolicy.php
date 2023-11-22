<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectCategoryPolicy
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
        return Gate::any(['Project Category View', 'Project Category Create', 'Project Category Update', 'Project Category Delete', 'Project Category Restore', 'Project Category Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Project Category View', 'Project Category Create', 'Project Category Update', 'Project Category Delete', 'Project Category Restore', 'Project Category Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Project Category Create');
    }

    public function update($user, $post)
    {
        return $user->can('Project Category Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Project Category Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Project Category Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Project Category Force Delete', $post);
    }
    
}
