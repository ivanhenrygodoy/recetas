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
        Schema::create('mnt_medicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->boolean('activo')->default(true);
            $table->unsignedBigInteger('id_establecimiento')->nullable();

            $table->foreign('id_establecimiento')->references('id')->on('ctl_establecimientos')
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
        Schema::dropIfExists('mnt_medicos');
    }
};
