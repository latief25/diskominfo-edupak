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
            $table->string("pendidikan", 15)->nullable();
            $table->string('password')->nullable();
            $table->string("nkarpeg")->unique()->nullable();
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
