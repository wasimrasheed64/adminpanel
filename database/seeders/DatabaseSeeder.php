<?php

namespace Database\Seeders;

use Database\Factories\BlogFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MainCategoriesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SiteSettingsTableSeeder::class);
        $this->call(HomePagesTableSeeder::class);
        $this->call(CustomPagesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(SocialLinksTableSeeder::class);
        $this->call(CustomScriptsTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(FooterLinksTableSeeder::class);
        $this->call(PromotionsTableSeeder::class);
    }
}
