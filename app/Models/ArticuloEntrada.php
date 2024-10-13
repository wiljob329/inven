<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticuloEntrada extends Model
{
    use HasFactory;

    protected $fillable = ['entradas_id', 'materials_id', 'cantidad'];

    public function entrada()
    {
        return $this->belongsTo(Entrada::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
