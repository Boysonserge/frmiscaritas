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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blogTitle');
            $table->string('blogSlug');
            $table->text('blogSummary');
            $table->longText('mainStory');
            $table->string('mainPhoto');

            $table->string('blogTitle_en');
            $table->string('blogSlug_en');
            $table->text('blogSummary_en');
            $table->longText('mainStory_en');

            $table->string('blogTitle_kiny');
            $table->string('blogSlug_kiny');
            $table->text('blogSummary_kiny');
            $table->longText('mainStory_kiny');


            $table->foreignId('user_id')->comment('editor id')
                ->constrained('users')->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('views')->nullable();
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
        Schema::dropIfExists('blogs');
    }
};
