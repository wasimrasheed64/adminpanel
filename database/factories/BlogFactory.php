<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;
    protected  $count = 0;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->count++;
        return [
            'user_id' => 1,
            'seo_title' => 'Dummy Blog Post '.$this->count,
            'slug' => 'dummy-blog-post-'.$this->count,
            'title' => 'Dummy Blog Post     '.$this->count,
            'date' => $this->faker->date,
            'short_description' => $this->faker->text(200),
            'description' => $this->faker->text(4000),
            'image' => "images/blog/FMeT0LQzzLEkkgAkYqHF1T4I7a3pbozehEA1HvQz.jpg",
            'is_active' => $this->faker->boolean,
        ];
    }
}
