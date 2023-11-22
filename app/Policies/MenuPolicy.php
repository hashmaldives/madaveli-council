<?php

namespace App\Policies;

use App\Models\User;
use Outl1ne\MenuBuilder\Models\Menu;
use Illuminate\Auth\Access\HandlesAuthorization;

class MenuPolicy
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
        return Gate::any(['Access Menu'], $user);
    }

    public function view($user, Menu $menu)
    {
        return Gate::any(['Access Menu'], $user, $menu);
    }

    public function create($user)
    {
        return $user->can('Access Menu');
    }

    public function update($user, Menu $menu)
    {
        return $user->can('Access Menu', $menu);
    }

    public function delete($user, Menu $menu)
    {
        return $user->can('Access Menu', $menu);
    }

    public function restore($user, Menu $menu)
    {
        return $user->can('Access Menu', $menu);
    }

    public function forceDelete($user, Menu $menu)
    {
        return $user->can('Access Menu', $menu);
    }

}
