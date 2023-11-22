<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class ApplicationFormSubmissionPolicy
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
        return Gate::any(['Application Form Submission View', 'Application Form Submission Create', 'Application Form Submission Update', 'Application Form Submission Delete', 'Application Form Submission Restore', 'Application Form Submission Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Application Form Submission View', 'Application Form Submission Create', 'Application Form Submission Update', 'Application Form Submission Delete', 'Application Form Submission Restore', 'Application Form Submission Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Application Form Submission Create');
    }

    public function update($user, $post)
    {
        return $user->can('Application Form Submission Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Application Form Submission Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Application Form Submission Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Application Form Submission Force Delete', $post);
    }
    
}
