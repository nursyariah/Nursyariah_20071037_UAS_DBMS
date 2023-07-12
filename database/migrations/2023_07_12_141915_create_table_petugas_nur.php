<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePetugasNur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_petugas_nur', function (Blueprint $table) {
            $table->integer('petugasid_nur')->primary();
            $table->string('namapetugas_nur','35')->nullable();
            $table->string('alamat_nur','45')->nullable();
            $table->string('handphone_nur','15')->nullable();
            $table->string('password','10')->nullable();
            $table->string('level','20')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_petugas_nur');
    }
}
