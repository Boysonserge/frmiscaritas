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
        Schema::create('milestones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('indicator_id')->constrained()
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamp('from')->default(now());
            $table->timestamp('to')->default(now());
            $table->mediumText('nature_of_support')->nullable();
            $table->integer('planned_men')->nullable();
            $table->integer('planned_women')->nullable();
            $table->integer('planned_youths')->nullable();
            $table->integer('planned_disabilities')->nullable();
            $table->integer('planned_budget')->nullable();
            $table->integer('achieved_men')->nullable();
            $table->integer('achieved_women')->nullable();
            $table->integer('achieved_youths')->nullable();
            $table->integer('achieved_disabilities')->nullable();
            $table->integer('achieved_budget')->nullable();
            $table->boolean('chief_status')->default(false);
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
        Schema::dropIfExists('milestones');
    }
};
