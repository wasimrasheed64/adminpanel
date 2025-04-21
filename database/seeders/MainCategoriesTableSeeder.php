<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MainCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('main_categories')->delete();
        
        \DB::table('main_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Box By Industry',
                'image' => 'images/maincategory/9uXs8q8b8ko4bI2cX0J8QnpxKjGg19wGrHWXQJZE.png',
                'is_active' => 1,
                'created_at' => '2021-10-21 02:06:15',
                'updated_at' => '2022-01-05 18:07:59',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Box By Style',
                'image' => 'images/maincategory/qwGfNojYmgxK0QXxSPSmH9ioozMHY1uuV0Ks6T8l.png',
                'is_active' => 1,
                'created_at' => '2021-10-21 02:10:15',
                'updated_at' => '2022-01-05 18:08:08',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Others',
                'image' => 'images/maincategory/w4TL0EF2VFf0gCTUdHMGJ8XMqiPftHMlfUxLwdiN.png',
                'is_active' => 1,
                'created_at' => '2022-01-05 18:08:47',
                'updated_at' => '2022-01-05 18:08:47',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}