<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();

            $table->string('logo');
            $table->string('footer_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->mediumText('working_hours')->nullable();
            $table->string('footer_description')->nullable();
            $table->string('footer_image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_settings');
    }
}
