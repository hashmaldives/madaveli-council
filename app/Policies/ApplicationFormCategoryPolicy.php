<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class ApplicationFormCategoryPolicy
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
        return Gate::any(['Application Form Category View', 'Application Form Category Create', 'Application Form Category Update', 'Application Form Category Delete', 'Application Form Category Restore', 'Application Form Category Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Application Form Category View', 'Application Form Category Create', 'Application Form Category Update', 'Application Form Category Delete', 'Application Form Category Restore', 'Application Form Category Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Application Form Category Create');
    }

    public function update($user, $post)
    {
        return $user->can('Application Form Category Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Application Form Category Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Application Form Category Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Application Form Category Force Delete', $post);
    }
    
}
