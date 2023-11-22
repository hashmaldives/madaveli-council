<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class FormCategoryPolicy
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
        return Gate::any(['Form Category View', 'Form Category Create', 'Form Category Update', 'Form Category Delete', 'Form Category Restore', 'Form Category Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Form Category View', 'Form Category Create', 'Form Category Update', 'Form Category Delete', 'Form Category Restore', 'Form Category Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Form Category Create');
    }

    public function update($user, $post)
    {
        return $user->can('Form Category Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Form Category Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Form Category Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Form Category Force Delete', $post);
    }
    
}
