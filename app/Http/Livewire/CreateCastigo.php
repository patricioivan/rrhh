<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use App\Models\Castigo;
class CreateCastigo extends Component
{   
    public $empleado;
    public $infraccion;
    public $observacion;
    public $castigo_recibido;
    public $suspension;
    public $fecha_inicio;
    public $fecha_terminacion;
    public $metodo = 'store';
    public $castigo;
    public $textoBoton = 'Agregar Castigo';
    public $numeroInfracciones;
    public $updateMode = false;
    public function mount(Empleado $empleado)
    {       
        $this->empleado = $empleado;
        $this->numeroInfracciones = $this->getCount();
    }
  
    public function render()
    {
        return view('livewire.create-castigo', [
            'castigos' => Castigo::where('empleado_id', $this->empleado->id)->get()
          
        ]);
    }
  

    public function getCount()
    {
        $numeroInfracciones = Castigo::where('empleado_id', $this->empleado->id)->get()->count();
        return $numeroInfracciones;
    }
    private function resetInput()
    {
        $this->infraccion = null;
        $this->observacion = null;
        $this->castigo_recibido = null;
        $this->suspension = null;
        $this->fecha_inicio = null;
        $this->fecha_terminacion = null;
    }
    
    public function store()
    {
       
        $this->validate([
            'infraccion' => 'required|min:5',
            'observacion' => 'required| min:5',
            'castigo_recibido' => 'required | min:5',
            'suspension' => 'required',
        ]);
        Castigo::create([
            'empleado_id' => $this->empleado->id,
            'infraccion' => $this->infraccion,
            'observacion' => $this->observacion,
            'castigo_recibido' => $this->castigo_recibido,
            'suspension' => $this->suspension,
            'fecha_inicio'=> $this->fecha_inicio,
            'fecha_terminacion' => $this->fecha_terminacion
        ]);
        $this->numeroInfracciones = $this->getCount();   
        $this->resetInput();
        session()->flash('message', 'Cambios guardados');
         
    }
  
   

    public function edit($id)
    {
        $this->textoBoton = 'Editar Castigo';
        $this->metodo = 'update';
        $castigo = Castigo::findOrFail($id);
        $this->castigo = $castigo;
        $this->infraccion = $castigo->infraccion;
        $this->observacion = $castigo->observacion;
        $this->castigo_recibido = $castigo->castigo_recibido;
        $this->suspension = $castigo->suspension;
        if($castigo->suspension) 
        {
        $this->fecha_inicio = $castigo->fecha_inicio;
        $this->fecha_terminacion = $castigo->fecha_terminacion; 
        }
        $this->updateMode = true;
        
    }
    public function cancelEdit()
    {  
        $this->updateMode = false;
        $this->resetInput();
        $this->metodo = 'store';
        $this->textoBoton = 'Agregar Castigo';
    }
    public function update()
    {
        $this->numeroInfracciones = $this->getCount();
        $this->validate([
            'infraccion' => 'required|min:5',
            'observacion' => 'required| min:5',
            'castigo_recibido' => 'required | min:5',
            'suspension' => 'required',
        ]);
        if ($this->castigo) { 
           Castigo::find($this->castigo->id)
            ->update([
                'empleado_id' => $this->empleado->id,
                'infraccion' => $this->infraccion,
                'observacion' => $this->observacion,
                'castigo_recibido' => $this->castigo_recibido,
                'suspension' => $this->suspension,
                'fecha_inicio'=> $this->fecha_inicio,
                'fecha_terminacion' => $this->fecha_terminacion,
            ]);
            $this->resetInput();
            $this->updateMode = false;
            $this->metodo = 'store';
            $this->textoBoton = 'Agregar Castigo';
            session()->flash('message', 'Cambios guardados');
        }
    }

    public function kill($id)
    {
        Castigo::destroy($id);
        $this->numeroInfracciones = $this->getCount();
    }
  
}
