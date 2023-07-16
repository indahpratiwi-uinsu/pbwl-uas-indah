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
        Schema::create('tb_pesanan', function (Blueprint $table) {
            $table->increments('pesanan_id');
            $table->foreignId('pesanan_id_menu');
            $table->foreignId('pesanan_id_meja');
            $table->foreignId('pesanan_id_pelanggan');
            $table->string('pesanan_jumlah');
            $table->string('pesanan_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pesanan');
    }
};