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
        

        \DB::table('users')->delete();
        
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
                'remember_token' => 'viQmSgaE5traA1CY65lQIMLEYFqYMNG4d2p05K4CUTPJEWg5bUausMQILgc6',
                'settings' => NULL,
                'created_at' => '2019-02-14 15:57:09',
                'updated_at' => '2019-02-14 15:57:09',
            ),
        ));
        
        
    }
}