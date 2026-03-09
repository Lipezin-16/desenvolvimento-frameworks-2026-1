<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = ['titulo', 'descricao', 'status'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
