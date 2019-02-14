<?php

use Illuminate\Database\Seeder;

class SexesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sexes')->delete();
        
        \DB::table('sexes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => 'Male',
                'created_at' => '2019-02-14 11:02:36',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'description' => 'Female',
                'created_at' => '2019-02-14 11:02:36',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}