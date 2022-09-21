<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function (Blueprint $table) {
            $table->id();
            $table->string('wordTitle')->nullable();
            $table->string('wordSlug')->nullable();
            $table->text('wordDescription')->nullable();

            $table->string('wordTitle_en')->nullable();
            $table->string('wordSlug_en')->nullable();
            $table->text('wordDescription_en')->nullable();

            $table->string('wordTitle_kiny')->nullable();
            $table->string('wordSlug_kiny')->nullable();
            $table->text('wordDescription_kiny')->nullable();

            $table->string('wordImage')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('views')->default(0);
            $table->integer('wordYear')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('words');
    }
};
