<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->enum('status', ['published', 'trash']);
            $table->timestamps();
        });

        \App\Models\Language::insert([
            [
                'code' => 'uz',
                'name' => 'Uzbek',
                'status' => 'published'
            ], [
                'code' => 'ru',
                'name' => 'Русский',
                'status' => 'published'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
