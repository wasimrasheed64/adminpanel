<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'created_at' => '2021-10-30 14:52:08',
                'description' => 'I am keeping my fingers on the pulse by   Riode every year! It gives me good sense of trend. My family
likes it, too.',
                'designation' => 'CEO',
                'id' => 1,
                'image' => 'images/blog/MM4gKCebOv42JfemNVK1H04LJe1fMiKDlIXmaDzr.jpg',
                'name' => 'Shannon',
                'updated_at' => '2021-10-30 14:52:08',
            ),
            1 => 
            array (
                'created_at' => '2021-10-30 14:52:44',
                'description' => 'I am keeping my fingers on the pulse by   Riode every year! It gives me good sense of trend. My family                                 likes it, too.',
                'designation' => 'Manager',
                'id' => 2,
                'image' => 'images/blog/j2ngZHoCGELsNAXcMeRQccfnjZ4hKK8u66ljXbnI.jpg',
                'name' => 'Robert',
                'updated_at' => '2021-10-30 14:52:44',
            ),
            2 => 
            array (
                'created_at' => '2021-10-30 14:53:16',
                'description' => 'I am keeping my fingers on the pulse by   Riode every year! It gives me good sense of trend. My family
likes it, too.',
                'designation' => 'CTO',
                'id' => 3,
                'image' => 'images/blog/md20WwbqRnH9bHFm6xMbz6EMJIORnYtBbEBhXvMF.jpg',
                'name' => 'Roy Hammers',
                'updated_at' => '2021-10-30 14:53:16',
            ),
        ));
        
        
    }
}