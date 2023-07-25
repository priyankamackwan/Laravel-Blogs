<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContentPageContentTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('content_page_content_tag')->delete();
        
        \DB::table('content_page_content_tag')->insert(array (
            0 => 
            array (
                'content_page_id' => 1,
                'content_tag_id' => 1,
            ),
            1 => 
            array (
                'content_page_id' => 1,
                'content_tag_id' => 2,
            ),
            2 => 
            array (
                'content_page_id' => 2,
                'content_tag_id' => 6,
            ),
            3 => 
            array (
                'content_page_id' => 2,
                'content_tag_id' => 8,
            ),
            4 => 
            array (
                'content_page_id' => 3,
                'content_tag_id' => 5,
            ),
            5 => 
            array (
                'content_page_id' => 3,
                'content_tag_id' => 7,
            ),
            6 => 
            array (
                'content_page_id' => 3,
                'content_tag_id' => 10,
            ),
        ));
        
        
    }
}