<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContentCategoryContentPageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('content_category_content_page')->delete();
        
        \DB::table('content_category_content_page')->insert(array (
            0 => 
            array (
                'content_page_id' => 1,
                'content_category_id' => 1,
            ),
            1 => 
            array (
                'content_page_id' => 2,
                'content_category_id' => 2,
            ),
            2 => 
            array (
                'content_page_id' => 3,
                'content_category_id' => 3,
            ),
        ));
        
        
    }
}