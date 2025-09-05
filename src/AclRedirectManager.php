<?php

namespace Newnet\Acl;

use Illuminate\Support\Facades\Route;

class AclRedirectManager
{
    public static function afterLogin()
    {
        if (Route::has('admin.dashboard.index')) {
            return route('admin.dashboard.index');
        }

        return config('core.admin_prefix');
    }

    public static function afterLogout()
    {
        return route('admin.login');
    }

    public static function ifAuthenticated()
    {
        if (Route::has('admin.dashboard.index')) {
            return route('admin.dashboard.index');
        }

        return config('core.admin_prefix');
    }
}
