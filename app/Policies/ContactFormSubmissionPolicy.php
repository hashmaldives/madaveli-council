<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactFormSubmissionPolicy
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
        return Gate::any(['Contact Form Submission View', 'Contact Form Submission Create', 'Contact Form Submission Update', 'Contact Form Submission Delete', 'Contact Form Submission Restore', 'Contact Form Submission Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Contact Form Submission View', 'Contact Form Submission Create', 'Contact Form Submission Update', 'Contact Form Submission Delete', 'Contact Form Submission Restore', 'Contact Form Submission Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Contact Form Submission Create');
    }

    public function update($user, $post)
    {
        return $user->can('Contact Form Submission Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Contact Form Submission Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Contact Form Submission Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Contact Form Submission Force Delete', $post);
    }

}
