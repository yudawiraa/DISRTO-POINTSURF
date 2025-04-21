<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id('ID_Produk');
            $table->string('Nama_Produk');
            $table->text('Deskripsi');
            $table->decimal('Harga', 10, 2);
            $table->integer('Stok');
            $table->string('Kategori');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
