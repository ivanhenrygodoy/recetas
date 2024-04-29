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
        Schema::create('mnt_receta_medicamentos', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->string('dosis', 255);
            $table->string('indicaciones', 255);
            $table->unsignedBigInteger('id_receta')->nullable();
            $table->unsignedBigInteger('id_medicamento')->nullable();

            $table->foreign('id_receta')->references('id')->on('mnt_recetas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_medicamento')->references('id')->on('mnt_medicamentos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mnt_receta_medicamentos');
    }
};
