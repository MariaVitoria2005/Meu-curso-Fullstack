<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{
    use HasFactory;
    protected $fillable=['conteudo','data_comentario'];
    public function users(){
        return $this->bolongsTo(user::class);
    }
    public function postagem(){
        return $this->bolongsTo(user::class);
    }
}