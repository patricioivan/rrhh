<div class="pt-5">
  <div clas="col-12 col-md-6">
    <input class="form-control w-100 form-estilo mb-3 " wire:model="search" type="search" placeholder="&#xF002; Buscar empleado por nombre,apellido, DNI o puesto de trabajo">
  </div>
    <div class="table-responsive">  
    <table class="table">

          <thead class="thead-dark">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">DNI</th>
              <th scope="col">Puesto de Trabajo</th>
              <th scope="col">Premios, Castigos y Desempeño</th>
              <th scope="col">Herramientas</th>
            </tr>
          </thead>
          <tbody>
            @foreach($empleados as $empleado)
            <tr>
              <td><span data-toggle="tooltip" data-placement="top" title="Click para más información"><button type="button" class="boton-modal-empleados" data-toggle="modal" data-target="#exampleModalCenter">
                {{$empleado->nombre}}
              </button><span> @livewire('empleado-modal-perfil',['empleado' => $empleado])</td>
             
              <td>{{$empleado->apellido}}</td>
              <td>{{$empleado->dni}}</td>
              <td class="text-capitalize">{{$empleado->puesto_trabajo}}</td>
              <td>
                <div class="d-inline">
                <a data-toggle="tooltip" class="pl-md-3" title="Premios de {{$empleado->nombre. ' ' . $empleado->apellido }}" href="{{route('empleado-premios', ['empleado' => $empleado->id])}}"><i class="fas fa-trophy" ></i></a>
                <a data-toggle="tooltip" class="pl-2 pl-md-3" title="Castigos de {{$empleado->nombre. ' '. $empleado->apellido}}" href="{{route('empleado-castigos', ['empleado' => $empleado->id])}}"><i class="fas fa-bullhorn" ></i></a>
                <a data-toggle="tooltip" class="pl-2 pl-md-3" title="Evaluaciones de desempeño" href="{{route('empleado-evaluacion', ['empleado' => $empleado->id])}}"><i class="fas fa-list-alt"></i></a>
                </div>
              </td>
              <td>
                <div class="d-inline">
                @if($confirming===$empleado->id)
                  <a class="pl-md-3"  class="confirmacion-delete" href="javascript:void(0)" style="color:red;" type="button" wire:click="kill({{ $empleado->id }})"><i style="color:red;" class="fas fa-trash"></i>Confirmar eliminación de {{$empleado->nombre}}</a>
                   @else
                  <a data-toggle="tooltip" class="pl-md-3" title="Eliminar" class="confirmacion-delete"  href="javascript:void(0)"  type="button" wire:click="confirmDelete({{ $empleado->id }})"><i style="" class="fas fa-trash"></i></a>
                  @endif
                <a data-toggle="tooltip" class="pl-md-3" title="Editar" class="pl-3" href="{{route('form-empleados', ['empleado' => $empleado->id])}}"><i style="" class="fas fa-edit"></i></a>
                
                  
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
          
    </table>
  </div>

    {{ $empleados->links() }}
      
            <!-- Vacaciones = 
                      <5      14 días 
                      <5-10>  21 dias
                      <10-20> 28 dias
                      >20     35 dias <-->
                      
</div>