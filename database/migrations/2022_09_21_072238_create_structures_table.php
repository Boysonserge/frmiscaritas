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
        Schema::create('structures', function (Blueprint $table) {
            $table->id();
            $table->string('structureTitle')->nullable();
            $table->mediumText('structureDescription')->nullable();

            $table->string('structureTitle_en')->nullable();
            $table->mediumText('structureDescription_en')->nullable();

            $table->string('structureTitle_kiny')->nullable();
            $table->mediumText('structureDescription_kiny')->nullable();

            $table->text('structureImage')->nullable();
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
        Schema::dropIfExists('structures');
    }
};
