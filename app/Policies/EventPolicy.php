<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventPolicy
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
        return Gate::any(['Event View', 'Event Create', 'Event Update', 'Event Delete', 'Event Restore', 'Event Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Event View', 'Event Create', 'Event Update', 'Event Delete', 'Event Restore', 'Event Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Event Create');
    }

    public function update($user, $post)
    {
        return $user->can('Event Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Event Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Event Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Event Force Delete', $post);
    }
}
