<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;
class FormEmpleados extends Component
{
    public $nombre;
    public $apellido;
    public $domicilio;
    public $dni;
    public $email;
    public $fecha_nacimiento;
    public $telefono;
    public $estado_civil;
    public $hijos;
    public $obra_social;
    public $puesto_trabajo;
    public $fecha_ingreso;
    public $empleado;
    
    protected $rules = [
            'nombre' => 'required | string | max:60',
            'apellido' => 'required | string | max:60',
            'domicilio' => 'required | max: 50 ',
            'dni' => 'required | numeric |  digits_between:8,8',
            'email' => 'required | email',
            'telefono' => 'required | numeric | digits_between:5,20',
            'estado_civil' => 'required',
            'hijos' => 'required | numeric | digits_between:0,15 ',
            'obra_social' => 'required',
            'puesto_trabajo' => 'required',
            'fecha_nacimiento' => 'required',
            'fecha_ingreso' => 'required'
    ];
    protected $messages = [
        'dni.unique' => 'El DNI debe ser único y ese DNI ya está registrado',
        'dni.numeric' => 'El DNI debe ser numericos.',
        'dni.min' => 'El DNI debe tener 8 caracteres',
        'dni.max' => 'El DNI debe tener 8 caracteres',
        'telefono.numeric' => 'Telefono invalido. Asegurate de que solo sean numeros',
        'telefono.digits_between' => 'El telefono debe tener por lo menos 5 caracteres y como máximo 20' 
    
    ];

     public function mount($empleado)
    {
       
        //$prueba = Empleado::find($empleado);
        
        $prueba = Empleado::find($empleado);
        $this->empleado = null;
        if ($prueba->isNotEmpty()) {
            
            $this->empleado = $empleado;
            $this->nombre = $this->empleado->nombre;
            $this->apellido = $this->empleado->apellido;
            $this->domicilio = $this->empleado->domicilio;
            $this->email = $this->empleado->email;
            $this->fecha_nacimiento = $this->empleado->fecha_nacimiento;
            $this->dni = $this->empleado->dni;
            $this->telefono = $this->empleado->telefono;
            $this->estado_civil = $this->empleado->estado_civil;
            $this->hijos = $this->empleado->hijos;
            $this->obra_social = $this->empleado->obra_social;
            $this->puesto_trabajo = $this->empleado->puesto_trabajo;
            $this->fecha_ingreso = $this->empleado->fecha_ingreso;
        }
        
      
        
        
    } 

    public function submit()
    {
       
        $data = $this->validate();
        $empleado = [
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'domicilio' => $this->domicilio,
            'dni' => $this->dni,
            'email' => $this->email,
            'telefono' => $this->telefono,
            'estado_civil' => $this->estado_civil,
            'hijos' => $this->hijos,
            'obra_social' => $this->obra_social,
            'puesto_trabajo' => $this->puesto_trabajo,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'fecha_ingreso' => $this->fecha_ingreso,

        ];
        
     
       if($this->empleado) 
       {
        Empleado::find($this->empleado->id)
                ->update($empleado);
        } 
        else 
        { 
            
            Empleado::create($empleado);
           
            
        }
        session()->flash('message', 'Cambios guardados');
        return redirect()->to('/empleado');
    }
    public function render()
    {
        return view('livewire.form-empleados');
    }
}
