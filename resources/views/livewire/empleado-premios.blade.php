@extends('layouts.app')
@section('content')
<section>
    @livewire('create-premio', ['empleado' => $empleado ])
    
</section>
@endsection
