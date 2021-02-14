<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('ilustration_file', 80);
            $table->string('logo_file', 80);
            $table->string('title', 40);
            $table->text('description');
            $table->text('sub_description');
            $table->text('scope');
            $table->text('technologies');
            $table->text('deliverables');
            $table->string('bg_file', 80);
            $table->string('headline', 100);
            $table->string('sub_headline', 100);
            $table->string('featured_ilustration_file', 80);
            $table->unsignedTinyInteger('filter_invert');
            $table->unsignedTinyInteger('filter_sepia');
            $table->unsignedSmallInteger('filter_saturate');
            $table->unsignedSmallInteger('filter_hue_rotate');
            $table->unsignedTinyInteger('filter_brightness');
            $table->unsignedTinyInteger('filter_contrast');
            $table->unsignedBigInteger('project_type_id');
            $table->foreign('project_type_id')->references('id')->on('project_types')->onDelete('cascade');
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
        Schema::dropIfExists('projects');
    }
}
