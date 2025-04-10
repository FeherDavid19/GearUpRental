<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flotta', function (Blueprint $table) {
            $table->id();
            $table->integer('evjarat');
            $table->char('alvazszam');
            $table->integer('kmallas');
            $table->string('tipus');
            $table->char('uzemanyag');
            $table->char('suly');
            $table->char('vontatosuly');
            $table->string('vonohorog');
            $table->string('klima');
            $table->integer('cm3');
            $table->char('lekw');
            $table->string('valto');
            $table->integer('szallitas');
            $table->integer('ajtok');
            $table->string('jogsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flotta');
    }
};
