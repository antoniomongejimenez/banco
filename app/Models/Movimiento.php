<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;

    protected $fillable =['cuenta_id','importe','concepto'];

    public function cuenta()
    {
        return $this->belongsTo(Cuenta::class);
    }
}
