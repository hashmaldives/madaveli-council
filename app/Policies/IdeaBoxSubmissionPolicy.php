<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class IdeaBoxSubmissionPolicy
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
        return Gate::any(['Idea Box Submission View', 'Idea Box Submission Create', 'Idea Box Submission Update', 'Idea Box Submission Delete', 'Idea Box Submission Restore', 'Idea Box Submission Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Idea Box Submission View', 'Idea Box Submission Create', 'Idea Box Submission Update', 'Idea Box Submission Delete', 'Idea Box Submission Restore', 'Idea Box Submission Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Idea Box Submission Create');
    }

    public function update($user, $post)
    {
        return $user->can('Idea Box Submission Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Idea Box Submission Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Idea Box Submission Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Idea Box Submission Force Delete', $post);
    }

}
