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
        Schema::create('modules', function (Blueprint $table) {
            $table->string('cw_id')->primary();
            $table->foreignId('course_id')
                ->constrained('courses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            // $table->foreign('course_id')
            //     ->references('id')->on('courses')
            //     ->constrained()
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
            // course id + course week
            $table->boolean('status');
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
        Schema::dropIfExists('modules');
    }
};
