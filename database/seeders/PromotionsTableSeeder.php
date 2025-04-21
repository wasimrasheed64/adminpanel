<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PromotionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('promotions')->delete();
        
        \DB::table('promotions')->insert(array (
            0 => 
            array (
                'id' => 3,
                'image' => 'images/promotion/7G8R5uRd2RMM9e5G3YCHfB2qNjm8NZNipecGRCxt.jpg',
                'link' => '#',
                'page' => 1,
                'class' => '12',
                'created_at' => '2022-01-06 04:38:52',
                'updated_at' => '2022-01-06 04:38:52',
            ),
            1 => 
            array (
                'id' => 4,
                'image' => 'images/promotion/qtxWESgRjQCBHscA2bDuJGc2YLyS8Oy4gsCvvVnW.jpg',
                'link' => '#',
                'page' => 1,
                'class' => '4',
                'created_at' => '2022-01-06 04:39:13',
                'updated_at' => '2022-01-06 04:45:20',
            ),
            2 => 
            array (
                'id' => 5,
                'image' => 'images/promotion/fjGXlzljrAg79MeZ6EPQ8NWNyscwes29LqIzihjS.jpg',
                'link' => '#',
                'page' => 1,
                'class' => '4',
                'created_at' => '2022-01-06 04:39:30',
                'updated_at' => '2022-01-06 04:45:29',
            ),
            3 => 
            array (
                'id' => 6,
                'image' => 'images/promotion/3TnRjFsZe8OgZ9kpsrVuSdWEL63N8H64x31Fhl4m.jpg',
                'link' => '#',
                'page' => 1,
                'class' => '4',
                'created_at' => '2022-01-06 04:39:54',
                'updated_at' => '2022-01-06 04:45:38',
            ),
            4 => 
            array (
                'id' => 7,
                'image' => 'images/promotion/KGpubKEXhlmITEBAHVTpG4Zxz4JS1UMFZEBiVjuK.jpg',
                'link' => '#',
                'page' => 1,
                'class' => '12',
                'created_at' => '2022-01-06 04:40:41',
                'updated_at' => '2022-01-06 04:40:41',
            ),
        ));
        
        
    }
}