<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturedProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('position');
            $table->string('logo_file', 80);
            $table->string('ilustration_file', 80);
            $table->unsignedTinyInteger('filter_invert');
            $table->unsignedTinyInteger('filter_sepia');
            $table->unsignedSmallInteger('filter_saturate');
            $table->unsignedSmallInteger('filter_hue_rotate');
            $table->unsignedTinyInteger('filter_brightness');
            $table->unsignedTinyInteger('filter_contrast');
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
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
        Schema::dropIfExists('featured_projects');
    }
}
