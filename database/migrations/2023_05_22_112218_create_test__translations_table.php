<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('test_translations', function (Blueprint $table) {
            $table->id();
            $table->integer('test_id')->unsigned();
            $table->string('locale')->index(); //locale is the column that will hold the language locale ex: en, ar, fr
            $table->string('title')->nullable();
            $table->text('content')->nullable();

            $table->unique(['test_id', 'locale']); //for translate arabic test for one time as example
            $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test__translations');
    }
};
