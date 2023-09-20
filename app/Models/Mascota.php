<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'raza_id',
        'categoria_id',
        'photo',
        'genero_id',
    ];

    public function raza()
    {
        return $this->belongsTo(Raza::class, 'raza_id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function genero()
    {
        return $this->belongsTo(Genero::class, 'genero_id');    }
}
