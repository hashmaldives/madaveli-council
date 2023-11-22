<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobOpportunityPolicy
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
        return Gate::any(['Job Opportunity View', 'Job Opportunity Create', 'Job Opportunity Update', 'Job Opportunity Delete', 'Job Opportunity Restore', 'Job Opportunity Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Job Opportunity View', 'Job Opportunity Create', 'Job Opportunity Update', 'Job Opportunity Delete', 'Job Opportunity Restore', 'Job Opportunity Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Job Opportunity Create');
    }

    public function update($user, $post)
    {
        return $user->can('Job Opportunity Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Job Opportunity Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Job Opportunity Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Job Opportunity Force Delete', $post);
    }
}
