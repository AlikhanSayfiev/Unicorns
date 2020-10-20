<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lang');
            $table->string('icon');
            $table->string('title');
            $table->longText('desc');
            $table->enum('status', ['published', 'trash']);
            $table->timestamps();


            $table->foreign("lang")
                ->references("id")
                ->on("languages")
                ->onUpdate("cascade")
                ->onDelete("cascade");

            Storage::makeDirectory('public/services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
