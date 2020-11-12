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
                          <h5 class="card-title text-center"><strong>Premios de {{$empleado->nombre}} {{$empleado->apellido}}</strong></h5>
                          <div class="row">
                                <div class="col-12 col-md-12">
                                    <form class="pt-5" wire:submit.prevent={{$metodo}}>
            
            
                                        <div class="form-group">
                                            @error('logro') <span class="text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-estilo">
                            
                                            <textarea class="form-estilo form-control" id="logro" placeholder="Logro conseguido " wire:model="logro" cols="30" rows="5"></textarea>
                                            </div>
                                        
                                        </div>              
                                        <div class="form-group">
                                            @error('observaciones') <span class="text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-estilo ">
                                                <textarea class="form-estilo form-control" id="observaciones" placeholder="Observaciones" wire:model="observacion" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            @error('premio_obtenido') <span class="text-danger">{{ $message }}</span> @enderror
                                            <div class="input-group form-estilo ">
                                                <textarea class="form-estilo form-control" id="premio_obtenido" placeholder="Premio obtenido " wire:model="premio_obtenido" cols="30" rows="5"></textarea>
                                            
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <a target="_blank" class="" href="">
                                                <button id="boton-form-empleados" type="submit" class="imagen-boton-chateamos btn btn-success">{{$textoBoton}}</button>
                                            </a>
                                        </div>
                                    
                                    </form>

                                    <p>Numero Totales de Premios: {{$numeroPremios}}</p>
                                    @if($updateMode)
                                    <a class="pl-3 confirmacion-delete"  href="javascript:void(0)"  type="button" wire:click="cancelEdit">Cancelar Edicion <i style="" class=" fas fa-times-circle"></i></a>
                                    @endif
                                    @if (session()->has('message'))
                                    {{ session('message') }}
                                    @endif
                                
                          
                                 </div>
                                 <div class="col-12">
                                    
                                     @foreach($premios->chunk(3) as $chunk)
                                    <div class="card-group">
                                        @foreach($chunk as $item)
                                        <div class="card border-success mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Logro: {{$item->logro}} 
                                                <a class=" pl-2 confirmacion-delete"  href="#form"  type="button" wire:click="edit({{$item->id}})"><i style="" class="fas fa-edit"></i></a>
                                                <a class="pl-3 confirmacion-delete"  href="javascript:void(0)"  type="button" wire:click="kill({{ $item->id }})"><i style="" class="fas fa-trash"></i></a>
                                            </div>
                                            
                                                <div class="card-body text-success">
                                                    <h5 class="card-title">Premio: {{$item->premio_obtenido}}</h5>
                                                    <p class="card-text">Observaciones: {{$item->observacion}}</p>
                                                    <p class="card-text">Fecha: {{$item->created_at}}</p>
                                                    <p class="card-text">Creado en {{$item->created_at}} por Lic. {{Auth::user()->name}}</p>
                                                    <p class="card-text">Ult. Actualizacion {{$item->updated_at}}</p>
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