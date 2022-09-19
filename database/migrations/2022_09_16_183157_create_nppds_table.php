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
        Schema::create('nppds', function (Blueprint $table) {
            $table->id();
            $table->string('kepada', 50);
            $table->string('dari', 100);
            $table->integer('anggaran_id');
            $table->integer('spt_id');
            $table->string('prihal', 50);
            $table->integer('status')->default(0)->nullable();
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
        Schema::dropIfExists('nppds');
    }
};
