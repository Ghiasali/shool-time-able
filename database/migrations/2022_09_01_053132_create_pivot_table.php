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
        Schema::create('pivot', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained();
            $table->foreignId('grade_id')->constrained();
            $table->foreignId('subject_id')->constrained();
            $table->foreignId('period_slot_id')->constrained();
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
        Schema::dropIfExists('pivot');
    }
};
