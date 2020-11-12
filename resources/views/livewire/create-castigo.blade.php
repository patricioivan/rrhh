<div>
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
                          <h5 class="card-title text-center"><strong>Castigos de {{$empleado->nombre}} {{$empleado->apellido}}</strong></h5>
                          <div class="row">
                                <div class="col-12 col-md-12">
                                    <form  id="form" class="pt-5" wire:submit.prevent={{$metodo}}>
                              
            
                                        <div  class="form-group">
                                            @error('infraccion') <span class="text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-estilo">
                            
                                            <textarea class="form-estilo form-control" id="infraccion" placeholder="Infraccion " wire:model="infraccion" cols="30" rows="5"></textarea>
                                            </div>
                                        
                                        </div>              
                                        <div class="form-group">
                                            @error('observaciones') <span class="text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-estilo ">
                                                <textarea class="form-estilo form-control" id="observaciones" placeholder="Observaciones" wire:model="observacion" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            @error('castigo_recibido') <span class="text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-estilo ">
                                                <textarea class="form-estilo form-control" id="castigo_recibido" placeholder="Castigo recibido " wire:model="castigo_recibido" cols="30" rows="5"></textarea>
                                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            @error('suspension') <span class="text-danger">{{ $message }}</span> @enderror
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value=0 wire:model="suspension">
                                                <label class="custom-control-label" for="customRadio1">No corresponde suspension</label>
                                              </div>
                                              <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value=1 wire:model="suspension">
                                                <label class="custom-control-label" for="customRadio2">Corresponde suspension</label>
                                              </div>
                                        </div>
                                        @if($suspension)
                                        <div class="form-group">
                                            @error('fecha_inicio') <span class="text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-estilo">
                                                
                                                <input wire:model="fecha_inicio" placeholder="Fecha Inicio de la Suspension" class="form-estilo form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            @error('fecha_terminacion') <span class="text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-estilo">
                                                
                                                <input wire:model="fecha_terminacion" placeholder="Fecha Finalizacion de la Suspension" class="form-estilo form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
                                            </div>
                                        </div>
                                        @endif

                                        <div class="col-12 text-center">
                                            <a target="_blank" class="" href="">
                                                <button id="boton-form-empleados" type="submit" class="imagen-boton-chateamos btn btn-success">{{$textoBoton}}</button>
                                            </a>
                                        </div>
                                    
                                    </form>
                                    
                                <p>Numero Totales de Infracciones: {{$numeroInfracciones}}</p>
                                @if($updateMode)
                                <a class="pl-3 confirmacion-delete"  href="javascript:void(0)"  type="button" wire:click="cancelEdit">Cancelar Edicion <i style="" class=" fas fa-times-circle"></i></a>
                                @endif
                                @if (session()->has('message'))
                                {{ session('message') }}
                                @endif
                            
            
                                
                                 <div class="col-12">
                                    
                                    @foreach($castigos->chunk(3) as $chunk)
                                    <div class="card-group">
                                       @foreach($chunk as $item)
                                       <div class="card border-danger mb-3" style="max-width: 18rem;">
                                           <div class="card-header">Infraccion: {{$item->infraccion}}
                                            <a class=" pl-2 confirmacion-delete"  href="#form"  type="button" wire:click="edit({{$item->id}})"><i style="" class="fas fa-edit"></i></a>
                                           
                                            <a class="pl-3 confirmacion-delete"  href="javascript:void(0)"  type="button" wire:click="kill({{ $item->id }})"><i style="" class="fas fa-trash"></i></a>
                                            

                                        </div>
                                           <div class="card-body text-danger">
                                             <h5 class="card-title">Castigo: {{$item->castigo_recibido}}</h5>
                                             <p class="card-text">Observaciones: {{$item->observacion}}</p>
                                             <p class="card-text">Creado en {{$item->created_at}} por Lic. {{Auth::user()->name}}</p>
                                             <p class="card-text">Ult. Actualizacion {{$item->updated_at}}</p>
                                             @if($item->suspension)
                                             <p class="card-text">Aplica Suspension</p>
                                             
                                             <p class="card-text">Fecha Inicio Susp: {{$item->fecha_inicio}}</p>
                                             <p class="card-text">Fecha Fin Susp: {{$item->fecha_terminacion}}</p>
                                             @else
                                             <p class="card-text">No aplica suspension</p>
                                             @endif
                                           </div>
                                         </div>
                                       @endforeach
                                     
                                    
                                   
                                   </div>
                                    @endforeach
                                  

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
    
</div>
