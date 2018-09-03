<?php
use Illuminate\Database\seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $data = [
            [
                'name'    => '财务员',
                'display_name'    => 'finance',
                'description'    => '进行订单数据相关操作',
            ],[
                'name'    => '订单员',
                'display_name'    => 'order',
                'description'    => '进行财务相关操作',
            ]
        ];

        $roles = DB::table('{{ $rolesTable }}')->insert($data);

        $data = [
            [
                'user_id'    => 11,
                'role_id'    => 1,
            ]
        ];

        $rolesUser = DB::table('{{ $roleUserTable }}')->insert($data);

        $data = [
            [
                'name'    => '/index',
                'display_name'    => '首页',
                'description'    => '进行订单数据相关操作',
                'parent_id' => 1,
                'level' => 1
            ],[
                'name'    => '/index/user/list',
                'display_name'    => '用户列表',
                'description'    => '进行财务相关操作',
                'parent_id' => 2,
                'level' => 3
            ]
        ];

        $permissions = DB::table('{{ $permissionsTable }}')->insert($data);

        $data = [
            [
                'permission_id'    => 31,
                'role_id'    => 1,
            ],
            [
                'permission_id'    => 32,
                'role_id'    => 1,
            ]

        ];

        $permission_role = DB::table('{{ $permissionRoleTable }}')->insert($data);
    }
}