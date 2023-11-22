<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class BusinessPolicy
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
        return Gate::any(['Business View', 'Business Create', 'Business Update', 'Business Delete', 'Business Restore', 'Business Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Business View', 'Business Create', 'Business Update', 'Business Delete', 'Business Restore', 'Business Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Business Create');
    }

    public function update($user, $post)
    {
        return $user->can('Business Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Business Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Business Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Business Force Delete', $post);
    }
    
}
