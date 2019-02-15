<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('data_types')->truncate();
        DB::table('data_rows')->truncate();
        DB::table('menus')->truncate();
        DB::table('menu_items')->truncate();
        DB::table('permissions')->truncate();
        DB::table('roles')->truncate();
        DB::table('permission_role')->truncate();
        DB::table('settings')->truncate();
        DB::table('translations')->truncate();
        DB::table('users')->truncate();
        DB::table('user_roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        //php artisan iseed data_types,data_rows,menus,menu_items,permissions,roles,permission_role,settings,translations,users,user_roles --classnameprefix=Customized --force
        $this->call(CustomizedRolesTableSeeder::class);
        $this->call(CustomizedUsersTableSeeder::class);
        $this->call(CustomizedUserRolesTableSeeder::class);
        $this->call(CustomizedDataTypesTableSeeder::class);
        $this->call(CustomizedDataRowsTableSeeder::class);
        $this->call(CustomizedMenusTableSeeder::class);
        $this->call(CustomizedMenuItemsTableSeeder::class);
        $this->call(CustomizedPermissionsTableSeeder::class);
        $this->call(CustomizedPermissionRoleTableSeeder::class);
        $this->call(CustomizedSettingsTableSeeder::class);
        $this->call(CustomizedTranslationsTableSeeder::class);
    }
}
