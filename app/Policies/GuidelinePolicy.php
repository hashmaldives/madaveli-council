<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class GuidelinePolicy
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
        return Gate::any(['Guideline View', 'Guideline Create', 'Guideline Update', 'Guideline Delete', 'Guideline Restore', 'Guideline Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Guideline View', 'Guideline Create', 'Guideline Update', 'Guideline Delete', 'Guideline Restore', 'Guideline Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Guideline Create');
    }

    public function update($user, $post)
    {
        return $user->can('Guideline Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Guideline Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Guideline Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Guideline Force Delete', $post);
    }
    
}
