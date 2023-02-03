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
        Schema::create('detail_user', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->integer('type_user_id');
            $table->foreignId('type_user_id')->references('id')->on('type_user')->onDelete('cascade')->onUpdate('cascade');
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->string('photo',)->nullable();
            $table->enum('gender', [1, 2]);
            $table->string('age');
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
        Schema::dropIfExists('detail_user');
    }
};
