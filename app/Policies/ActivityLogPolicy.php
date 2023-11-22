<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class ActivityLogPolicy
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
        return Gate::any(['View Activity Log', 'Create Activity Log', 'Delete Activity Log', 'Update Activity Log', 'Restore Activity Log', 'Force Delete Activity Log'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['View Activity Log', 'Create Activity Log', 'Delete Activity Log', 'Update Activity Log', 'Restore Activity Log', 'Force Delete Activity Log'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Create Activity Log');
    }

    public function update($user, $post)
    {
        return $user->can('Update Activity Log', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Delete Activity Log', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Restore Activity Log', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Force Delete Activity Log', $post);
    }

}
