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
        Schema::create('causes', function (Blueprint $table) {
            $table->id();
            $table->string('causeTitle')->nullable();
            $table->string('causeSlug')->nullable();
            $table->integer('raisedAmount')->nullable();
            $table->integer('beneficiaries')->nullable();
            $table->string('causeSummary')->nullable();
            $table->text('causeDescription')->nullable();
            $table->string('causePhoto')->nullable();
            $table->string('causeCategory')->nullable();
            $table->string('causeDocument')->nullable();

            $table->string('causeTitle_en')->nullable();
            $table->string('causeSlug_en')->nullable();
            $table->string('causeSummary_en')->nullable();
            $table->text('causeDescription_en')->nullable();
            $table->string('causeCategory_en')->nullable();


            $table->string('causeTitle_kiny')->nullable();
            $table->string('causeSlug_kiny')->nullable();
            $table->string('causeSummary_kiny')->nullable();
            $table->text('causeDescription_kiny')->nullable();
            $table->string('causeCategory_kiny')->nullable();

            $table->foreignId('department_id')->nullable()
                ->constrained('departments')->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('causes');
    }
};
