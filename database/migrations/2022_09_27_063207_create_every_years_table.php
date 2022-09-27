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
        Schema::create('every_years', function (Blueprint $table) {
            $table->id();
            $table->string('serviceOffered')->default('yego');
            $table->string('decision')->nullable()->comment('Gukomeza gufashwa, gukurwa muri programu, yitabye Imana,...');
            $table->integer('year')->nullable();
            $table->foreignId('children_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('every_years');
    }
};
