<?php

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create(
            [
                'name'     => '管理面板',
                'describe' => '管理面板',
                'icon'     => 'fa-tachometer',
                'slug'     => 'admin.index',
            ]
        );

        Menu::create(
            [
                'name'     => '跳转记录',
                'describe' => '跳转记录',
                'icon'     => 'fa-paper-plane',
                'slug'     => 'admin.targets.index',
            ]
        );

        $cog = Menu::create(
            [
                'name'     => '站点设置',
                'describe' => '站点设置',
                'icon'     => 'fa-cogs',
                'slug'     => 'javascript:;',
            ]
        );

        $body = Menu::create(
            [
                'name'     => '内容设置',
                'describe' => '内容设置',
                'icon'     => 'fa-cube',
                'slug'     => 'javascript:;',
            ]
        );

        $menus = [
            [
                'name'     => '用户管理',
                'describe' => '用户管理',
                'icon'     => 'fa-user-o',
                'slug'     => 'admin.users.index',
                'top_id'   => $cog->id,
            ],
            [
                'name'     => '权限管理',
                'describe' => '权限管理',
                'icon'     => 'fa-dot-circle-o',
                'slug'     => 'admin.permissions.index',
                'top_id'   => $cog->id,
            ],
            [
                'name'     => '角色管理',
                'describe' => '角色管理',
                'icon'     => 'fa-user-secret',
                'slug'     => 'admin.roles.index',
                'top_id'   => $cog->id,
            ],
            [
                'name'     => '菜单管理',
                'describe' => '菜单管理',
                'icon'     => 'fa-bars',
                'slug'     => 'admin.menus.index',
                'top_id'   => $cog->id,
            ],
            [
                'name'     => '友情链接',
                'describe' => '友情链接',
                'icon'     => 'fa-handshake-o',
                'slug'     => 'admin.friendships.index',
                'top_id'   => $cog->id,
            ],
            [
                'name'     => '分类管理',
                'describe' => '分类管理',
                'icon'     => 'fa-columns',
                'slug'     => 'admin.categorys.index',
                'top_id'   => $body->id,
            ],
            [
                'name'     => '链接管理',
                'describe' => '链接管理',
                'icon'     => 'fa-link',
                'slug'     => 'admin.triggers.index',
                'top_id'   => $body->id,
            ],
            [
                'name'     => '建议反馈',
                'describe' => '建议反馈',
                'icon'     => 'fa-inbox',
                'slug'     => 'admin.proposals.index',
                'top_id'   => $body->id,
            ],
            [
                'name'     => '站点推荐',
                'describe' => '站点推荐',
                'icon'     => 'fa-magic',
                'slug'     => 'admin.nominates.index',
                'top_id'   => $body->id,
            ],
            [
                'name'     => '标签管理',
                'describe' => '标签管理',
                'icon'     => 'fa-tag',
                'slug'     => 'admin.tags.index',
                'top_id'   => $body->id,
            ],
        ];

        foreach ($menus as $index => $menu) {
            Menu::create($menu);
        }
    }
}
