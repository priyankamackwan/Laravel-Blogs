<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContentTagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('content_tags')->delete();
        
        \DB::table('content_tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'new',
                'slug' => 'new',
                'created_at' => '2022-10-18 09:14:52',
                'updated_at' => '2022-10-18 09:14:52',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'branch',
                'slug' => 'brand',
                'created_at' => '2022-10-18 09:14:58',
                'updated_at' => '2022-10-18 09:14:58',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'design',
                'slug' => 'design',
                'created_at' => '2022-10-31 13:30:51',
                'updated_at' => '2022-10-31 13:30:51',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'style',
                'slug' => 'style',
                'created_at' => '2022-10-31 13:31:00',
                'updated_at' => '2022-10-31 13:31:00',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'inspiration',
                'slug' => 'inspiration',
                'created_at' => '2022-10-31 13:31:07',
                'updated_at' => '2022-10-31 13:31:07',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'foodie',
                'slug' => 'foodie',
                'created_at' => '2022-10-31 13:31:14',
                'updated_at' => '2022-10-31 13:31:14',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'photography',
                'slug' => 'photography',
                'created_at' => '2022-10-31 13:31:24',
                'updated_at' => '2022-10-31 13:31:24',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'delicious',
                'slug' => 'delicious',
                'created_at' => '2022-10-31 13:31:43',
                'updated_at' => '2022-10-31 13:31:43',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'entrepreneur',
                'slug' => 'entrepreneur',
                'created_at' => '2022-10-31 13:31:50',
                'updated_at' => '2022-10-31 13:31:50',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'interior',
                'slug' => 'interior',
                'created_at' => '2022-10-31 13:31:57',
                'updated_at' => '2022-10-31 13:31:57',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}