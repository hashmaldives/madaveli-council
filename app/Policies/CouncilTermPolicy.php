<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class CouncilTermPolicy
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
        return Gate::any(['Council Term View', 'Council Term Create', 'Council Term Update', 'Council Term Delete', 'Council Term Restore', 'Council Term Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Council Term View', 'Council Term Create', 'Council Term Update', 'Council Term Delete', 'Council Term Restore', 'Council Term Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Council Term Create');
    }

    public function update($user, $post)
    {
        return $user->can('Council Term Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Council Term Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Council Term Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Council Term Force Delete', $post);
    }
    
}
