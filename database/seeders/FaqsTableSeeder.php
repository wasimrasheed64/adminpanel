<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'answer' => 'hey how are you',
                'created_at' => '2022-01-05 06:15:28',
                'id' => 3,
                'question' => 'This is just for the testing purpose',
                'updated_at' => '2022-01-05 06:15:28',
            ),
            1 => 
            array (
                'answer' => 'lorum ipsum is the dummy text which used since 1968',
                'created_at' => '2022-01-05 06:15:28',
                'id' => 4,
                'question' => 'this is the second test question',
                'updated_at' => '2022-01-05 06:15:28',
            ),
        ));
        
        
    }
}