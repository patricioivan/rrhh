<div>

                    <form class="pt-5" wire:submit.prevent='submit'>
                        @csrf
                        
                        <div class="form-group">
                             @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
                            <div class="input-group form-estilo">
                                <input type="text" class="form-estilo form-control" id="nombre" placeholder="Nombre" wire:model="nombre">
                             
                            </div>
                            
                        </div>              
                        <div class="form-group">
                             @error('apellido') <span class="text-danger">{{ $message }}</span> @enderror
                            <div class="input-group form-estilo ">
                               <input type="text" class="form-estilo form-control" id="apellido" placeholder="Apellido" wire:model="apellido">
                            </div>
                        </div>
                       
                        <div class="form-group">
                             @error('domicilio') <span class="text-danger">{{ $message }}</span> @enderror
                            <div class="input-group form-estilo ">
                                <input type="text" class="form-estilo form-control" id="domicilio" placeholder="Domicilio" wire:model="domicilio">
                               
                            </div>
                        </div>
                        
                        <div class="form-group">
                             @error('dni') <span class="text-danger">{{ $message }}</span> @enderror
                            <div class="input-group form-estilo ">
                                <input type="text" class="form-estilo form-control" id="dni" placeholder="DNI" wire:model="dni">
                               
                            </div>
                        </div>
                        <div class="form-group">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                           <div class="input-group form-estilo ">
                               <input type="email" class="form-estilo form-control" id="email" placeholder="Email" wire:model="email">
                              
                           </div>
                       </div>
                        
                        <div class="form-group">
                             @error('telefono') <span class="text-danger">{{ $message }}</span> @enderror
                            <div class="input-group form-estilo ">
                               <input type="text" class="form-estilo form-control" id="telefono" placeholder="Tel. de contacto" wire:model="telefono">
                            </div>
                        </div>
                        <div class="form-group">
                            @error('estado_civil') <span class="text-danger">{{ $message }}</span> @enderror
                            <div class="input-group form-estilo ">
                                <select class=" form-estilo custom-select" id="inputGroupSelect04" wire:model="estado_civil" >
                                    <option value="" selected disable>Estado Civil</option>
                                    <option value="soltero">Soltero</option>
                                    <option value="casado">Casado</option>
                                    <option value="divorciado">Divorciado</option>
                                </select>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            @error('hijos') <span class="text-danger">{{ $message }}</span> @enderror
                           <div class="input-group form-estilo ">
                              <input type="text" class="form-estilo form-control" id="hijos" placeholder="Cantidad de hijos" wire:model="hijos">
                           </div>
                       </div>
                        <div class="form-group">
                            @error('obra_social') <span class="text-danger">{{ $message }}</span> @enderror
                            <div class="input-group form-estilo ">
                                <input type="text" class="form-estilo form-control" id="obra_social" placeholder="Obra social" wire:model="obra_social">
                            </div>
                        </div>
                        <div class="form-group">
                            @error('puesto_trabajo') <span class="text-danger">{{ $message }}</span> @enderror
                            <div class="input-group form-estilo ">
                                <select class=" form-estilo custom-select" id="inputGroupSelect05" wire:model="puesto_trabajo" >
                                    <option value="" selected disable>Puesto de Trabajo</option>
                                    <option value="manager">Manager</option>
                                    <option value="desarrollador">Desarrollador</option>
                                    <option value="ba">BA</option>
                                    <option value="qa">QA</option>
                                </select>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            @error('fecha_nacimiento') <span class="text-danger">{{ $message }}</span> @enderror
                            <div class="input-group form-estilo">
                                
                                <input wire:model="fecha_nacimiento" placeholder="Fecha de Nacimiento" class="form-estilo form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
                            </div>
                        </div>
                        <div class="form-group">
                            @error('fecha_ingreso') <span class="text-danger">{{ $message }}</span> @enderror
                            <div class="input-group form-estilo">
                                
                                <input wire:model="fecha_ingreso" placeholder="Fecha de Ingreso" class="form-estilo form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
                            </div>
                        </div>
                        
                        <div class="col-12 text-center">
                            <a target="_blank" class="" href="">
                                <button id="boton-form-empleados" type="submit" class="imagen-boton-chateamos btn btn-success">Dar de Alta</button>
                            </a>
                        </div>
                    </form>
</div>        
                
