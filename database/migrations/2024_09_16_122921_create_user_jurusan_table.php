<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_jurusan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jurusan');
            $table->unsignedBigInteger('id_level');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_jurusan')->references('id')->on('jurusans');
            $table->foreign('id_level')->references('id')->on('levels');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_jurusan');
    }
};
