<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class DynamicFormPolicy
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
        return Gate::any(['Dynamic Form View', 'Dynamic Form Create', 'Dynamic Form Update', 'Dynamic Form Delete', 'Dynamic Form Restore', 'Dynamic Form Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Dynamic Form View', 'Dynamic Form Create', 'Dynamic Form Update', 'Dynamic Form Delete', 'Dynamic Form Restore', 'Dynamic Form Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Dynamic Form Create');
    }

    public function update($user, $post)
    {
        return $user->can('Dynamic Form Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Dynamic Form Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Dynamic Form Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Dynamic Form Force Delete', $post);
    }
    
}
