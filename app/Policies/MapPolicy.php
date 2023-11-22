<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class MapPolicy
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
        return Gate::any(['Map View', 'Map Create', 'Map Update', 'Map Delete', 'Map Restore', 'Map Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Map View', 'Map Create', 'Map Update', 'Map Delete', 'Map Restore', 'Map Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Map Create');
    }

    public function update($user, $post)
    {
        return $user->can('Map Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Map Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Map Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Map Force Delete', $post);
    }

}
