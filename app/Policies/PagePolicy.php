<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Gate;

class PagePolicy
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
        return Gate::any(['Page View', 'Page Create', 'Page Update', 'Page Delete', 'Page Restore', 'Page Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Page View', 'Page Create', 'Page Update', 'Page Delete', 'Page Restore', 'Page Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Page Create');
    }

    public function update($user, $post)
    {
        return $user->can('Page Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Page Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Page Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Page Force Delete', $post);
    }

}
