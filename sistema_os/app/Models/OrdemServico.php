<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    use HasFactory;

    protected $fillable = ['servico_id','cliente_id', 'empresa_id', 'data_inicial', 'data_final', 'valor', 'status'];

    public function servico(){
        return $this->belongsTo(Servico::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }
   
}