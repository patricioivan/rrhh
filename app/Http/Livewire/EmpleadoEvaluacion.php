<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;
class EmpleadoEvaluacion extends Component
{
    public $empleado;
    public function mount(Empleado $empleado)
    {       
        $this->empleado = $empleado;

    }
    public function render()
    {
        return view('livewire.empleado-evaluacion');
    }
}
