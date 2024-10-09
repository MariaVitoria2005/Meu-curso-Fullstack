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
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->float('valor');
            $table->unsignedBigInteger('empresa_id')->nullable();      
            $table->unsignedBigInteger('categoria_id')->nullable();      
            $table->foreign('empresa_id')
                ->references('id')
                ->on('empresas')
                ->onDelete('cascade');
            $table->foreign('categoria_id')
                ->references('id')
                ->on('categorias')
                ->onDelete('cascade');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicos');
    }
};