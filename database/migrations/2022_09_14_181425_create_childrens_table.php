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
        Schema::create('childrens', function (Blueprint $table) {
            $table->id();
            $table->string('childNames')->nullable();
            $table->string('childPhoto')->nullable();
            $table->string('childPhone')->nullable();
            $table->string('disabilityType')->nullable();
            $table->string('disabilitySource')->nullable();
            $table->string('dob')->nullable();
            $table->string('fatherNames')->nullable();
            $table->string('motherNames')->nullable();
            $table->foreignId('district_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('sector_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('cell_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('village')->nullable();
            $table->foreignId('parish_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('centrale_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('livingWith')->nullable();

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
        Schema::dropIfExists('childrens');
    }
};
