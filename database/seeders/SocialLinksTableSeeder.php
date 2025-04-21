<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SocialLinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('social_links')->delete();
        
        \DB::table('social_links')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => NULL,
                'icon' => 'fab fa-facebook-f',
                'link' => '#',
                'created_at' => '2021-10-31 11:42:35',
                'updated_at' => '2021-10-31 11:42:35',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => NULL,
                'icon' => 'fab fa-twitter',
                'link' => '#',
                'created_at' => '2021-10-31 11:42:55',
                'updated_at' => '2021-10-31 11:42:55',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => NULL,
                'icon' => 'fab fa-linkedin-in',
                'link' => '#',
                'created_at' => '2021-10-31 11:43:09',
                'updated_at' => '2021-10-31 11:43:09',
            ),
        ));
        
        
    }
}