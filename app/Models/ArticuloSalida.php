<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticuloSalida extends Model
{
    use HasFactory;

    protected $fillable = ['salidas_id', 'materials_id', 'cantidad'];

    public function salida()
    {
        return $this->belongsTo(Salida::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
