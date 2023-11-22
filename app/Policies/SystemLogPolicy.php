<?php

namespace App\Policies;

use App\Models\User;
use KABBOUCHI\LogsTool\LogsTool;
use Illuminate\Auth\Access\HandlesAuthorization;

class SystemLogPolicy
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
        return Gate::any(['Access System Log'], $user);
    }

    public function view($user, LogsTool $systemLog)
    {
        return Gate::any(['Access System Log'], $user, $systemLog);
    }

    public function create($user)
    {
        return $user->can('Access System Log');
    }

    public function update($user, LogsTool $systemLog)
    {
        return $user->can('Access System Log', $systemLog);
    }

    public function delete($user, LogsTool $systemLog)
    {
        return $user->can('Access System Log', $systemLog);
    }

    public function restore($user, LogsTool $systemLog)
    {
        return $user->can('Access System Log', $systemLog);
    }

    public function forceDelete($user, LogsTool $systemLog)
    {
        return $user->can('Access System Log', $systemLog);
    }

}
