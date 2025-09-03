<?php

use Newnet\Acl\AclRedirectManager;

return [
    /*
    |--------------------------------------------------------------------------
    | ACL Config
    |--------------------------------------------------------------------------
    */
    'auth' => [
        'guards' => [
            'admin' => [
                'driver'   => 'session',
                'provider' => 'admins',
            ],
        ],

        'providers' => [
            'admins' => [
                'driver' => 'eloquent',
                'model'  => \Newnet\Acl\Models\Admin::class,
            ],
        ],

        'passwords' => [
            'admins' => [
                'provider' => 'admins',
                'table'    => 'admin_password_resets',
                'expire'   => 60,
                'throttle' => 60,
            ],
        ],
    ],

    'default_avatar' => '/vendor/newnet-admin/img/default-avatar.png',

    'redirect_after_login' => [AclRedirectManager::class, 'afterLogin'],

    'redirect_after_logout' => [AclRedirectManager::class, 'afterLogout'],

    'redirect_if_authenticated' => [AclRedirectManager::class, 'ifAuthenticated'],
];
