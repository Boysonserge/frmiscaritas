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
        Schema::create('impacts', function (Blueprint $table) {
            $table->id();
            $table->string('impact_name')->nullable();
            $table->text('impact_description')->nullable();
            $table->string('baseline')->nullable();
            $table->integer('men')->nullable();
            $table->integer('women')->nullable();
            $table->integer('youth')->nullable();
            $table->integer('disabilities')->nullable();
            $table->integer('total_budget')->comment('Total budget for the whole project')
                ->nullable();
            $table->timestamp('deadline')->comment('The deadline for the project to have finished')
                ->nullable();
            $table->foreignId('user_id')->constrained()
                ->cascadeOnDelete()->cascadeOnUpdate()
                ->comment('user who created it');
            $table->foreignId('department_id')->constrained()
                ->cascadeOnDelete()->cascadeOnUpdate()
                ->comment('In which department was created in');
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
        Schema::dropIfExists('impacts');
    }
};
