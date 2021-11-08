<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->unsignedInteger('id', true);
      $table->string('nama');
      $table->string('nip')->unique();
      $table->enum("role", [
        "pegawai",
        "admin"
      ]);
      $table->string("tempat_lahir", 50)->nullable();
      $table->date("tanggal_lahir")->nullable();
      $table->enum("jenis_kelamin", ["L", "P"])->nullable();
      $table->enum("pendidikan_tertinggi", ["sma", "s1", "s2", "s3"])->nullable();
      $table->string('password')->nullable();
      $table->string("nkarpeg")->unique()->nullable();
      $table->date("tmt_golongan_ruang")->nullable();
      $table->unsignedTinyInteger("pangkat_id")->nullable();
      $table->foreign('pangkat_id')->references('id')->on('pangkat')->nullOnDelete();
      $table->rememberToken();
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
    Schema::dropIfExists('users');
  }
}
