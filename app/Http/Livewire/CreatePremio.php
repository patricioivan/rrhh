<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use App\Models\Premio;
class CreatePremio extends Component
{
    public $empleado;
    public $logro;
    public $observacion;
    public $premio_obtenido;
    public $metodo = 'store';
    public $premio;
    public $textoBoton = 'Agregar Premio';
    public $numeroPremios;
    public $updateMode = false;
    
    public function mount(Empleado $empleado)
    {       
        $this->empleado = $empleado;
        $this->numeroPremios = $this->getCount();
    }

    public function render()
    {
        return view('livewire.create-premio', [
            'premios' => Premio::where('empleado_id', $this->empleado->id)->get(),
        ]);
    }
    public function getCount()
    {
        $numeroPremios = Premio::where('empleado_id', $this->empleado->id)->get()->count();
        return $numeroPremios;
    }
    private function resetInput()
    {
        $this->logro = null;
        $this->observacion = null;
        $this->premio_obtenido = null;
    }
    public function store()
    {
       
        $this->validate([
            'logro' => 'required|min:5',
            'observacion' => 'required| min:5',
            'premio_obtenido' => 'required | min:5',
        ]);
        Premio::create([
            'empleado_id' => $this->empleado->id,
            'logro' => $this->logro,
            'observacion' => $this->observacion,
            'premio_obtenido' => $this->premio_obtenido
        ]);
        $this->numeroInfracciones = $this->getCount();   
        $this->resetInput();
        session()->flash('message', 'Cambios guardados');
    }

    public function edit($id)
    {
        $this->textoBoton = 'Editar Premio';
        $this->metodo = 'update';
        $premio = Premio::findOrFail($id);
        $this->premio= $premio;
        $this->logro = $premio->logro;
        $this->observacion = $premio->observacion;
        $this->premio_obtenido = $premio->premio_obtenido;
        $this->updateMode = true;
        
    }
    public function cancelEdit()
    {  
        $this->updateMode = false;
        $this->resetInput();
        $this->metodo = 'store';
        $this->textoBoton = 'Agregar Premio';
    }
    public function update()
    {
        $this->numeroPremios = $this->getCount();
        $this->validate([
            'logro' => 'required|min:5',
            'observacion' => 'required| min:5',
            'premio_obtenido' => 'required | min:5',
        ]);
        if ($this->premio) { 
           Premio::find($this->premio->id)
            ->update([
                'empleado_id' => $this->empleado->id,
                'logro' => $this->logro,
                'observacion' => $this->observacion,
                'premio_obtenido' => $this->premio_obtenido,
            ]);
            $this->resetInput();
            $this->updateMode = false;
            $this->metodo = 'store';
            $this->textoBoton = 'Agregar Premio';
            session()->flash('message', 'Cambios guardados');
        }
    }

    public function kill($id)
    {
        Premio::destroy($id);
        $this->numeroPremios = $this->getCount();
    }

}
