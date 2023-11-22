<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Gate;

class PoliticalPartyPolicy
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
        return Gate::any(['Political Party View', 'Political Party Create', 'Political Party Update', 'Political Party Delete', 'Political Party Restore', 'Political Party Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Political Party View', 'Political Party Create', 'Political Party Update', 'Political Party Delete', 'Political Party Restore', 'Political Party Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Political Party Create');
    }

    public function update($user, $post)
    {
        return $user->can('Political Party Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Political Party Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Political Party Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Political Party Force Delete', $post);
    }
    
}
