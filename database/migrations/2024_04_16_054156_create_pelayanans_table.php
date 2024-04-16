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
        Schema::create('pelayanan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('invoice')->unique();
            $table->bigInteger('rekammedik');
            $table->string('kode_poli');
            $table->dateTime('kunjungan')->default(date(now()));
            $table->integer('tarif');
            $table->integer('biaya_tambahan')->nullable();
            $table->boolean('status_bayar')->defaultFalse();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelayanan');
    }
};
