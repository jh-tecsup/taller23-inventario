<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function ubicacion(){
        return $this->belongsTo(Ubicacion::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
