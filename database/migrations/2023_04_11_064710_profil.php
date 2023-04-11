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
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->text('profil');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('email')->unique();
            $table->string('tempatlahir');
            $table->string('tgllahir');
            $table->string('alamat');
            $table->string('pendidikan');
            $table->string('tahunmasuk');
            $table->string('tahunlulus');
            $table->string('studi');
            $table->string('uni');
            $table->string('ipk');
            $table->string('passion');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil');
    }
};