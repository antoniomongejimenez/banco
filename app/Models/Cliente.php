<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public $fillable = ['dni', 'nombre'];

    public function cuentas()
    {
        return $this->belongsToMany(Cuenta::class, 'titulares');
    }
}
