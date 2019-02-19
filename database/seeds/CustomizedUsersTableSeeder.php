<?php

use Illuminate\Database\Seeder;

class CustomizedUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        // \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$63.pZ1z.tiUdacyvPhzBteTBPsXpq2mdFqCK6yR4Z8svCsNvX2WzG',
                'remember_token' => 'QOl4DMCEmmd6UfzSnyzgnS8NzG8zpDUa6LVIeSccBQyQwdMYill4dFSQpVOz',
                'settings' => NULL,
                'created_at' => '2019-02-14 15:57:09',
                'updated_at' => '2019-02-14 15:57:09',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'test',
                'email' => 'test@test.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ttzVdKeyGzPnCmIRKxWHB.h2sbLis6IKzOdNF0nOLo.yX2FpEtI6m',
                'remember_token' => 'TXRKvEMF0wwUs1L4ooFwfCkEYSfkjnDrQO9RXG9F6RXoDkgmmxF8jB3VavN0',
                'settings' => '{"locale":"en"}',
                'created_at' => '2019-02-15 18:12:33',
                'updated_at' => '2019-02-15 18:12:33',
            ),
        ));
        
        
    }
}