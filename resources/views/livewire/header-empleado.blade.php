<div>
<x-jet-nav-link  href="{{ route('empleado.index') }}" :active="request()->routeIs('empleado.index')">
    Lista de Empleados
 </x-jet-nav-link>
 <x-jet-nav-link  href="{{ route('form-empleados',['empleado' => null ]) }}" :active="request()->routeIs('empleado.form')">
    Alta de empleado
 </x-jet-nav-link>


</div>