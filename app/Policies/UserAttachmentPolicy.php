<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserAttachmentPolicy
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
        return Gate::any(['User Attachment View', 'User Attachment Create', 'User Attachment Update', 'User Attachment Delete', 'User Attachment Restore', 'User Attachment Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['User Attachment View', 'User Attachment Create', 'User Attachment Update', 'User Attachment Delete', 'User Attachment Restore', 'User Attachment Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('User Attachment Create');
    }

    public function update($user, $post)
    {
        return $user->can('User Attachment Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('User Attachment Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('User Attachment Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('User Attachment Force Delete', $post);
    }

    
}
