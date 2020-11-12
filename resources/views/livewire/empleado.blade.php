@extends('layouts.app')
@section('content')

    <section style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5">
                    @include('livewire.header-empleado')
                    @if (session()->has('message'))
                    <div id="effect" class="col-4 mt-5 text-center" style="border-radius: 13px;background-color: rgba(229, 83, 28, 1);">
                        
                        <p class="pr-3 pl-3 cambios-guardados">
                            {{ session('message') }}
                        </p>
                     
                    </div>
                       
                   
                    @endif
                    @livewire('tabla-empleados')
                  
                    
                </div>

            </div>
        </div>
    </section>
@endsection

@section('scripts')

<script>
$( "#effect" ).mouseover(function() {
  $( "#effect" ).hide( "slide", { direction: "left" }, "slow" );
});
    </script>
<script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>


@endsection
