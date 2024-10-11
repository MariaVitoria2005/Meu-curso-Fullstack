<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postagem extends Model
{
    use HasFactory;
    protected $fillable=['titulo','conteudo','data_postagem','foto'];
    public function users(){
        return $this->bolongsTo(user::class);
    }
}