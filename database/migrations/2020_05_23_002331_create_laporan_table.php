<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->string('Pemasukan', 100);
            $table->string('Pengeluaran', 100);
            $table->string('ItemYangTerjual', 100);
            $table->bigInteger('JumlaItemTerjual');
            $table->string('ItemYangDibeli', 100);
            $table->bigInteger('JumlahItemDibeli');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan');
    }
}
