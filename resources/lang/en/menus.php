<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => '权限管理',

            'permissions' => [
                'all' => '所有权限',
                'create' => '创建权限',
                'edit' => '编辑权限',
                'groups' => [
                    'all' => '所有分组',
                    'create' => '创建分组',
                    'edit' => '编辑分组',
                    'main' => '角色分组',
                ],
                'main' => '权限',
                'management' => '权限管理',
            ],

            'roles' => [
                'all' => '所有角色',
                'create' => '创建角色',
                'edit' => '编辑角色',
                'management' => '角色管理',
                'main' => '用户角色',
            ],

            'users' => [
                'all' => '所有用户',
                'change-password' => '更改密码',
                'create' => '创建用户',
                'deactivated' => '未激活用户',
                'deleted' => '删除用户',
                'edit' => '编辑用户',
                'main' => '后台管理用户',
            ],
        ],

        'log-viewer' => [
            'main' => '查看日志',
            'dashboard' => '控制面板',
            'logs' => '日志记录',
        ],

        'sidebar' => [
            'dashboard' => '控制面板',
            'general' => 'General',
        ],
    ],

    'language-picker' => [
        'language' => '语言选择',
        /**
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'en' => 'English',
            'fr' => 'French',
            'it' => 'Italian',
            'sv' => 'Swedish',
        ],
    ],
];
