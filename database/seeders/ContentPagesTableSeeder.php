<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContentPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('content_pages')->delete();

        \DB::table('content_pages')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'Zara',
                'page_text' => '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>',
                'excerpt' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled',
                'slug' => 'zara',
                'created_at' => '2022-10-18 09:15:44',
                'updated_at' => '2022-10-31 13:32:33',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'Cookie',
                'page_text' => '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>',
                'excerpt' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled',
                'slug' => 'cookie-and-kate',
                'created_at' => '2022-10-31 13:33:47',
                'updated_at' => '2022-10-31 13:33:47',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'title' => 'TheTravel',
                'page_text' => '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>',
                'excerpt' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled',
                'slug' => 'the-travel-episodes',
                'created_at' => '2022-10-31 13:35:50',
                'updated_at' => '2022-10-31 13:35:50',
                'deleted_at' => NULL,
            ),
        ));


    }
}
