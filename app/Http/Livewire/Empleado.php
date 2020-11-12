<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado as Empleados;

class Empleado extends Component
{
    
    public function render()
    {
       
        return view('livewire.empleado');
    }
}
