<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBagianNur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_bagian_nur', function (Blueprint $table) {
            $table->string('bagianid_nur', '10')->primary();
            $table->string('namabagian_nur','45')->nullable();
            $table->string('kepalabagian_nur','45')->nullable();
            $table->string('telp_nur','34')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_bagian_nur');
    }
}
