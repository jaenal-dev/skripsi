<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 15)->unique();
            $table->string('name', 50);
            $table->string('image')->nullable();
            $table->string('email', 50)->unique()->nullable();
            $table->char('jenis_kelamin',1);
            $table->string('pangkat', 30)->nullable();
            $table->string('esselon', 10)->nullable();
            $table->string('golongan', 10)->nullable();
            $table->string('password');
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
};
