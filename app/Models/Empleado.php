<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'nombre',
        'apellido', 
        'domicilio',
        'dni',
        'email',
        'fecha_nacimiento',
        'telefono', 
        'estado_civil', 
        'hijos',
        'obra_social',
        'puesto_trabajo',
        'fecha_ingreso',
    ];
    use HasFactory;

    public function premios()
    {
        return $this->hasMany('App\Models\Premio');
    }

    public function castigos()
    {
        return $this->hasMany('App\Models\Castigo');
    }

    public function evaluaciones()
    {
        return $this->hasMany('App\Models\Evaluacion');
    }
}
