<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class CouncilMemberPolicy
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
        return Gate::any(['Council Member View', 'Council Member Create', 'Council Member Update', 'Council Member Delete', 'Council Member Restore', 'Council Member Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Council Member View', 'Council Member Create', 'Council Member Update', 'Council Member Delete', 'Council Member Restore', 'Council Member Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Council Member Create');
    }

    public function update($user, $post)
    {
        return $user->can('Council Member Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Council Member Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Council Member Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Council Member Force Delete', $post);
    }

}
