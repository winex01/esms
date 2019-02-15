<?php

use Illuminate\Database\Seeder;

class SemestersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('semesters')->delete();
        
        \DB::table('semesters')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => '1st Semester',
                'created_at' => '2019-02-15 18:02:36',
                'updated_at' => '2019-02-15 18:02:36',
            ),
            1 => 
            array (
                'id' => 2,
                'description' => '2nd Semester',
                'created_at' => '2019-02-15 18:02:44',
                'updated_at' => '2019-02-15 18:02:44',
            ),
            2 => 
            array (
                'id' => 3,
                'description' => 'Summer',
                'created_at' => '2019-02-15 18:02:52',
                'updated_at' => '2019-02-15 18:02:52',
            ),
        ));
        
        
    }
}