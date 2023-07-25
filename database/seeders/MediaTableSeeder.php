<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('media')->delete();
        
        \DB::table('media')->insert(array (
            0 => 
            array (
                'id' => 1,
                'model_type' => 'App\\Models\\ContentPage',
                'model_id' => 1,
                'uuid' => '38913e48-9b04-4cad-aff3-981486d7a10d',
                'collection_name' => 'featured_image',
                'name' => '634e6ebf12001_410102-yoga',
                'file_name' => '634e6ebf12001_410102-yoga.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 415085,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb": true, "preview": true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2022-10-18 09:15:44',
                'updated_at' => '2022-10-18 09:15:45',
            ),
            1 => 
            array (
                'id' => 2,
                'model_type' => 'App\\Models\\ContentPage',
                'model_id' => 2,
                'uuid' => 'e477350f-b2e6-4547-baee-2e232f77b92a',
                'collection_name' => 'featured_image',
                'name' => '635fceb9344c4_634e6ebf12001_410102-yoga-preview',
                'file_name' => '635fceb9344c4_634e6ebf12001_410102-yoga-preview.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 7394,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb": true, "preview": true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2022-10-31 13:33:47',
                'updated_at' => '2022-10-31 13:33:49',
            ),
            2 => 
            array (
                'id' => 3,
                'model_type' => 'App\\Models\\ContentPage',
                'model_id' => 3,
                'uuid' => 'fee30efe-e299-4815-982d-911978caa4c5',
                'collection_name' => 'featured_image',
                'name' => '635fcf34b47cd_634e6ebf12001_410102-yoga-preview',
                'file_name' => '635fcf34b47cd_634e6ebf12001_410102-yoga-preview.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 7394,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"thumb": true, "preview": true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2022-10-31 13:35:50',
                'updated_at' => '2022-10-31 13:35:50',
            ),
        ));
        
        
    }
}