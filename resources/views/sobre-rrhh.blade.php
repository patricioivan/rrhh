@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-md-left">
                <h1 class="pt-5 text-md-center sistema-gestion-rrhh"> Sobre <span class="rr-hh">Sistema de RR.HH</span></h1>

                <p class="pt-3">
                  Sistema de <span class="rr-hh">RR.HH</span> es un sistema diseñado para manejo y gestión de empleados de una empresa.
                  <br>
                  Tiene un login y un sistema de registro intuitivo, con recuperacion de clave y factor de doble autenticacion.
                  
                  <br>
                  Podrás dar de alta los empleados de tus empresas, editarlos, eliminarlos.
                  <br>
                  Ademàs, podes agregar premios, castigos y evaluaciones de desempeño a cada uno de tus empleados, con la correspondiente edición y eliminación de cada una de éstas categorías.
                  <br>
                  Hay una tabla disponible para ver todos tus empleados cargados, y podes buscar en tiempo real a cada uno de ellos por nombre, apellido, dni y puesto de trabajo. 
                </p>
                <p class="text-center sobre-rrhh rr-hh">
                   El sistema ofrece disponibilidad 24/7 y desde cualquier dispositivo. Es totalmente adaptativo a celulares, tabletas y computadoras.
                </p>

                <img src="{{url('/images/logo-unsta.png')}}" class="pt-4 mx-auto">
               

            </div>

        </div>
    </div>
</section>
@endsection