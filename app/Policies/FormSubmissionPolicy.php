<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class FormSubmissionPolicy
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
        return Gate::any(['Form Submission View', 'Form Submission Create', 'Form Submission Update', 'Form Submission Delete', 'Form Submission Restore', 'Form Submission Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Form Submission View', 'Form Submission Create', 'Form Submission Update', 'Form Submission Delete', 'Form Submission Restore', 'Form Submission Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Form Submission Create');
    }

    public function update($user, $post)
    {
        return $user->can('Form Submission Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Form Submission Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Form Submission Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Form Submission Force Delete', $post);
    }
    
}
