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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            // $table->integer('appointment_id');
            $table->foreignId('appointment_id')->references('id')->on('appointment')->onDelete('cascade')->onUpdate('cascade');
            $table->string('fee_doctor')->nullable();
            $table->string('fee_specialist')->nullable();
            $table->string('fee_hospital')->nullable();
            $table->string('sub_total')->nullable();
            $table->string('vat')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('transaction');
    }
};
