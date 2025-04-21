<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FooterLinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('footer_links')->delete();
        
        \DB::table('footer_links')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Cosmetic Boxes',
                'link' => '#',
                'created_at' => '2022-01-06 02:52:24',
                'updated_at' => '2022-01-06 02:52:24',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Die Cut Boxes',
                'link' => '#',
                'created_at' => '2022-01-06 02:52:35',
                'updated_at' => '2022-01-06 02:52:35',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Soap Boxes',
                'link' => '#',
                'created_at' => '2022-01-06 02:52:47',
                'updated_at' => '2022-01-06 02:52:47',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Retail Boxes',
                'link' => '#',
                'created_at' => '2022-01-06 02:53:26',
                'updated_at' => '2022-01-06 02:53:26',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Food Boxes',
                'link' => '#',
                'created_at' => '2022-01-06 02:53:45',
                'updated_at' => '2022-01-06 02:53:45',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Cake Boxes',
                'link' => '#',
                'created_at' => '2022-01-06 02:53:53',
                'updated_at' => '2022-01-06 02:53:53',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Display Boxes',
                'link' => '#',
                'created_at' => '2022-01-06 02:54:09',
                'updated_at' => '2022-01-06 02:54:09',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Perfume Boxes',
                'link' => '#',
                'created_at' => '2022-01-06 02:54:46',
                'updated_at' => '2022-01-06 02:54:46',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Ceral Boxes',
                'link' => '#',
                'created_at' => '2022-01-06 02:54:58',
                'updated_at' => '2022-01-06 02:54:58',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Bakery Boxes',
                'link' => '#',
                'created_at' => '2022-01-06 02:55:13',
                'updated_at' => '2022-01-06 02:55:13',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Food Boxes',
                'link' => '#',
                'created_at' => '2022-01-06 02:55:42',
                'updated_at' => '2022-01-06 02:55:42',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Sleeve Boxes',
                'link' => '#',
                'created_at' => '2022-01-06 02:56:11',
                'updated_at' => '2022-01-06 02:56:11',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Karft Boxes',
                'link' => '#',
                'created_at' => '2022-01-06 02:56:36',
                'updated_at' => '2022-01-06 02:56:36',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Mailer Boxes',
                'link' => '#',
                'created_at' => '2022-01-06 02:56:57',
                'updated_at' => '2022-01-06 02:56:57',
            ),
        ));
        
        
    }
}