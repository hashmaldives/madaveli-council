<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class NewsPolicy
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
        return Gate::any(['News View', 'News Create', 'News Update', 'News Delete', 'News Restore', 'News Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['News View', 'News Create', 'News Update', 'News Delete', 'News Restore', 'News Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('News Create');
    }

    public function update($user, $post)
    {
        return $user->can('News Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('News Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('News Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('News Force Delete', $post);
    }

}
