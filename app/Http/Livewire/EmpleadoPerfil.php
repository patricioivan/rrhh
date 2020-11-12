<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use Carbon\Carbon;
class EmpleadoPerfil extends Component
{
    
    public $empleado;
    public $vacaciones;
    public $antiguedad;
    public $fecha_actual;
    public $edad;
    public function mount(Empleado $empleado) {
      $this->empleado = $empleado;
      $this->fecha_actual = Carbon::today();
      $fechaActual = Carbon::now();
      $this->edad = Carbon::parse($empleado->fecha_nacimiento)->age;
        
  
      // siendo $vigencia la fecha que traes de la tabla
      $fecha_ingreso= Carbon::parse($empleado->fecha_ingreso);
 
      $this->antiguedad = $fecha_ingreso->diffInYears($fechaActual);
        if($this->antiguedad < 5) {
            $this->vacaciones = "14 dias";
        }
        elseif($this->antiguedad >= 5 && $this->vacaciones < 10) {
            $this->vacaciones = "21 dias";
        }
        elseif($this->antiguedad >= 10 && $this->vacaciones < 20) {
            $this->vacaciones = "28 dias";
        }
        else 
        {
            $this->vacaciones = "35 dias";
        } 
        
    }
    public function render()
    {
        return view('livewire.empleado-perfil');
    }
}
