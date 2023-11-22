<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class DownloadPolicy
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
        return Gate::any(['Download View', 'Download Create', 'Download Update', 'Download Delete', 'Download Restore', 'Download Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Download View', 'Download Create', 'Download Update', 'Download Delete', 'Download Restore', 'Download Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Download Create');
    }

    public function update($user, $post)
    {
        return $user->can('Download Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Download Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Download Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Download Force Delete', $post);
    }

}
