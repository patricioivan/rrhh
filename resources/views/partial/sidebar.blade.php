<div class="bg-light border-right" id="sidebar-wrapper">
          <div class="sidebar-heading">Perfil de {{$empleado->nombre}} {{$empleado->apellido}} </div>
          <div class="list-group list-group-flush">
            <a href="{{route('empleado-perfil', ['empleado' => $empleado->id])}}" class="list-group-item list-group-item-action bg-light">Perfil</a>
            <a href="{{route('empleado-premios', ['empleado' => $empleado->id])}}" class="list-group-item list-group-item-action bg-light">Premios</a>
            <a href="{{route('empleado-castigos', ['empleado' => $empleado->id])}}" class="list-group-item list-group-item-action bg-light">Castigos</a>
            <a href="{{route('empleado-evaluacion', ['empleado' => $empleado->id])}}" class="list-group-item list-group-item-action bg-light">Evaluación de Desempeño</a>
            <a href="{{route('form-empleados', ['empleado' => $empleado->id])}}" class="list-group-item list-group-item-action bg-light">Editar Datos</a>
          </div>
        </div>