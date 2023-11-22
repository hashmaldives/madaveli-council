<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class PublicationPolicy
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
        return Gate::any(['Publication View', 'Publication Create', 'Publication Update', 'Publication Delete', 'Publication Restore', 'Publication Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Publication View', 'Publication Create', 'Publication Update', 'Publication Delete', 'Publication Restore', 'Publication Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Publication Create');
    }

    public function update($user, $post)
    {
        return $user->can('Publication Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Publication Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Publication Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Publication Force Delete', $post);
    }

}
