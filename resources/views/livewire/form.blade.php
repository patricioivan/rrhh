@extends('layouts.app')
@section('content')

    <section style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5">
                    @include('livewire.header-empleado')
                                  
                    @livewire('form-empleados', ['empleado' => $empleado])
                    

                </div>

            </div>
        </div>
    </section>
@endsection

