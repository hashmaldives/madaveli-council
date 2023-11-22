<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class WdcTermPolicy
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
        return Gate::any(['WDC Term View', 'WDC Term Create', 'WDC Term Update', 'WDC Term Delete', 'WDC Term Restore', 'WDC Term Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['WDC Term View', 'WDC Term Create', 'WDC Term Update', 'WDC Term Delete', 'WDC Term Restore', 'WDC Term Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('WDC Term Create');
    }

    public function update($user, $post)
    {
        return $user->can('WDC Term Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('WDC Term Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('WDC Term Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('WDC Term Force Delete', $post);
    }
    
}
