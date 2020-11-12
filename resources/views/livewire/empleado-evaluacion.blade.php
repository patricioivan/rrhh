@extends('layouts.app')
@section('content')
<section>
    @livewire('create-evaluacion', ['empleado' => $empleado ])
    
</section>
@endsection
