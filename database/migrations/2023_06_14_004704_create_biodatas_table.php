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
        Schema::create('biodata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('posisi');
            $table->string('nama');
            $table->string('noktp');
            $table->string('ttl');
            $table->string('jk');
            $table->string('agama');
            $table->string('goldar');
            $table->string('status');
            $table->text('alamat1');
            $table->text('alamat2');
            $table->string('email');
            $table->string('notlp');
            $table->string('orgdekat');
            $table->string('skill');
            $table->string('bersedia');
            $table->string('gaji');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
