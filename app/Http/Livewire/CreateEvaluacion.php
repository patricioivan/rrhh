<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use App\Models\Evaluacion;

class CreateEvaluacion extends Component
{
    public $empleado;
    public $objetivo_logrado;
    public $observacion_manager;
    public $conclusion;
    public $evaluacion;
    public $metodo = 'store';
    public $textoBoton = 'Agregar Evaluacion';
    public $numeroEvaluaciones;
    public $updateMode = false;
    
    public function mount(Empleado $empleado)
    {       
        $this->empleado = $empleado;
        $this->numeroEvaluaciones = $this->getCount();
    }
    public function render()
    {
        return view('livewire.create-evaluacion',
    [ 'evaluaciones' => Evaluacion::where('empleado_id', $this->empleado->id)->get()]);
    }

    public function getCount()
    {
        $numeroEvaluaciones = Evaluacion::where('empleado_id', $this->empleado->id)->get()->count();
        return $numeroEvaluaciones;
    }
    private function resetInput()
    {
        $this->objetivo_logrado = null;
        $this->observacion_manager = null;
        $this->conclusion = null;
    }
    public function store()
    {
       
        $this->validate([
            'objetivo_logrado' => 'required|min:5',
            'observacion_manager' => 'required| min:5',
            'conclusion' => 'required | min:5',
        ]);
       Evaluacion::create([
            'empleado_id' => $this->empleado->id,
            'objetivo_logrado' => $this->objetivo_logrado,
            'observacion_manager' => $this->observacion_manager,
            'conclusion' => $this->conclusion,
        ]);
        $this->numeroEvaluaciones = $this->getCount();   
        $this->resetInput();
        session()->flash('message', 'Cambios guardados');
         
    }

    public function edit($id)
    {
        $this->textoBoton = 'Editar Evaluacion';
        $this->metodo = 'update';
        $evaluacion = Evaluacion::findOrFail($id);
        $this->evaluacion = $evaluacion;
        $this->objetivo_logrado = $evaluacion->objetivo_logrado;
        $this->observacion_manager = $evaluacion->observacion_manager;
        $this->conclusion = $evaluacion->conclusion;
        $this->updateMode = true;
        
    }

    public function cancelEdit()
    {  
        $this->updateMode = false;
        $this->resetInput();
        $this->metodo = 'store';
        $this->textoBoton = 'Agregar Evaluacion';
    }

    public function update()
    {
        $this->numeroEvaluaciones = $this->getCount();
        $this->validate([
            'objetivo_logrado' => 'required|min:5',
            'observacion_manager' => 'required| min:5',
            'conclusion' => 'required | min:5',
        ]);
        if ($this->evaluacion) { 
           Evaluacion::find($this->evaluacion->id)
            ->update([
                'empleado_id' => $this->empleado->id,
                'objetivo_logrado' => $this->objetivo_logrado,
                'observacion_manager' => $this->observacion_manager,
                'conclusion' => $this->conclusion,
            ]);
            $this->resetInput();
            $this->updateMode = false;
            $this->metodo = 'store';
            $this->textoBoton = 'Agregar Evaluacion';
            session()->flash('message', 'Cambios guardados');
        }
    }

    public function kill($id)
    {
        Evaluacion::destroy($id);
        $this->numeroEvaluaciones = $this->getCount();
    }
}
