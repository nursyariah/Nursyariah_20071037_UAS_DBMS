<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePengeluaranNur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pengeluaran_nur', function (Blueprint $table) {
            $table->string('nobk_nur', '10')->primary();
            $table->date('tanggal_nur')->nullable();
            $table->date('noref_nur')->nullable();
            $table->string('bagianid_nur','10')->nullable();
            $table->string('petugasid_nur','5')->nullable();
            $table->string('keterangan_nur','5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_pengeluaran_nur');
    }
}
