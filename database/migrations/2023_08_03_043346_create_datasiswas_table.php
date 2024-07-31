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
        Schema::create('datasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('nis');
            $table->text('kelas');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->text('jenis_kelamin');
            $table->text('agama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datasiswas');
    }
};
