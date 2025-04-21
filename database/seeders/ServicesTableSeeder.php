<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'created_at' => '2021-10-30 13:43:40',
                'description' => 'd-icon-money',
                'heading' => 'No die & Plate Charges',
                'id' => 1,
                'image' => NULL,
                'updated_at' => '2021-10-30 13:59:05',
            ),
            1 => 
            array (
                'created_at' => '2021-10-30 13:44:19',
                'description' => 'd-icon-truck',
                'heading' => 'Free Shipping & Return',
                'id' => 2,
                'image' => NULL,
                'updated_at' => '2021-10-30 13:58:31',
            ),
            2 => 
            array (
                'created_at' => '2021-10-30 13:48:04',
                'description' => 'd-icon-gift',
                'heading' => 'Custom Sizes & Styles',
                'id' => 3,
                'image' => NULL,
                'updated_at' => '2021-10-30 13:58:19',
            ),
            3 => 
            array (
                'created_at' => '2021-10-30 13:49:25',
                'description' => 'd-icon-bag',
                'heading' => 'Free Graphic Designing',
                'id' => 4,
                'image' => NULL,
                'updated_at' => '2021-10-30 13:49:25',
            ),
            4 => 
            array (
                'created_at' => '2021-10-30 13:50:17',
                'description' => 'd-icon-earth',
                'heading' => 'Quick Turnaround Time',
                'id' => 5,
                'image' => NULL,
                'updated_at' => '2021-10-30 13:50:17',
            ),
        ));
        
        
    }
}