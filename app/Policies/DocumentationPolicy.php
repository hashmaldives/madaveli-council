<?php

namespace App\Policies;

use App\Models\User;
use Dniccum\NovaDocumentation\NovaDocumentation;
use Illuminate\Auth\Access\HandlesAuthorization;

class DocumentationPolicy
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
        return Gate::any(['Access Documentation'], $user);
    }

    public function view($user, NovaDocumentation $documentation)
    {
        return Gate::any(['Access Documentation'], $user, $documentation);
    }

    public function create($user)
    {
        return $user->can('Access Documentation');
    }

    public function update($user, NovaDocumentation $documentation)
    {
        return $user->can('Access Documentation', $documentation);
    }

    public function delete($user, NovaDocumentation $documentation)
    {
        return $user->can('Access Documentation', $documentation);
    }

    public function restore($user, NovaDocumentation $documentation)
    {
        return $user->can('Access Documentation', $documentation);
    }

    public function forceDelete($user, NovaDocumentation $documentation)
    {
        return $user->can('Access Documentation', $documentation);
    }

}
