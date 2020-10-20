<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lang');
            $table->string('title')->unique();
            $table->string('url');
            $table->string('image');
            $table->enum('status', ['published', 'trash']);
            $table->timestamps();


            $table->foreign("lang")
                ->references("id")
                ->on("languages")
                ->onUpdate("cascade")
                ->onDelete("cascade");

            Storage::makeDirectory('public/blogs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
