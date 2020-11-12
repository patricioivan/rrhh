@extends('layouts.app')

@section('content')

    <section class="fondo-rrhh">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img class="img-fluid pt-5" src="{{url('/images/staff.svg')}}">
                </div>
                <div class="col-6 my-auto mx-auto">
                    <h1 class="sistema-gestion-rrhh">Sistema de Gestion  <span class="rr-hh">Recursos Humanos</span></h1>
                </div>

                
            </div>
        </div>
    </section>

    <section style="background-color:">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pt-5">
                   <h1 class="beneficios pb-5">Beneficios de usar el sistema</h1>
                </div>
                <div class="col-12 col-md-4 text-center pt-5 pt-md-0">
                    <img src="{{url('/images/recursos-humanos.svg')}}" class="pb-4 mx-auto">
                    <h3 class="encabezado-texto-imagenes">Facil administración</h3>
                    <p class="subencabezado-texto-imagenes">
                       Podrás dar de alta empleados y gestionar sus perfiles.
                   </p>
                </div>
                <div class="col-12 col-md-4   text-center pt-4 pt-md-0">
                    <img src="{{url('/images/comunidad.svg')}}" class="pb-4 mx-auto">
                    <h3 class="encabezado-texto-imagenes">Todo en un solo lugar</h3>
                    <p class="subencabezado-texto-imagenes pr-5 pl-5 pr-md-0 pl-md-0">
                      Accede desde tu celular o desde tu portatil, en ambos podrás realizar la gestión.  
                   </p>
                </div>
                <div class="col-12 col-md-4   text-center pt-4 pt-md-0">
                    <img src="{{url('/images/antecedentes.svg')}}" class="pb-4 mx-auto">
                    <h3 class="encabezado-texto-imagenes">Sistema de premios y castigos</h3>
                    <p class="subencabezado-texto-imagenes">Podrás asignar premios y castigos a los empleados y su visualización, para su evaluación constante.</p>
                </div>
                <div class="col-12 text-center">
                    <a id="hablemos" class="" href="{{ route('empleado.index') }}">
                        <button type="button" class="imagen-boton-chateamos btn btn-success">Usar el sistema</button>
                    </a>
                </div>

               
            </div>
        </div>
    </section>
    
 
@endsection