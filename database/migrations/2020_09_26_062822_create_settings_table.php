<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lang');
            $table->string('brand')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('headerimage')->nullable();
            $table->string('middleimage')->nullable();
            $table->string('garant')->nullable();
            $table->string('headerText')->nullable();
            $table->string('footerText')->nullable();
            $table->string('button1')->nullable();
            $table->string('url1')->nullable();
            $table->string('button2')->nullable();
            $table->string('url2')->nullable();
            $table->string('instagram')->nullable();
            $table->string('telegram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->timestamps();

            $table->foreign("lang")
                ->references("id")
                ->on("languages")
                ->onUpdate("cascade")
                ->onDelete("cascade");
        });

        \App\Models\Settings::insert([
            ['lang' => 1, 'brand' => 'Unicorns'],['lang' => 2, 'brand' => 'Unicorns']
        ]);

        
        Storage::makeDirectory('public/settings');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
