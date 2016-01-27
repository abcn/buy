<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => '全部',
        'actions' => '操作',
        'buttons' => [
            'save' => '保存',
            'update' => '更新',
        ],
        'hide' => '隐藏',
        'none' => '空',
        'show' => '显示',
        'toggle_navigation' => 'Toggle Navigation',
    ],

    'backend' => [
        'article' => [
            'management'    => '资讯管理',
            'create'        => '添加资讯',
            'table' => [

            ],
        ],
        'access' => [
            'permissions' => [
                'create' => '创建权限',
                'dependencies' => 'Dependencies',
                'edit' => '编辑权限',

                'groups' => [
                    'create' => '创建分组',
                    'edit' => '编辑分组',

                    'table' => [
                        'name' => '名称',
                    ],
                ],

                'grouped_permissions' => '权限分组',
                'label' => '权限',
                'management' => 'Permission Management',
                'no_groups' => 'There are no permission groups.',
                'no_permissions' => 'No permission to choose from.',
                'no_roles' => 'No Roles to set',
                'no_ungrouped' => 'There are no ungrouped permissions.',

                'table' => [
                    'dependencies' => 'Dependencies',
                    'group' => 'Group',
                    'group-sort' => 'Group Sort',
                    'name' => 'Name',
                    'permission' => 'Permission',
                    'roles' => 'Roles',
                    'system' => 'System',
                    'total' => 'permission total|permissions total',
                    'users' => 'Users',
                ],

                'tabs' => [
                    'general' => 'General',
                    'groups' => 'All Groups',
                    'dependencies' => 'Dependencies',
                    'permissions' => 'All Permissions',
                ],

                'ungrouped_permissions' => 'Ungrouped Permissions',
            ],

            'roles' => [
                'create' => '创建角色',
                'edit' => '便捷角色',
                'management' => '角色管理',

                'table' => [
                    'number_of_users' => '用户数量',
                    'permissions' => '权限',
                    'role' => '角色',
                    'sort' => '排序',
                    'total' => 'role total|roles total',
                ],
            ],

            'users' => [
                'active' => '激活用户',
                'all_permissions' => '所有权限',
                'change_password' => '更改密码',
                'change_password_for' => '更改 :user 的密码',
                'create' => '创建用户',
                'deactivated' => '禁用用户',
                'deleted' => '删除用户',
                'dependencies' => 'Dependencies',
                'edit' => '编辑用户',
                'management' => '用户管理',
                'no_other_permissions' => '没有其他的权限',
                'no_permissions' => '没有权限',
                'no_roles' => '未设置角色.',
                'permissions' => 'Permissions',
                'permission_check' => 'Checking a permission will also check its dependencies, if any.',

                'table' => [
                    'confirmed' => '确认',
                    'created' => '创建',
                    'email' => '邮件',
                    'id' => 'ID',
                    'last_updated' => '最后更新时间',
                    'name' => '名称',
                    'no_deactivated' => '没有禁用的用户',
                    'no_deleted' => '没有删除的用户',
                    'other_permissions' => '其他权限',
                    'roles' => '角色',
                    'total' => 'user total|users total',
                ],
            ],
        ],
    ],

    'frontend' => [

        'auth' => [
            'login_box_title' => '登录',
            'login_button' => '登录',
            'login_with' => '登录 :social_media',
            'register_box_title' => '注册',
            'register_button' => '注册',
            'remember_me' => '记住我',
        ],

        'passwords' => [
            'forgot_password' => '忘记密码?',
            'reset_password_box_title' => '重置密码',
            'reset_password_button' => '充值面膜d',
            'send_password_reset_link_button' => '发送重置密码连接',
        ],

        'macros' => [
            'country' => [
                'alpha' => 'Country Alpha Codes',
                'alpha2' => 'Country Alpha 2 Codes',
                'alpha3' => 'Country Alpha 3 Codes',
                'numeric' => 'Country Numeric Codes',
            ],

            'macro_examples' => 'Macro Examples',

            'state' => [
                'mexico' => 'Mexico State List',
                'us' => [
                    'us' => 'US States',
                    'outlying' => 'US Outlying Territories',
                    'armed' => 'US Armed Forces',
                ],
            ],

            'territories' => [
                'canada' => 'Canada Province & Territories List',
            ],

            'timezone' => '时区',
        ],

        'user' => [
            'passwords' => [
                'change' => '更改密码',
            ],

            'profile' => [
                'avatar' => '头像',
                'created_at' => '创建时间',
                'edit_information' => '编辑信息',
                'email' => '邮箱',
                'last_updated' => '最后更新时间',
                'name' => '名称',
                'update_information' => '更新信息',
            ],
        ],


    ],
];
