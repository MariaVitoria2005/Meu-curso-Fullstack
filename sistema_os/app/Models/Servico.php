<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = ['tipo', 'valor', 'empresa_id', 'categoria_id', 'status'];
   
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    
    public function OrdemServico()
    {
        return $this->hasMany(OrdemServico::class);
    }

}