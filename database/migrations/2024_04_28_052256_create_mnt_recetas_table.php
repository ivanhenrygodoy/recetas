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
        Schema::create('mnt_recetas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('numero');
            $table->unsignedBigInteger('id_establecimiento')->nullable();
            $table->unsignedBigInteger('id_medico')->nullable();
            $table->unsignedBigInteger('id_paciente')->nullable();

            $table->foreign('id_establecimiento')->references('id')->on('ctl_establecimientos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_medico')->references('id')->on('mnt_medicos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_paciente')->references('id')->on('mnt_pacientes')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mnt_recetas');
    }
};
