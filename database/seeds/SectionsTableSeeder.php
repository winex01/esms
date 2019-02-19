<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sections')->delete();
        
        \DB::table('sections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => '1',
                'created_at' => '2019-02-19 06:58:41',
                'updated_at' => '2019-02-19 06:58:41',
            ),
            1 => 
            array (
                'id' => 2,
                'description' => '2',
                'created_at' => '2019-02-19 06:58:46',
                'updated_at' => '2019-02-19 06:58:46',
            ),
            2 => 
            array (
                'id' => 3,
                'description' => '3',
                'created_at' => '2019-02-19 06:58:54',
                'updated_at' => '2019-02-19 06:58:54',
            ),
            3 => 
            array (
                'id' => 4,
                'description' => '4',
                'created_at' => '2019-02-19 06:59:01',
                'updated_at' => '2019-02-19 06:59:01',
            ),
            4 => 
            array (
                'id' => 5,
                'description' => 'A',
                'created_at' => '2019-02-19 06:59:06',
                'updated_at' => '2019-02-19 06:59:06',
            ),
            5 => 
            array (
                'id' => 6,
                'description' => 'B',
                'created_at' => '2019-02-19 06:59:11',
                'updated_at' => '2019-02-19 06:59:11',
            ),
            6 => 
            array (
                'id' => 7,
                'description' => 'C',
                'created_at' => '2019-02-19 06:59:15',
                'updated_at' => '2019-02-19 06:59:15',
            ),
            7 => 
            array (
                'id' => 8,
                'description' => 'D',
                'created_at' => '2019-02-19 06:59:20',
                'updated_at' => '2019-02-19 06:59:20',
            ),
        ));
        
        
    }
}