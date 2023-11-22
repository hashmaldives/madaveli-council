<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class PublicationCategoryPolicy
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
        return Gate::any(['Publication Category View', 'Publication Category Create', 'Publication Category Update', 'Publication Category Delete', 'Publication Category Restore', 'Publication Category Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Publication Category View', 'Publication Category Create', 'Publication Category Update', 'Publication Category Delete', 'Publication Category Restore', 'Publication Category Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Publication Category Create');
    }

    public function update($user, $post)
    {
        return $user->can('Publication Category Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Publication Category Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Publication Category Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Publication Category Force Delete', $post);
    }
    
}
