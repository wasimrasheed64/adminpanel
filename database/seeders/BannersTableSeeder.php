<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners')->delete();
        
        \DB::table('banners')->insert(array (
            0 => 
            array (
                'button_text' => 'link',
                'created_at' => '2021-10-30 13:05:35',
                'description' => 'this is just for the testing purpose',
                'heading' => 'Wallaper',
                'id' => 1,
                'image' => 'images/banner/EQ3SsMFFYGUFJ2CP7IiCL5PSsMN746qbRia2PShA.jpg',
                'link' => 'link',
                'position' => 'text-right',
                'updated_at' => '2022-01-05 06:59:44',
            ),
            1 => 
            array (
                'button_text' => '#',
                'created_at' => '2021-10-30 13:18:00',
                'description' => 'this is just for the testing purpose',
                'heading' => '#`',
                'id' => 2,
                'image' => 'images/banner/ttvxfqriG418lZF4XVhdQBMeW25YRugleZaYJGre.jpg',
                'link' => '#',
                'position' => 'text-left',
                'updated_at' => '2022-01-05 06:59:53',
            ),
        ));
        
        
    }
}