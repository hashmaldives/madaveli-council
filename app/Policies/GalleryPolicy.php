<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class GalleryPolicy
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
        return Gate::any(['Gallery View', 'Gallery Create', 'Gallery Update', 'Gallery Delete', 'Gallery Restore', 'Gallery Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Gallery View', 'Gallery Create', 'Gallery Update', 'Gallery Delete', 'Gallery Restore', 'Gallery Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Gallery Create');
    }

    public function update($user, $post)
    {
        return $user->can('Gallery Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Gallery Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Gallery Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Gallery Force Delete', $post);
    }

}
