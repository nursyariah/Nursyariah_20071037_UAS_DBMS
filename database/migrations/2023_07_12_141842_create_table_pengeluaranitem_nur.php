<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePengeluaranitemNur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pengeluaranitem_nur', function (Blueprint $table) {
            $table->integer('id_nur')->primary();
            $table->string('nobk_nur','10')->nullable();
            $table->string('barangid_nur','10')->nullable();
            $table->integer('jumlah_nur')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_pengeluaranitem_nur');
    }
}
