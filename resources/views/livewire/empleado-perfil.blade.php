@extends('layouts.app')
@section('content')
<section>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        @include('partial.sidebar')
        <!-- /#sidebar-wrapper -->
    
        <!-- Page Content -->
        <div id="page-content-wrapper">
    
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
              <button class="btn btn-primary" id="menu-toggle">Menú</button>
      
            
              
            </nav>
      
            <div class="container" style=>
              <div class="card mb-3">
                  <img src="https://blog.aitana.es/wp-content/uploads/2019/09/Recursos-Humanos.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      
                      <div class="container">
                          <h5 class="card-title text-center"><strong>Perfil de {{$empleado->nombre}} {{$empleado->apellido}}</strong></h5>
                          <div class="row">
                              <div class="col-12 col-md-4">
                                  <p class="card-text text-capitalize"><strong>Nombre:</strong> {{$empleado->nombre}}</p>
                                  <p class="card-text text-capitalize"><strong>Apellido:</strong> {{$empleado->apellido}}</p>
                                  <p class="card-text text-capitalize"><strong>DNI:</strong> {{$empleado->dni}}</p>
                                  <p class="card-text "><strong>Email:</strong> {{$empleado->email}}</p>
                               
                               
                              </div>
                              <div class="col-12 pt-3 pt-md-0 col-md-4">
                              <p class="card-text text-capitalize"><strong>Fecha de Nacimiento:</strong> {{$empleado->fecha_nacimiento}} ({{$edad}} años)</p>
                                  <p class="card-text text-capitalize"><strong>Domicilio:</strong> {{$empleado->domicilio}}</p>
                                  <p class="card-text text-capitalize"><strong>Telefono:</strong> {{$empleado->telefono}}</p>
                                  <p class="card-text text-capitalize"><strong>Estado Civil:</strong> {{$empleado->estado_civil}}</p>
                                  
                              </div>
                              <div class="col-12 pt-3 pt-md-0 col-md-4">
                                  <p class="card-text text-capitalize"><strong>Obra Social:</strong> {{$empleado->obra_social}}</p>
                                  <p class="card-text text-capitalize"><strong>Puesto Trabajo:</strong> {{$empleado->puesto_trabajo}}</p>
                                  <p class="card-text text-capitalize"><strong>Fecha de Ingreso:</strong> {{$empleado->fecha_ingreso}} ({{$antiguedad}} años de antiguedad)</p>
                              <p class="card-text text-capitalize"><strong>Vacaciones: </strong> {{$vacaciones}}</p>
                                 
                              </div>
                              <div class="col-12">
                              <p class="pt-5 card-text text-capitalize text-center"><small class="text-muted">Ultima edición del empleado {{$empleado->nombre}} {{$empleado->apellido}}: {{$empleado->updated_at}}</small></p>
                              </div>
  
                          </div>
  
                      </div>
  
                   
                 
                  </div>
                </div>
           
            
             <div>
  
             </div>
            </div>
          </div>
        <!-- /#page-content-wrapper -->
    
      </div>
   

</section>
@endsection

@section('scripts')
   <!-- /#wrapper -->
    
      <!-- Bootstrap core JavaScript -->
    
    
      <!-- Menu Toggle Script -->

@endsection