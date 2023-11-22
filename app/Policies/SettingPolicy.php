<?php

namespace App\Policies;

use App\Models\User;
use Outl1ne\NovaSettings\Models\Settings;
use Illuminate\Auth\Access\HandlesAuthorization;

class SettingPolicy
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
        return Gate::any(['Access Settings'], $user);
    }

    public function view($user, Settings $settings)
    {
        return Gate::any(['Access Settings'], $user, $settings);
    }

    public function create($user)
    {
        return $user->can('Access Settings');
    }

    public function update($user, Settings $settings)
    {
        return $user->can('Access Settings', $settings);
    }

    public function delete($user, Settings $settings)
    {
        return $user->can('Access Settings', $settings);
    }

    public function restore($user, Settings $settings)
    {
        return $user->can('Access Settings', $settings);
    }

    public function forceDelete($user, Settings $settings)
    {
        return $user->can('Access Settings', $settings);
    }

}
