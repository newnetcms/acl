<?php

namespace Newnet\Acl;

use Illuminate\Support\Facades\Route;

class AclRedirectManager
{
    public function afterLogin()
    {
        if (Route::has('admin.dashboard.index')) {
            return route('admin.dashboard.index');
        }

        return config('core.admin_prefix');
    }

    public function afterLogout()
    {
        return route('admin.login');
    }

    public function ifAuthenticated()
    {
        if (Route::has('admin.dashboard.index')) {
            return route('admin.dashboard.index');
        }

        return config('core.admin_prefix');
    }
}
