<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class SidebarPolicy
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
        return Gate::any(['Sidebar View', 'Sidebar Create', 'Sidebar Update', 'Sidebar Delete', 'Sidebar Restore', 'Sidebar Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Sidebar View', 'Sidebar Create', 'Sidebar Update', 'Sidebar Delete', 'Sidebar Restore', 'Sidebar Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Sidebar Create');
    }

    public function update($user, $post)
    {
        return $user->can('Sidebar Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Sidebar Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Sidebar Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Sidebar Force Delete', $post);
    }

}
