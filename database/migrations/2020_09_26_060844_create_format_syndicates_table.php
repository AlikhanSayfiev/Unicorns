<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormatSyndicatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('format_syndicates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lang');
            $table->string('title');
            $table->longText('desc');
            $table->enum('status', ['published', 'trash']);
            $table->timestamps();

            $table->foreign("lang")
                ->references("id")
                ->on("languages")
                ->onUpdate("cascade")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('format_syndicates');
    }
}
