<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Perfil de {{$empleado->nombre}} {{$empleado->apellido}}</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card mb-3">
                <div class="card-body">
                    
                    <div class="container">
                        <h5 class="card-title text-center"></h5>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p class="card-text text-capitalize"><strong>Nombre:</strong> {{$empleado->nombre}}</p>
                                <p class="card-text text-capitalize"><strong>Apellido:</strong> {{$empleado->apellido}}</p>
                                <p class="card-text text-capitalize"><strong>DNI:</strong> {{$empleado->dni}}</p>
                                <p class="card-text "><strong>Email:</strong> {{$empleado->email}}</p>
                                <p class="card-text text-capitalize"><strong>Obra Social:</strong> {{$empleado->obra_social}}</p>
                                <p class="card-text text-capitalize"><strong>Puesto Trabajo:</strong> {{$empleado->puesto_trabajo}}</p>
                               
                             
                            </div>
                            <div class="col-12 pt-3 pt-md-0 col-md-6">
                            <p class="card-text text-capitalize"><strong>Fecha de Nacimiento:</strong> {{$empleado->fecha_nacimiento}} ({{$edad}} años)</p>
                                <p class="card-text text-capitalize"><strong>Domicilio:</strong> {{$empleado->domicilio}}</p>
                                <p class="card-text text-capitalize"><strong>Telefono:</strong> {{$empleado->telefono}}</p>
                                <p class="card-text text-capitalize"><strong>Estado Civil:</strong> {{$empleado->estado_civil}}</p>
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
   
           
     
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

<!--
 

  <-->