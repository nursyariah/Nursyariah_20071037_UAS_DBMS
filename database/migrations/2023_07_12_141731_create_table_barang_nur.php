<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBarangNur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_barang_nur', function (Blueprint $table) {
            $table->string('barangid_nur', '10')->primary();
            $table->string('namabarang_nur','45')->nullable();
            $table->string('satuan_nur','45')->nullable();
            $table->string('harga_nur','34')->nullable();
            $table->string('kategoriid_nur','5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_barang_nur');
    }
}
