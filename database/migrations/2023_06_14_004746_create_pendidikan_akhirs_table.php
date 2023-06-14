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
        Schema::create('pendidikan_akhirs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('penakhir');
            $table->string('institusi');
            $table->string('jurusan');
            $table->string('tahlulus');
            $table->string('ipk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikan_akhirs');
    }
};
