<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class SlidePolicy
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
        return Gate::any(['Slide View', 'Slide Create', 'Slide Update', 'Slide Delete', 'Slide Restore', 'Slide Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Slide View', 'Slide Create', 'Slide Update', 'Slide Delete', 'Slide Restore', 'Slide Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Slide Create');
    }

    public function update($user, $post)
    {
        return $user->can('Slide Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Slide Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Slide Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Slide Force Delete', $post);
    }

}
