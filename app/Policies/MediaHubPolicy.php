<?php

namespace App\Policies;

use App\Models\User;
use Outl1ne\NovaMediaHub\MediaHub;
use Illuminate\Auth\Access\HandlesAuthorization;

class MediaHubPolicy
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
        return Gate::any(['Access Media Hub'], $user);
    }

    public function view($user, MediaHub $mediaHub)
    {
        return Gate::any(['Access Media Hub'], $user, $mediaHub);
    }

    public function create($user)
    {
        return $user->can('Access Media Hub');
    }

    public function update($user, MediaHub $mediaHub)
    {
        return $user->can('Access Media Hub', $mediaHub);
    }

    public function delete($user, MediaHub $mediaHub)
    {
        return $user->can('Access Media Hub', $mediaHub);
    }

    public function restore($user, MediaHub $mediaHub)
    {
        return $user->can('Access Media Hub', $mediaHub);
    }

    public function forceDelete($user, MediaHub $mediaHub)
    {
        return $user->can('Access Media Hub', $mediaHub);
    }

}
