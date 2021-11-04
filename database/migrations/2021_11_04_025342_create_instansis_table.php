<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstansisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instansi', function (Blueprint $table) {
            $table->id();
            $table->string('kwil', 10)->unique();
            $table->string("kinsduk", 4)->unique();
            $table->string('nwil', 50);
            $table->string('ibu_kota', 50)->nullable();
            $table->unsignedTinyInteger('twil');
            $table->unsignedTinyInteger('kd_lokker');
            $table->string("bkd", 100)->nullable();
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
        Schema::dropIfExists('instansis');
    }
}
