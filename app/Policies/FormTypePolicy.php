<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class FormTypePolicy
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
        return Gate::any(['Form Type View', 'Form Type Create', 'Form Type Update', 'Form Type Delete', 'Form Type Restore', 'Form Type Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Form Type View', 'Form Type Create', 'Form Type Update', 'Form Type Delete', 'Form Type Restore', 'Form Type Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Form Type Create');
    }

    public function update($user, $post)
    {
        return $user->can('Form Type Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Form Type Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Form Type Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Form Type Force Delete', $post);
    }
    
}
