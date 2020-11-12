<?php

namespace App\Http\Livewire;

use App\Models\Empleado;
use Livewire\Component;

class Form extends Component
{
    public $empleado;

    public function mount(Empleado $empleado)
    {
        $this->empleado = $empleado;
    }
    public function render()
    {
        return view('livewire.form');
    }
}
