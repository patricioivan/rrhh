<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Castigo extends Model
{
    protected $fillable = [
        'empleado_id',
        'infraccion',
        'observacion',
        'castigo_recibido',
        'suspension',
        'fecha_inicio',
        'fecha_terminacion',
    ];

    use HasFactory;

    public function empleado()
    {
        return $this->belongsTo('App\Models\Empleado');
    }
}
