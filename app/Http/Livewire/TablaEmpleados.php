<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Empleado;
class TablaEmpleados extends Component
{
    use WithPagination;
    public $search;
    public $confirming;
    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function mount()
    {
        $this->fill(request()->only('search'));
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {   
        $search = '%'.$this->search.'%';
        return view('livewire.tabla-empleados', [
            'empleados' => Empleado::where('nombre', 'like',$search)
            ->orWhere('apellido', 'like', $search)
            ->orWhere('dni', 'like', $search)
            ->orWhere('puesto_trabajo', 'like', $search)
            ->paginate(15),
        ]);
   
    
    }
    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function kill($id)
    {
        Empleado::destroy($id);
    }
}
