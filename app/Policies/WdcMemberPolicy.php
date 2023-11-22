<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;

class WdcMemberPolicy
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
        return Gate::any(['WDC Member View', 'WDC Member Create', 'WDC Member Update', 'WDC Member Delete', 'WDC Member Restore', 'WDC Member Force Delete'], $user);
    }

    public function view($user, $post)
    {
        return Gate::any(['WDC Member View', 'WDC Member Create', 'WDC Member Update', 'WDC Member Delete', 'WDC Member Restore', 'WDC Member Force Delete'], $user, $post);
    }

    public function create($user)
    {
        return $user->can('WDC Member Create');
    }

    public function update($user, $post)
    {
        return $user->can('WDC Member Update', $post);
    }

    public function delete($user, $post)
    {
        return $user->can('WDC Member Delete', $post);
    }

    public function restore($user, $post)
    {
        return $user->can('WDC Member Restore', $post);
    }

    public function forceDelete($user, $post)
    {
        return $user->can('WDC Member Force Delete', $post);
    }
    
}
