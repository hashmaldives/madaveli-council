<?php

namespace App\Policies;

use App\Models\User;
use App\HomePageSection;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class HomePageSectionPolicy
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
        return Gate::any(['Home Page Section View', 'Home Page Section Create', 'Home Page Section Update', 'Home Page Section Delete', 'Home Page Section Restore', 'Home Page Section Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Home Page Section View', 'Home Page Section Create', 'Home Page Section Update', 'Home Page Section Delete', 'Home Page Section Restore', 'Home Page Section Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Home Page Section Create');
    }

    public function update($user, $post)
    {
        return $user->can('Home Page Section Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Home Page Section Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Home Page Section Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Home Page Section Force Delete', $post);
    }
}
