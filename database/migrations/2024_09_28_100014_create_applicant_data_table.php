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
        Schema::create('applicants_data', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_2')->nullable();
            $table->string('name_3')->nullable();
            $table->string('email');
            $table->string('no_hp');
            $table->string('nim');
            $table->string('nim_2')->nullable();
            $table->string('nim_3')->nullable();
            $table->string('asal_instansi');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->string('filename');
            $table->string('status')->default('pending');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_data');
    }
};
