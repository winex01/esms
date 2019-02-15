<?php

use Illuminate\Database\Seeder;

class CustomizedMenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2019-02-14 15:57:08',
                'updated_at' => '2019-02-14 15:57:08',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2019-02-14 15:57:08',
                'updated_at' => '2019-02-15 17:33:12',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2019-02-14 15:57:08',
                'updated_at' => '2019-02-15 17:33:12',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2019-02-14 15:57:08',
                'updated_at' => '2019-02-15 17:33:12',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 13,
                'created_at' => '2019-02-14 15:57:08',
                'updated_at' => '2019-02-15 17:33:12',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2019-02-14 15:57:08',
                'updated_at' => '2019-02-14 15:58:37',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2019-02-14 15:57:08',
                'updated_at' => '2019-02-14 15:58:37',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2019-02-14 15:57:08',
                'updated_at' => '2019-02-14 15:58:37',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2019-02-14 15:57:08',
                'updated_at' => '2019-02-14 15:58:37',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 14,
                'created_at' => '2019-02-14 15:57:08',
                'updated_at' => '2019-02-15 17:33:12',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Categories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 12,
                'created_at' => '2019-02-14 15:57:09',
                'updated_at' => '2019-02-15 17:33:12',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Posts',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2019-02-14 15:57:09',
                'updated_at' => '2019-02-15 17:33:12',
                'route' => 'voyager.posts.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Pages',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2019-02-14 15:57:09',
                'updated_at' => '2019-02-15 17:33:12',
                'route' => 'voyager.pages.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'created_at' => '2019-02-14 15:57:09',
                'updated_at' => '2019-02-14 15:58:37',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Students',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2019-02-14 15:57:58',
                'updated_at' => '2019-02-14 15:58:37',
                'route' => 'voyager.students.index',
                'parameters' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Rooms',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2019-02-15 07:03:51',
                'updated_at' => '2019-02-15 17:10:49',
                'route' => 'voyager.rooms.index',
                'parameters' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Faculties',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-group',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2019-02-15 11:02:30',
                'updated_at' => '2019-02-15 17:10:52',
                'route' => 'voyager.faculties.index',
                'parameters' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Subjects',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-book',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2019-02-15 17:10:41',
                'updated_at' => '2019-02-15 17:10:52',
                'route' => 'voyager.subjects.index',
                'parameters' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'menu_id' => 1,
                'title' => 'Semesters',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-milestone',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2019-02-15 17:31:35',
                'updated_at' => '2019-02-15 17:33:12',
                'route' => 'voyager.semesters.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}