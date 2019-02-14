<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SexesTableSeeder::class);

        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \DB::table('data_types')->truncate();
        \DB::table('data_rows')->truncate();
        \DB::table('menus')->truncate();
        \DB::table('menu_items')->truncate();
        \DB::table('permissions')->truncate();
        \DB::table('roles')->truncate();
        \DB::table('permission_role')->truncate();
        \DB::table('settings')->truncate();
        \DB::table('translations')->truncate();
        \DB::table('users')->truncate();
        \DB::table('user_roles')->truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        $this->call(Customized1RolesTableSeeder::class);
        $this->call(Customized1UsersTableSeeder::class);
        $this->call(Customized1UserRolesTableSeeder::class);
        $this->call(Customized1DataTypesTableSeeder::class);
        $this->call(Customized1DataRowsTableSeeder::class);
        $this->call(Customized1MenusTableSeeder::class);
        $this->call(Customized1MenuItemsTableSeeder::class);
        $this->call(Customized1PermissionsTableSeeder::class);
        $this->call(Customized1PermissionRoleTableSeeder::class);
        $this->call(Customized1SettingsTableSeeder::class);
        $this->call(Customized1TranslationsTableSeeder::class);

    }
}
