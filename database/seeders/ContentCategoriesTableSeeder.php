<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContentCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('content_categories')->delete();
        
        \DB::table('content_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Fashon',
                'slug' => 'fashon',
                'created_at' => '2022-10-18 09:14:47',
                'updated_at' => '2022-10-18 09:14:47',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Food Articles',
                'slug' => 'food',
                'created_at' => '2022-10-31 13:28:30',
                'updated_at' => '2022-10-31 13:28:39',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Tourism Travel',
                'slug' => 'tourism',
                'created_at' => '2022-10-31 13:29:51',
                'updated_at' => '2022-10-31 13:29:51',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}