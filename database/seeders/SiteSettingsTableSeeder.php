<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiteSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('site_settings')->delete();
        
        \DB::table('site_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'logo' => 'images/sitesetting/MvhhCLoy9rAsU0S43dXyJRIJVfOOzsQ2uzxb2BDU.png',
                'footer_logo' => 'images/sitesetting/mVwFVHRjokPi15UyiAZHNgTSOyCo6DpPBTzBujtC.png',
                'favicon' => 'images/sitesetting/r5kj66ZsZVrdaMtQTGLn1PVt40fIDoX6dBx8tmzU.png',
                'email' => 'sales@onlinecustomboxes.com',
                'phone' => '+205-588-6380',
                'address' => '8325 NW 186 Street unit 301 Hialeah Florida 33015',
                'working_hours' => 'Mon - Sun / 9:00 AM - 8:00 PM',
                'footer_description' => NULL,
                'footer_image' => NULL,
                'created_at' => '2021-10-27 10:35:10',
                'updated_at' => '2022-01-06 03:13:32',
            ),
        ));
        
        
    }
}