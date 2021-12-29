<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaravelLivewire2VideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laravel_livewire2_videos', function (Blueprint $table) {
            $table->id();
            $table->foreignId("element_id")->constrained("elements")->onDelete("cascade");
            $table->longText('content')->nullable();
            $table->string("vertical_align")->default("top-10");
            $table->string("content_column")->default("lg:w-1/2");
            $table->string("overlay_color")->default("rgba(0, 0, 0, 0.2)");
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
        Schema::dropIfExists('laravel_livewire2_videos');
    }
}
