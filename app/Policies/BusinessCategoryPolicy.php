<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class BusinessCategoryPolicy
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
        return Gate::any(['Business Category View', 'Business Category Create', 'Business Category Update', 'Business Category Delete', 'Business Category Restore', 'Business Category Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Business Category View', 'Business Category Create', 'Business Category Update', 'Business Category Delete', 'Business Category Restore', 'Business Category Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Business Category Create');
    }

    public function update($user, $post)
    {
        return $user->can('Business Category Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Business Category Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Business Category Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Business Category Force Delete', $post);
    }
    
}
