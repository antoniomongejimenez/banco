<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;

    public $fillable = ['numero'];

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class, 'titulares');
    }

    public function movimientos()
    {
        return $this->hasMany(Movimiento::class);
    }

    public function registros()
    {
        return $this->hasMany(Registro::class);
    }
}
