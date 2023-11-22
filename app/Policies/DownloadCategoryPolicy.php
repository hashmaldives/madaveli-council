<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class DownloadCategoryPolicy
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
        return Gate::any(['Download Category View', 'Download Category Create', 'Download Category Update', 'Download Category Delete', 'Download Category Restore', 'Download Category Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['Download Category View', 'Download Category Create', 'Download Category Update', 'Download Category Delete', 'Download Category Restore', 'Download Category Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('Download Category Create');
    }

    public function update($user, $post)
    {
        return $user->can('Download Category Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('Download Category Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('Download Category Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('Download Category Force Delete', $post);
    }

}
