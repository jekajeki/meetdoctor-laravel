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
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            // $table->integer('doctor_id');
            $table->foreignId('doctor_id')->references('id')->on('doctor')->onDelete('cascade')->onUpdate('cascade');
            // $table->integer('user_id');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->integer('consultation_id');
            $table->foreignId('consultation_id')->references('id')->on('consultation')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('level', [1, 2, 3]);
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->enum('status', [1, 2]);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment');
    }
};
