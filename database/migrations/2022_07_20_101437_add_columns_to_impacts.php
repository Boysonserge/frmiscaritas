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
        Schema::table('impacts', function (Blueprint $table) {
            $table->string('districts')->nullable()->after('department_id');
            $table->string('sectors')->nullable()->after('districts');
            $table->string('cells')->nullable()->after('sectors');
            $table->string('parishes')->nullable()->after('cells');
            $table->string('centrales')->nullable()->after('parishes');
            $table->string('imiryango')->nullable()->after('centrales');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('impacts', function (Blueprint $table) {
            //
        });
    }
};
