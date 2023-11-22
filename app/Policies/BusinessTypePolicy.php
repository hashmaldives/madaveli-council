<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class BusinessTypePolicy
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
        return Gate::any(['Business Type View', 'Business Type Create', 'Business Type Update', 'Business Type Delete', 'Business Type Restore', 'Business Type Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Business Type View', 'Business Type Create', 'Business Type Update', 'Business Type Delete', 'Business Type Restore', 'Business Type Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Business Type Create');
    }

    public function update($user, $post)
    {
        return $user->can('Business Type Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Business Type Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Business Type Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Business Type Force Delete', $post);
    }
    
}
