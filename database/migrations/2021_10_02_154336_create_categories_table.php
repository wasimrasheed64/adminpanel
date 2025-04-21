<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('main_category_id');

            $table->string('seo_title');
            $table->string('seo_description');
            $table->string('seo_keyword')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->mediumText('short_description');
            $table->text('description');
            $table->string('banner_image');
            $table->string('category_image')->nullable();

            $table->integer('menu_position')->nullable();
            $table->boolean('is_active')->default(1);
            $table->boolean('in_menu')->default(1);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
