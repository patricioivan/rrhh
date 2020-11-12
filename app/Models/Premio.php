<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premio extends Model
{
    protected $fillable = [
        'empleado_id',
        'logro',
        'observacion',
        'premio_obtenido'
    ];
    use HasFactory;

    public function empleado()
    {
        return $this->belongsTo('App\Models\Empleado');
    }
}
