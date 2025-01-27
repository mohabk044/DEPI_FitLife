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
    Schema::table('classes', function (Blueprint $table) {
        $table->time('start_time')->nullable(); // Start time of the class
        $table->time('end_time')->nullable(); // End time of the class
    });
}

public function down()
{
    Schema::table('classes', function (Blueprint $table) {
        $table->dropColumn(['start_time', 'end_time']);
    });
}

};
