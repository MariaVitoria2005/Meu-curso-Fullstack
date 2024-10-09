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
        Schema::create('ordem_servicos', function (Blueprint $table) {
            $table->id();
            $table->Date('data');
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->unsignedBigInteger('servico_id')->nullable();
            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes')
                ->onDelete('cascade');
            $table->foreign('servico_id')
                ->references('id')
                ->on('servicios')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordem_servicos');
    }
};
