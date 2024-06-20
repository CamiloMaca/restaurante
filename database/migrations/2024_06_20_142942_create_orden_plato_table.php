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
        Schema::create('orden_plato', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('orden_id');
            $table->unsignedBigInteger('plato_id');

            $table->foreign('orden_id')
            ->references('id')
            ->on('ordens')
            ->onDelete('cascade');

            $table->foreign('plato_id')
            ->references('id')
            ->on('platos')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orden_plato');
    }
};
