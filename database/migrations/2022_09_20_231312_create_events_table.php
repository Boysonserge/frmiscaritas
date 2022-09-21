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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('eventTitle')->nullable();
            $table->string('eventSlug')->nullable();
            $table->string('eventDescription')->nullable();

            $table->string('eventTitle_en')->nullable();
            $table->string('eventSlug_en')->nullable();
            $table->string('eventDescription_en')->nullable();

            $table->string('eventTitle_kiny')->nullable();
            $table->string('eventSlug_kiny')->nullable();
            $table->string('eventDescription_kiny')->nullable();

            $table->string('eventLocation')->nullable();
            $table->timestamp('startDate')->nullable();
            $table->timestamp('endDate')->nullable();
            $table->string('eventImage')->nullable();
            $table->text('otherPhotos')->nullable();
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
        Schema::dropIfExists('events');
    }
};
