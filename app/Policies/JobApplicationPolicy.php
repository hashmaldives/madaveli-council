<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobApplicationPolicy
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
        return Gate::any(['Job Application View', 'Job Application Create', 'Job Application Update', 'Job Application Delete', 'Job Application Restore', 'Job Application Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Job Application View', 'Job Application Create', 'Job Application Update', 'Job Application Delete', 'Job Application Restore', 'Job Application Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Job Application Create');
    }

    public function update($user, $post)
    {
        return $user->can('Job Application Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Job Application Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Job Application Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Job Application Force Delete', $post);
    }
}
